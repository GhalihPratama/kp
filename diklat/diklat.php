<!DOCTYPE html>

<html>
    <head>
        <title>Tambah Data Diklat</title>
        <link rel="stylesheet" type="text/css" href="../css/data.css">
    </head>

    <body>
    <div class="container">
        <form id="contact" action="../diklat/proses.php" method="post">
            <h3>Masukan Data Diklat yang Telah Diikuti</h3>
            <fieldset>
            <input placeholder="Masukan NIP" name="nip" type="text" required autofocus>
            </fieldset>
            <fieldset>
            <input placeholder="Masukan Nama Widyaswara" name="nama" type="text" required>
            </fieldset>
            <fieldset>
            <input placeholder="Masukan Unit Kerja" name="unit" type="text" required>
            </fieldset>
            <fieldset>
            <input placeholder="Pelatihan yang Diikuti" name="pelatihan" type="text" required>
            </fieldset>
            <fieldset>
            <input placeholder="Tahun Pelaksanaan" name="tahun" type="text" required>
            </fieldset>
            <input placeholder="Jumlah Jam" name="jumlah" type="text" tabindex="4" required>
            <fieldset>
            <button name="submit" type="submit" name ="submit" id="contact-submit">Tambahkan Data</button>
            </fieldset>
        </form>
    </div>
    </body>
</html>