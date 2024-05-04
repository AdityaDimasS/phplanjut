<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="gallery">
    <?php
    $fileList = glob('gambar/*');
    foreach ($fileList as $filename) {
        if (is_file($filename)) {
            echo '<img src="' . $filename . '" alt="gambar">';
        }
    }
    ?>
</div>

</body>
</html>