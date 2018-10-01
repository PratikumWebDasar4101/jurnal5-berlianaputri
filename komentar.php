<!DOCTYPE html>
<html>
<head>
	<title>Komentar</title>
</head>
<body>
	<form action="" method="post">
		Komentar : <textarea name="komen" rows="5" cols="40"></textarea>
		<input type="submit" name="submit" value="KIRIM">
	</form>
</body>
</html>
<?php
	if (is_null($_POST['komen'])){
		echo "Komentar masih kosong";
	}elseif (strlen($_POST['komen'])< 5){
		echo "Error";
	}else{
		echo strlen($_POST['komen']);
	}
?>
