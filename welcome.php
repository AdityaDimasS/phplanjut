<?php
session_start();

try {
    // Periksa apakah pengguna sudah login atau belum
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['username'])) {
        // Jika belum, lemparkan pengecualian dengan pesan kesalahan
        throw new Exception("Anda harus login untuk mengakses halaman ini");
    }
} catch (Exception $e) {
    // Tangani pengecualian dengan menampilkan pesan kesalahan
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <?php if(isset($error)): ?>
        <p><?php echo $error; ?></p>
        <p><a href="login.php">Kembali ke halaman login</a></p>
    <?php else: ?>
        <h2>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>Ini adalah halaman selamat datang.</p>
        <p><a href="logout.php">Logout</a></p>
    <?php endif; ?>
</body>
</html>
