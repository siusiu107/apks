<?php
// index.php — 같은 폴더의 .apk 목록 자동 생성
function human_filesize($bytes, $decimals = 2) {
  $sz = ['B','KB','MB','GB','TB']; $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . $sz[$factor];
}
$files = glob(__DIR__ . '/*.apk');
usort($files, function($a,$b){ return filemtime($b) - filemtime($a); });
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>APK 다운로드</title>
<style>body{font-family:Noto Sans,system-ui;padding:20px}li{margin:8px 0}</style>
</head>
<body>
  <h1>APK 목록 (자동)</h1>
  <ul>
    <?php if(empty($files)): ?>
      <li>APK 파일이 없습니다. 같은 폴더에 업로드 해주세요.</li>
    <?php else: ?>
      <?php foreach($files as $f): 
        $name = basename($f);
        $size = human_filesize(filesize($f));
        $mtime = date('Y-m-d H:i', filemtime($f));
      ?>
        <li>
          <a href="download.php?file=<?=urlencode($name)?>" download><?=htmlspecialchars($name)?></a>
          — <?= $size ?>, <?= $mtime ?>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>
</body>
</html>
