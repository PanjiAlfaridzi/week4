
<form action="simpan.php" method="POST">

<h1>Form Pendataan</h1>
Nama Lengkap:<br>
<input type="text" name="nama_lengkap" size="55"><br><br>
Username:<br>
<input type="text" name="username" size="55"><br><br>

Email :<br>
<input type="text" name="email" size="55"><br><br>

Alamat :<br>
<textarea name="pesan" cols="40" rows="3"></textarea><br><br>

Jenis kelamin:<br>
Laki-laki<input type="radio" name="jenis_kelamin" value="L">
Perempuan<input type="radio" name="jenis_kelamin" value="P"><br><br>

Hobi :<br>
<input type="checkbox" name="opt[]" value="volly">Volly
<input type="checkbox" name="opt[]" value="basket">Basket
<input type="checkbox" name="opt[]" value="badminton">Badminton
<input type="checkbox" name="opt[]" value="sepakbola">Sepakbola<br><br>

Pekerjaan :<br>
<select name="info">				
<option selected="select">-= Pilih =-</option>		
<option value="Mahasiswa">Mahasiswa</option>
<option value="buruh">Buruh</option>		
<option value="karyawan">Karyawan</option>
<option value="satpam">Satpam</option>
</select><br><br>


<input type="submit" value="Simpan" name="submit">
<input type="reset" value="Batal">







</form>
