<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="tulis nim anda disini">
    <meta name="author" content="tulis nama anda disini">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <p>
        <label>Pilih Gambar yang akan diupload: </label><br>
        <input type="file" name="gambar" id="gambar1">
    </p>
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
$pesan = "";

if(isset($_POST["submit"])) {
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $pesan = "File bukan gambar.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        $pesan = "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    if ($_FILES["gambar"]["size"] > 500000) {
        $pesan = "Maaf, file terlalu besar.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $pesan = "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        $pesan = "Maaf, file Anda gagal diunggah.";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $pesan = "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])). " berhasil diunggah.";
        } else {
            $pesan = "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>

<?php if(!empty($pesan)): ?>
    <p><?php echo $pesan; ?></p>
<?php endif; ?>
</body>
</html>
