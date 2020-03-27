<?php $i = 2; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>偶数を数えます</title>
</head>
<body>
<p>2から50までの偶数</p>
<?php
while($i <= 50){
	echo $i.'<br>';
	$i +=2;
}
?>

</body>
</html>

