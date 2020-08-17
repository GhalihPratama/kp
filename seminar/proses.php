<?php
	include "../koneksi.php";
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
	$unit = $_POST['unit'];
    $seminar = $_POST['seminar'];
    $tahun = $_POST['tahun'];
    $jumlah = $_POST['jumlah'];
    
	if (empty($nip)){
		echo "<script>alert('NIP belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=../seminar/proses.php'>";
	}
	else
		if (empty($nama)){
			echo "<script>alert('Nama belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../seminar/proses.php'>";
		}
    else
		if (empty($unit)){
			echo "<script>alert('Nama Unit belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../seminar/proses.php'>";
		}
    else
		if (empty($seminar)){
			echo "<script>alert('Nama Seminar belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../seminar/proses.php'>";
        }
    else
		if (empty($tahun)){
			echo "<script>alert('Tahun belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../seminar/proses.php'>";
        }
    else
		if (empty($jumlah)){
			echo "<script>alert('Jumlah Jam belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../seminar/proses.php'>";
		}
	else{		
        $daftar = "INSERT INTO seminartbl(nip, nama, unit, seminar, tahun, jumlah) VALUES ('$nip','$nama','$unit','$seminar','$tahun','$jumlah')";
		mysqli_query($conn , $daftar);
		if ($daftar){
			echo "<script>alert('Berhasil Terdaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
		}
		else{
			echo "<script>alert('Gagal Mendaftar')</script>";
			echo "<meta http-equiv='refresh' content='1 url=seminar.php'>";
		}
	}
?>