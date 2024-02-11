<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Ambil data dari formulir
    $kd_jurusan = $_POST['kd_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    
    // Query untuk mamperbarui data
    $query = "UPDATE jurusan SET nama_jurusan='$nama_jurusan' WHERE kd_jurusan='$kd_jurusan'";
    mysqli_query($conn, $query);

    // Redirect setelah berhasil memperbarui data
    header("Location: index.php");
    exit();
}

// Ambil data siswa berdasarkan NIS
$kd_jurusan = $_GET['kd_jurusan'];
$query = "SELECT * FROM jurusan WHERE kd_jurusan='$kd_jurusan'";
$result = mysqli_query($conn, $query);
$kelas = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit jurusan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit jurusan</h2>
        <form method="POST">
            <div class="form-group">
                <label for="kd_kelas">kd_jurusan:</label>
                <input type="text" class="form-control" id="kd_jurusan" name="kd_jurusan" value="<?php echo $jurusan['kd_jurusan']; ?>">
            </div>
            <div class="form-group">
                <label for="nama_jurusan">Nama_jurusan:</label>
                <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="<?php echo $jurusan['nama_jurusan']; ?>">
            </div>
             <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>

                                
                           
