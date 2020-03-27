<?php
function tokyoTime() {
	date_default_timezone_set('Asia/Tokyo');
	echo date('Y/m/d H:i');
}
function singaporeTime() {
	date_default_timezone_set('Asia/Singapore');
	echo date('Y/m/d H:i');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>課題20</title>
</head>
<body>
<h1>日本とシンガポールの現在日時</h1>
<p>日本の現在日時</p>
<p><?php tokyoTime(); ?></p>
<p>シンガポールの現在日時</p>
<p><?php singaporeTime(); ?></p>
</body>
</html>
