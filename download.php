<?php
// download.php?file=파일명.apk
// 보안: basename으로 경로 침투 방지
if (!isset($_GET['file'])) { header("HTTP/1.1 400 Bad Request"); echo "Missing file"; exit; }
$file = basename($_GET['file']);
$path = __DIR__ . DIRECTORY_SEPARATOR . $file;
if (!file_exists($path) || pathinfo($path, PATHINFO_EXTENSION) !== 'apk') {
    header("HTTP/1.1 404 Not Found");
    echo "File not found";
    exit;
}

// 헤더 강제 다운로드
$filesize = filesize($path);
$dispName = rawurldecode($file);
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.android.package-archive');
header('Content-Disposition: attachment; filename="' . $dispName . '"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . $filesize);

// 출력
ob_clean();
flush();
readfile($path);
exit;
