<?php
// include database connection file
include "../koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
	$unit = $_POST['unit'];
    $pelatihan = $_POST['pelatihan'];
    $tahun = $_POST['tahun'];
    $jumlah = $_POST['jumlah'];

    // update user data
    $result = mysqli_query($conn, "UPDATE diklat SET nip='$nip',nama='$nama',unit='$unit', pelatihan='$pelatihan',tahun='$tahun',jumlah='$jumlah' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: ../index.php");
}

// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$query = mysqli_query($conn, "SELECT * FROM diklat WHERE id=$id");

while($data = mysqli_fetch_array($query))
{
    $nip = $data['nip'];
    $nama = $data['nama'];
    $unit = $data['unit'];
    $pelatihan = $data['pelatihan'];
    $tahun = $data['tahun'];
    $jumlah = $data['jumlah'];
}
?>

<html>
<head>  
    <title>Ubah Data Diklat</title>
    <link rel="stylesheet" type="text/css" href="../css/data.css">
</head>

<body>
<div class="container">
        <form id="contact" action="edit.php" method="post">
            <h3>Ubah Data Diklat</h3>
            <fieldset>
                <input placeholder="Masukan NIP" name="nip" value=<?php echo $nip;?> type="text" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Masukan Nama Widyaswara" value=<?php echo $nama;?> name="nama" type="text" required>
            </fieldset>
            <fieldset>
                <input placeholder="Masukan Unit Kerja" name="unit" value=<?php echo $unit;?> type="text" required>
            </fieldset>
            <fieldset>
                <input placeholder="Pelatihan yang Diikuti" name="pelatihan" value=<?php echo $pelatihan;?> type="text" required>
            </fieldset>
            <fieldset>
                <input placeholder="Tahun Pelaksanaan" name="tahun" value=<?php echo $tahun;?> type="text" required>
            </fieldset>
                <input placeholder="Jumlah Jam" name="jumlah" type="text" value=<?php echo $jumlah;?> tabindex="4" required>
            <fieldset>
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            </fieldset>
            <fieldset>
                <button type="submit" name ="update" value="Update" id="contact-submit">Simpan Perubahan</button>
            </fieldset>

        </form>
    </div>
</body>
</html>