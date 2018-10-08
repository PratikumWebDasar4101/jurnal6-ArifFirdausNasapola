<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center">
	<form action="proses.php" method="post" enctype="multipart/form-data">

			<tr>
				<td colspan="3" align="center"><h2>Form Mahasiswa</h2></td>
			</tr>

			<tr>
				<td>Nim<td>:<td><input type="number" name="nim"><br></td>
			</tr>

			<tr>
				<td>Nama<td>:<td><input type="text" name="nama"></td></td></td></tr>

		
		<tr><td>Fakultas<td>:
		<td><select name="fakultas" id="dropdown">
			<option value="FIT">FIT</option>
			<option value="FIK">FIK</option>
			<option value="FKB">FKB</option>
			<option value="FEB">FEB</option>
			<option value="FEB">FIK</option>
		</select></td></td></tr>
		<br>
		<tr><td>Jenis kelamin<td>:<td>
		<input type="radio" name="jeniskelamin" value="laki-laki">laki-laki
		<td><input type="radio" name="jeniskelamin" value="perempuan">perempuan </td></tr></td></td></td>
		

     <tr><td>Kelas<td>:<td>
		<input type="radio" name="kelas" value="01">MI 01
		<td><input type="radio" name="kelas" value="02">MI 02 </td></tr></td></td></td>
    
    <tr><td>Hobi<td>:<td>
		<input type="checkbox" name="hobi" value="nonton">nonton
		<td><input type="checkbox" name="hobi" value="musik">musik </td></tr></td></td></td>
      

      <tr><td>Alamat<td>:<td><textarea name="alamat"></textarea>
	
		<tr><td><input type="submit" name="upload"  value="kirim"></td></td></td></td></tr>
	</table>
	</form>

</body>
</html>