<?php
// PSPEC #1 - Login Akun Google
session_start();

if (isset($_GET['login'])) {
    // Simulasi login Google (sebenarnya pakai OAuth API)
    $email = "user@gmail.com";
    $nama  = "Customer Coffee";

    $_SESSION['email'] = $email;
    $_SESSION['nama']  = $nama;

    echo "Login berhasil. Selamat datang, " . $nama;
} else {
    echo "<a href='?login=true'>Login dengan Google</a>";
}
?>
