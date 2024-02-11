<?php
// Koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Ambil data dari formulir
    $kd_jurusan = $_POST['kd_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];

    // Query untuk menyimpan data baru
    $query = "INSERT INTO jurusan (kd_jurusan, nama_jurusan) VALUES ('$kd_jurusan', '$nama_jurusan')";
    mysqli_query($conn, $query);

    // Redirect setelah berhasil membuat data baru
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Jurusan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Jurusan</h2>
        <form method="POST">
            <div class="form-group">
                <label for="kd_jurusan">kd_jurusan:</label>
                <input type="number" class="form-control" id="kd_jurusan" name="kd_jurusan">
            </div>
            <div class="form-group">
                <label for="nama_jurusan">nama_jurusan:</label>
                <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>


