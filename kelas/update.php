<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Ambil data dari formulir
    $kd_kelas = $_POST['kd_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    
    // Query untuk mamperbarui data
    $query = "UPDATE kelas SET nama_kelas='$nama_kelas' WHERE kd_kelas='$kd_kelas'";
    mysqli_query($conn, $query);

    // Redirect setelah berhasil memperbarui data
    header("Location: index.php");
    exit();
}

// Ambil data siswa berdasarkan NIS
$kd_kelas = $_GET['kd_kelas'];
$query = "SELECT * FROM kelas WHERE kd_kelas='$kd_kelas'";
$result = mysqli_query($conn, $query);
$kelas = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit kelas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit kelas</h2>
        <form method="POST">
            <div class="form-group">
                <label for="kd_kelas">kd_kelas:</label>
                <input type="text" class="form-control" id="kd_kelas" name="kd_kelas" value="<?php echo $kelas['kd_kelas']; ?>">
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama_kelas:</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?php echo $kelas['nama_kelas']; ?>">
            </div>
             <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>

                                
                           
