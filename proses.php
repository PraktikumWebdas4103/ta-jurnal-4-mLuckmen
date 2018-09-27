<?php
	session_start();
	$_SESSION['userName'] = 'luckMen';

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jKel = $_POST['jKel'];
		$tglLahir = $_POST['tglLahir'];
		$film = $_POST['film'];
		$wisata = $_POST['wisata'];

		$user = array(
			array(
				'nama' => 'Muhammad Luqman', 
				'nim' => '6701174014', 
				'jKel' => 'Pria', 
				'tglLahir' => '1999-04-19'
			)
		);

		$dataBaru = array(
			'nama' => $nama,
			'nim' => $nim,
			'jKel' => $jKel,
			'tglLahir' => $tglLahir
		);

		$_SESSION['userName'] = array_push($user, $dataBaru);

		// print_r($user);
		echo "<br>";
		//print_r($film);

		echo "<br>";
		// for ($i=0; $i < count($user); $i++) {
		// 	echo $user[$i]['nama']."<br>";
		// 	echo $user[$i]['nim']."<br>";
		// 	echo $user[$i]['jKel']."<br>";
		// 	echo $user[$i]['tglLahir']."<br>";
		// }

		?>
		<center>
		<table border=1>
			<tr>
				<th>No. </th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th>Film</th>
				<th>Wisata</th>
			</tr>
			<?php
				for ($i=0; $i < count($user); $i++) { 
					?>
					<tr>
						<td><?php echo ($i+1) ?></td>
						<td><?php echo $user[$i]['nama'] ?></td>
						<td><?php echo $user[$i]['nim'] ?></td>
						<td><?php echo $user[$i]['jKel'] ?></td>
						<td><?php echo $user[$i]['tglLahir'] ?></td>
						<td>
							<?php for ($j=0; $j < count($film) ; $j++) { 
								echo $film[$j];
								if ($j < count($film)-1) {
									echo ", ";
								}
							} ?>
						</td>
						<td>
							<?php for ($j=0; $j < count($wisata) ; $j++) { 
								echo $wisata[$j];
								if ($j < count($wisata)-1) {
									echo ", ";
								}
							} ?>
						</td>
					</tr>
			<?php } ?>
		</table>
		<?php
	}
?>
<a href="index.php">tambah</a>