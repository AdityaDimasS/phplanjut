<?php
session_start();

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = "aditdimas"; // Ganti dengan username yang sebenarnya
        $password = "aditdimas098765"; // Ganti dengan password yang sebenarnya
        
        // Periksa apakah input pengguna sesuai dengan data login
        if ($_POST["username"] == $username && $_POST["password"] == $password) {
            // Jika sesuai, tetapkan sesi dan arahkan ke halaman selamat datang
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("Location: welcome.php");
            exit;
        } else {
            // Jika tidak sesuai, lemparkan pengecualian dengan pesan kesalahan
            throw new Exception("Username atau password salah");
        }
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
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <?php if(isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
