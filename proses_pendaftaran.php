<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <?php
    if(isset($_POST['nama']) && isset($_POST['nim']) && isset($_POST['email']) && isset($_POST['tempat']) && isset($_POST['tanggal']) && isset($_POST['alamat']) && isset($_POST['jenis_kelamin'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
    ?>
    <p>Selamat datang <b><?php echo $nama; ?></b></p>
    <p>NIM: <?php echo $nim; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Tempat, Tanggal Lahir: <?php echo $tempat; ?>, <?php echo $tanggal; ?></p>
    <p>Alamat: <?php echo $alamat; ?></p>
    <p>Jenis Kelamin: <?php echo $jenis_kelamin; ?></p>
    <?php
    } else {
        echo "<p>Mohon isi semua field pada formulir.</p>";
    }
    ?>
</body>
</html>