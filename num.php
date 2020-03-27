<?php $i = 2; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>偶数を数えます</title>
</head>
<body>
<p>2から100までの偶数</p>
<?php
while($i <= 100){
	echo $i.'<br>';
	$i +=2;
}
?>

</body>
</html>
