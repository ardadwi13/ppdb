<!DOCTYPE html>
<html>
<head>
	<title>PPDB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Cambay:ital,wght@1,700&display=swap" rel="stylesheet">
</head>
<body>
	<ul>
		<p><a>Pendaftaran Peserta Didik Baru 2020-2021</a></p>
	</ul>
	<p>I.DATA CALON MURID</p>
	<table>
		<tr>
			<td>1.</td>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="namal"></td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Nama Panggilan</td>
			<td>:</td>
			<td><input type="text" name="namap"></td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="JK" Value="Laki-laki">
			<label for="Laki-laki">Laki-laki</label></td>
			<td><input type="radio" name="JK" Value="Perempuan">
				<label for="Perempuan">Perempuan</label></td>

		</tr>
			<tr>
			<td>4.</td>
			<td>Tempat,tanggal lahir</td>
			<td>:</td>
			<td><input type="text" name="ttl"></td>
		</tr>

		<tr>
			<td>5.</td>
			<td>Agama</td>
			<td>:</td>
			<td><input type="text" name="agama"></td>
		</tr>

		<tr>
			<td>6.</td>
			<td>Cita-cita</td>
			<td>:</td>
			<td><input type="text" name="cita"></td>
		</tr>

		<tr>
			<td>7.</td>
			<td>Hobby</td>
			<td>:</td>
			<td><input type="text" name="hoby"></td>
		</tr>

		<tr>
			<td>8.</td>
			<td>Anak Ke </td>
			<td>:</td>
			<td><input type="text" name="anake"></td>
		</tr>

		<tr>
			<td>9.</td>
			<td>Jumlah saudara</td>
			<td>:</td>
			<td>Kandung : <input type="text" name="jmlsaudara"></td>
			<td>Tiri : <input type="text" name="jmlsaudara"></td>
			<td>Angkat : <input type="text" name="jmlsaudara"></td>
		</tr>

		<tr>
			<td>10.</td>
			<td>Berat Badan </td>
			<td>:</td>
			<td><input type="text" name="berat"></td>
		</tr>
		<tr>
			<td>11.</td>
			<td>tinggi Badan</td>
			<td>:</td>
			<td><input type="text" name="tinggi"></td>
		</tr>
		<tr>
			<td>12.</td>
			<td>Golongan</td>
			<td>:</td>
			<td><input type="text" name="gol"></td>
		</tr>
	</table>

	<p>II.KETERANGAN TEMPAT TINGGAL</p>

	<table>
		<tr>
			<td>1.</td>
			<td>Alamat Rumah</td>
			<td>:</td>
			<td>RT : <input type="text" name="rt"></td>
			<td> RW : <input type="text" name="rw"></td>
		</tr>

		<tr>
			<td>-</td>
			<td>Kelurahan</td>
			<td>:</td>
			<td><input type="text" name="lurah"></td>
		</tr>

			<tr>
			<td>-</td>
			<td>Kecamatan</td>
			<td>:</td>
			<td><input type="text" name="camat"></td>
		</tr>

			<tr>
			<td>-</td>
			<td>Kota/Kabupaten</td>
			<td>:</td>
			<td><input type="text" name="kabupaten"></td>
		</tr>

			<tr>
			<td>-</td>
			<td>Propinsi</td>
			<td>:</td>
			<td><input type="text" name="prov"></td>
			<td>kode pos : <input type="text" name="pos"></td>
		</tr>
			<tr>
			<td>-</td>
			<td>No Telpon Rumah</td>
			<td>:</td>
			<td><input type="text" name="notelp"></td>
		</tr>
			<tr>
			<td>-</td>
			<td>Email</td>
			<td>:</td>
			<td><input type="Email" name="email"></td>
		</tr>
			<tr>
			<td>2.</td>
			<td>Tinggal Dengan</td>
			<td>:</td>
			<td><input type="radio" name="orang_tua">
			<label for="orangtua">Orangtua</label></td>
			<td><input type="radio" name="asrama">
			<label for="asrama">Asrama</label></td>
			<td><input type="radio" name="saudara">
			<label for="saudara">Saudara</label></td>
		</tr>
	</table>

	<p>III.KETERANGAN KESEHATAN</p>
	<table>
		<tr>
			<td>1.</td>
			<td>Penyakit Yg Pernah Di Derita</td>
			<td>:</td>
		</tr>

		<tr>
			<td>-</td>
			<td>TBC(sebutkan/kapan)</td>
			<td>:</td>
			<td><input type="text" name="tbc"></td>
		</tr>
			<tr>
			<td>-</td>
			<td>Malaria(sebutkan/kapan)</td>
			<td>:</td>
			<td><input type="text" name="malaria"></td>
		</tr>
			<tr>
			<td>-</td>
			<td>Chotipa(sebutkan/kapan)</td>
			<td>:</td>
			<td><input type="text" name="chotipa"></td>
		</tr>
			<tr>
			<td>-</td>
			<td>Cacar(sebutkan/kapan)</td>
			<td>:</td>
			<td><input type="text" name="cacar"></td>
		</tr>
			<tr>
			<td>-</td>
			<td>Lain-lain(sebutkan/kapan)</td>
			<td>:</td>
			<td><input type="text" name="lain"></td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Kelainan Jasmani/Lainnya</td>
			<td>:</td>
			<td><input type="text" name="lainnya"></td>
		</tr>
	</table>

	<p>IV.DATA ORANG TUA/WALI</p>
	<table>
		<tr>
			<td>A.Ayah</td>
		</tr>
		<tr>
			<td>1.</td>
			<td>Nama Ayah</td>
			<td>:</td>
			<td><input type="text" name="ayah"><input type="radio" name="ada"><label>masih ada</label><input type="radio" name="tiada"><label>almarhum</label></td>
		</tr>

		<tr>
			<td>2.</td>
			<td>Tempat,Tanggal lahir</td>
			<td>:</td>
			<td><input type="text" name="ttl_ayah"></td>
		</tr>

		<tr>
			<td>3.</td>
			<td>Pekerjaan</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan"></td>
		</tr>
			<tr>
			<td>4.</td>
			<td>Pendidikan Terakhir</td>
			<td>:</td>
			<td><input type="text" name="pendat"></td>
		</tr>

			<tr>
			<td>5.</td>
			<td>Kewarnegaraan/Agama</td>
			<td>:</td>
			<td><input type="text" name="warga"> / <input type="text" name="agama2"></td>
		</tr>

		<tr>
			<td>6.</td>
			<td>No.HP/WA</td>
			<td>:</td>
			<td><input type="text" name="nowa">
		</tr>

				<tr>
			<td>B.Ibu</td>
		</tr>
		<tr>
			<td>1.</td>
			<td>Nama Ibu</td>
			<td>:</td>
			<td><input type="text" name="ayah"><input type="radio" name="ada"><label>masih ada</label><input type="radio" name="tiada"><label>almarhum</label></td>
		</tr>

		<tr>
			<td>2.</td>
			<td>Tempat,Tanggal lahir</td>
			<td>:</td>
			<td><input type="text" name="ttl_ayah"></td>
		</tr>

		<tr>
			<td>3.</td>
			<td>Pekerjaan</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan"></td>
		</tr>
			<tr>
			<td>4.</td>
			<td>Pendidikan Terakhir</td>
			<td>:</td>
			<td><input type="text" name="pendat"></td>
		</tr>

			<tr>
			<td>5.</td>
			<td>Kewarnegaraan/Agama</td>
			<td>:</td>
			<td><input type="text" name="warga"> / <input type="text" name="agama2"></td>
		</tr>

		<tr>
			<td>6.</td>
			<td>No.HP/WA</td>
			<td>:</td>
			<td><input type="text" name="nowa">
		</tr>


				<tr>
			<td>C.Wali</td>
		</tr>
		<tr>
			<td>1.</td>
			<td>Nama wali</td>
			<td>:</td>
			<td><input type="text" name="ayah"><input type="radio" name="ada"><label>masih ada</label><input type="radio" name="tiada"><label>almarhum</label></td>
		</tr>

		<tr>
			<td>2.</td>
			<td>Tempat,Tanggal lahir</td>
			<td>:</td>
			<td><input type="text" name="ttl_ayah"></td>
		</tr>

		<tr>
			<td>3.</td>
			<td>Pekerjaan</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan"></td>
		</tr>
			<tr>
			<td>4.</td>
			<td>Pendidikan Terakhir</td>
			<td>:</td>
			<td><input type="text" name="pendat"></td>
		</tr>
		<tr>
			<td>5.</td>
			<td>Hubungan Dengan Murid</td>
			<td>:</td>
			<td><input type="text" name="pendat"></td>
		</tr>

			<tr>
			<td>6.</td>
			<td>Kewarnegaraan/Agama</td>
			<td>:</td>
			<td><input type="text" name="warga"> / <input type="text" name="agama2"></td>
		</tr>

		<tr>
			<td>7.</td>
			<td>No.HP/WA</td>
			<td>:</td>
			<td><input type="text" name="nowa">
		</tr>
		<tr>
			<td>8.</td>
			<td>Alamat Email</td>
			<td>:</td>
			<td><input type="text" name="nowa">
		</tr>
	</table>

	<p>VI.NILAI RAPORT</p>
	<table border="1">
		<tr>
			<td rowspan="2">NO</td>
			<td rowspan="2">Matapelajaran</td>
			<td colspan="2">Kelas 7</td>
			<td colspan="2">kelas 8</td>
			<td>kelas 9</td>
		</tr>

		<tr>
			<td>smt-1</td>
			<td>smt-2</td>
			<td>smt-1</td>
			<td>smt-2</td>
			<td>smt-1</td>
		</tr>

		<tr>
			<td>1.</td>
			<td>PAI</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>


		<tr>
			<td>2.</td>
			<td>Bahasa Indonesia</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<td>3.</td>
			<td>Bahasa Inggris</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<td>4.</td>
			<td>Matematika</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<td>5.</td>
			<td>IPA</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<td>6.</td>
			<td>IPS</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
			<tr>
			<td rowspan="4">7.</td>
			<td rowspan="4">Prestasi yang 
			pernah diraih</td>
			<td colspan="5" rowspan="4"></td>
		</tr>
			<tr>
			
		</tr>
			<tr>
		</tr>
			<tr>
		</tr>

	</table>

	<tr>
		<td><input type="submit" name="simpan" value="Simpan"></td>
	</tr>

</body>
</html>