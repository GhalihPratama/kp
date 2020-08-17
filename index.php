<?php
    include "koneksi.php";
    session_start();
	if (!isset($_SESSION['username'])){
		header ("location:login.php");
	}

    $diklat = mysqli_query($conn, "SELECT * FROM diklat ORDER BY id DESC");
    $seminartbl = mysqli_query($conn, "SELECT * FROM seminartbl ORDER BY id DESC");
?>

<html>
    <head>
    <title>Sistem Informasi Data Pelatihan dan Seminar Widyaswara PPPPTKBMTI</title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/table.css">

    <body>
    <h1>Data Diklat</h1>
    <div id="wrapper">
    <button class="button"><a href= "diklat/diklat.php">Tambah data diklat baru</a><br></button>

    <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>NIP</span></th>
        <th><span>Nama Widyaswara</span></th>
        <th><span>Unit Kerja</span></th>
        <th><span>Pelatihan yang Diikuti</span></th>
        <th><span>Tahun</span></th>
        <th><span>Jumlah Jam</span></th>
        <th><span>Action</span></th>
      </tr>
    </thead>
    <tbody>
      <?php
            while($diklatdata = mysqli_fetch_array($diklat)){
                echo "<tr>";
                echo "<td>".$diklatdata['nip']."</td>";
                echo "<td>".$diklatdata['nama']."</td>";
                echo "<td>".$diklatdata['unit']."</td>";
                echo "<td>".$diklatdata['pelatihan']."</td>";
                echo "<td>".$diklatdata['tahun']."</td>";
                echo "<td>".$diklatdata['jumlah']."</td>";
                echo "<td><a href='diklat/edit.php?id=$diklatdata[id]'>Edit</a> | <a href='diklat/delete.php?id=$diklatdata[id]'>Delete</a></td></tr>";
            }
        ?>
    </tbody>
  </table>
 </div> <br><br>

    <h1>Data Seminar</h1>
    <div id="wrapper">
    <button class="button"><a href= "seminar/seminar.php">Tambah data seminar baru</a><br></button>

    <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>NIP</span></th>
        <th><span>Nama Widyaswara</span></th>
        <th><span>Unit Kerja</span></th>
        <th><span>Seminar yang Diikuti</span></th>
        <th><span>Tahun</span></th>
        <th><span>Jumlah Jam</span></th>
        <th><span>Action</span></th>
      </tr>
    </thead>
    <tbody>
      <?php
            while($sdata = mysqli_fetch_array($seminartbl)){
                echo "<tr>";
                echo "<td>".$sdata['nip']."</td>";
                echo "<td>".$sdata['nama']."</td>";
                echo "<td>".$sdata['unit']."</td>";
                echo "<td>".$sdata['seminar']."</td>";
                echo "<td>".$sdata['tahun']."</td>";
                echo "<td>".$sdata['jumlah']."</td>";
                echo "<td><a href='seminar/edit.php?id=$sdata[id]'>Edit</a> | <a href='seminar/delete.php?id=$sdata[id]'>Delete</a></td></tr>";
            }
        ?>
    </tbody>
    </table>
    </div>
    <button class="button"><a href="logout.php">Logout</a></button>
    </body>
</html>