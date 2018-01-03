
<?php
 
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
		$grade = $_POST['grade'];
		$no = $_POST['no_hp'];
		$add = $_POST['address'];
		$idea = $_POST['idea'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_siswa (nama,kelas,no_hp,alamat,cita_cita) VALUES ('$name','$grade','$no','$add','$idea')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Siswa';
		}else{
			echo 'Gagal Menambahkan Siswa';
		}
		
		mysqli_close($con);
	?>