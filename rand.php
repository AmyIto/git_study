<?php
$n = mt_rand(1, 6);

if ($n === 1) {
	$message = 'GitHubの勉強中です';
} elseif ($n === 2) {
	$message = 'PHPの勉強中です';
} elseif ($n === 3) {
	$message = '次はCakePHPです';
} elseif ($n === 4) {
	$message = 'Laravelも勉強します';
} elseif ($n === 5) {
	$message = 'プロサーは面白いです';
} else {
	$message = '寿司打を練習します';
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
