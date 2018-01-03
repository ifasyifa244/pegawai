
<?php 
 
 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$name = $_POST['name'];
		$grade = $_POST['grade'];
		$no = $_POST['no_hp'];
		$add = $_POST['address'];
		$idea = $_POST['idea'];
		
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE tb_siswa SET nama = '$name', kelas = '$grade', no_hp = '$no', alamat='$add',cita_cita='$idea' WHERE id = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Siswa';
		}else{
			echo 'Gagal Update Data Siswa';
		}
		
		mysqli_close($con);
	}
?>