<?php
// Koneksi ke database
include 'koneksi.php';

// Quary untuk mengambil semua data user
$query = "SELECT * FROM jurusan";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jurusan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h2>daftar Jurusan</h2>
        <a href="create.php" class="btn btn-primary mb-3">Tambah Jurusan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Kd_jurusan</th>
                    <th>Nama_jurusan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                     <tr>
                        <td><?php echo $row['kd_jurusan']; ?></td>
                        <td><?php echo $row['nama_jurusan']; ?></td>
                        <td>
                            <a href="update.php?kd_jurusan=<?php echo $row['kd_jurusan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?kd_jurusan=<?php echo $row['kd_jurusan']; ?>" class="btn btn-danger btn-sm" >Delete</a>
                         </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>



    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> </h1>
</body>
</html>
