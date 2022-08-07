<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Data</title>
</head>
<body>
<h2>Data Hasil</h2>	
	<table border="1">
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $_POST['nama_lengkap']?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><?php echo $_POST['username']?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $_POST['email']?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $_POST['pesan']?></td>
		</tr>
		<tr>
			<td>Jenis kelamin</td>
			<td>:</td>
			<td><?php echo $_POST['jenis_kelamin']?></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><?php 
			/*$volly = $_POST['volly'];
			$basket = $_POST['basket'];
			$badminton = $_POST['badminton'];
			$sepakbola = $_POST['sepakbola'];
			$data = "";
			if($volly == "volly")
			{
				$data = $data + "volly";
			}*/
			$opt = $_POST['opt'];
			for($i = 0;$i < count($opt); $i++)
			{
				echo $opt[$i] . "<br>";
			}
			?>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td><?php echo $_POST['info']?></td>
		</tr>
	</table>
</body>
</html>
