<?php

	include "../koneksi.php";
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
	$unit = $_POST['unit'];
    $pelatihan = $_POST['pelatihan'];
    $tahun = $_POST['tahun'];
	$jumlah = $_POST['jumlah'];
	if (empty($nip)){
		echo "<script>alert('NIP belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../diklat/diklat.php'>";
	}
	else
		if (empty($nama)){
			echo "<script>alert('Nama belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../diklat/diklat.php'>";
		}
    else
		if (empty($unit)){
			echo "<script>alert('Nama Unit belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../diklat/diklat.php'>";
		}
    else
		if (empty($pelatihan)){
			echo "<script>alert('Nama Pelatihan belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../diklat/diklat.php'>";
        }
    else
		if (empty($tahun)){
			echo "<script>alert('Tahun belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../diklat/diklat.php'>";
        }
    else
		if (empty($jumlah)){
			echo "<script>alert('Jumlah Jam belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../diklat/diklat.php'>";
		}
	else{		
        $daftar = "INSERT INTO diklat(nip, nama, unit, pelatihan, tahun, jumlah) VALUES ('$nip','$nama','$unit','$pelatihan','$tahun','$jumlah')";
		mysqli_query($conn , $daftar);
		if ($daftar){
			echo "<script>alert('Berhasil Terdaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
		}
		else{
			echo "<script>alert('Gagal Mendaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=diklat.php'>";
		}
	}
?>