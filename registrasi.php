<?php 
$errornim = "";
if (isset($_POST['kirim'])) {
	$nim = htmlspecialchars(stripcslashes(trim($_POST['nim'])));
	if ($nim == "") {
		$errornim = "NIM tidak boleh kosong";
	}else{
		if (strlen($nim) <> 10 AND !is_numeric($nim)) {
			$errornim = "NIM harus 10 digit dan harus berupa angka";
		}
	}
}

$errornama = "";
if (isset($_POST['kirim'])) {
	$nama = htmlspecialchars(stripcslashes(trim($_POST['nama'])));
	if ($nama == "") {
		$errornama = "Nama tidak boleh kosong";
	}else{
		if (strlen($nama) > 25 and is_string($nama)) {
			$errornama = "Karaker nama max 25 digit dan harus berupa huruf";
		}else{
			echo "NIM : " . $_POST['nim'];
			echo "<br>";
			echo "Nama : " . $_POST['nama'];
			echo "<br>";
			echo "E-mail : " . $_POST['email'];
		}
	}
}

<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<table>
		<form action=" " method="post">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" PA></td>
				<td><div style="color: red"><?php echo $errornim; ?></div></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
				<td><div style="color: red"><?php echo $errornama; ?></div></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim" value="KIRIM"></td>
			</tr>
		</form>
	</table>

</body>
</html>
