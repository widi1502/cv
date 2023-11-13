<?php
include_once('conn.php');
session_start();
session_destroy();

$result = mysqli_query($conn, "SELECT * FROM cv_data ORDER BY nama ASC");
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Curriculum Vitae | Home</title>
</head>
<body>
<div class="container">
        <div class="title">
            <h1>Curriculum Vitae</h1>
        </div>
        <div class="data">
            <div class="biodata">
                <h1>Nama</h1>
                <h4><?php echo $data['nama'] ?></h4>
                <h1>Alamat</h1>
                <h4><?php echo $data['alamat'] ?></h4>
                <h1>Telepon</h1>
                <h4><?php echo $data['telepon'] ?></h4>
                <h1>Email</h1>
                <h4><?php echo $data['email'] ?></h4>
                <h1>Web</h1>
                <h4><?php echo $data['web'] ?></h4>
                <h1>Pendidikan</h1>
                <h4><?php echo $data['pendidikan'] ?></h4>
                <h1>Pengalaman Kerja</h1>
                <h4><?php echo $data['pengalaman_kerja'] ?></h4>
                <h1>Keterampilan</h1>
                <h4><?php echo $data['keterampilan'] ?></h4>
            </div>
            <div class="foto">
                <img src="<?php echo $data['foto_path'] ?>" alt="">
                <a href="login.php">Edit</a>
            </div>
        </div>
    </div>
</body>
</html>