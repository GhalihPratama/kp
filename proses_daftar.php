<?php

	include "koneksi.php";
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($nama)){
		echo "<script>alert('Nama belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
	else
		if (empty($nip)){
			echo "<script>alert('NIP belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
		}
	else 
		if(empty($username)){
			echo "<script>alert('Username belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
		}
	else 
		if (empty($password)){
			echo "<script>alert('Password belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
		}
	else{		
        $daftar = "INSERT INTO user(nama, nip, username, password) VALUES ('$nama','$nip','$username','$password')";
		mysqli_query($conn , $daftar);
		if ($daftar){
			echo "<script>alert('Berhasil Mendaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		}
		else{
			echo "<script>alert('Gagal Mendaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
		}
	}
?>