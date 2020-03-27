<?php
$n = mt_rand(1, 4);

if ($n === 1) {
	$message = 'GitHubの勉強中です';
} elseif ($n === 2) {
	$message = 'PHPの勉強中です';
} elseif ($n === 3) {
	$message = '次はCakePHPです';
} else {
	$message = 'Laravelも勉強します';
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ランダムにメッセージを表示します</title>
</head>
<body>
<p>ランダムにメッセージを表示しています。</p>
<p><?php echo $message; ?>
</body>
</html>
