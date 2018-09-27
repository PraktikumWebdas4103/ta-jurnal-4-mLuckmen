<?php
	session_start();
	$_SESSION['userName'] = 'luckMen';
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
	<form action="proses.php" method="POST">
		<table>
			<tr>
				<td colspan="2"><label><b><br>Data Diri ============================<br><br></b></label></td>
			</tr>
			<tr>
				<td><label>Nama</label></td>
				<td><input type="text" name="nama" style="width: 100%" required></td>
			</tr>
			<tr>
				<td><label>NIM</label></td>
				<td><input type="text" name="nim" style="width: 100%" required></td>
			</tr>
			<tr>
				<td><label>Jenis Kelamin</label></td>
				<td>
					<input type="radio" name="jKel" value="Pria" required>Pria
					<input type="radio" name="jKel" value="Wanita" required>Wanita
				</td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir</label></td>
				<td><input type="date" name="tglLahir" required></td>
			</tr>
			<tr>
				<td colspan="2"><label><b><br>Minat ==============================<br><br></b></label></td>
			</tr>
			<tr>
				<td colspan="2">Genre Film yang disukai :</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="checkbox" name="film[]" value="Horror">Horror
					<input type="checkbox" name="film[]" value="Action">Action
					<input type="checkbox" name="film[]" value="Anime">Anime
					<input type="checkbox" name="film[]" value="Thriller">Thriller
				</td>
			</tr>
			<tr>
				<td colspan="2">Tempat Wisata Tujuan :</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="checkbox" name="wisata[]" value="Bali">Bali
					<input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat
					<input type="checkbox" name="wisata[]" value="Pulau Drawan">Pulau Drawan
					<input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung
					<input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send"></td>
			</tr>
		</table>
	</form>
</body>
</html>