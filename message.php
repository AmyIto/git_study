<?php
$n = mt_rand(1, 5);

if ($n === 1) {
		$message = 'GitHubの勉強中です';
} elseif ($n === 2) {
		$message = 'PHPの勉強中です';
} elseif ($n === 3) {
		$message = '次はCakePHPです';
} elseif ($n === 4) {
		$message = 'Laravelも勉強します';
} else {
		$message = 'プロサーは面白いです';
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
