<?php
// PSPEC #2 - Pemesanan Menu + Input Nomor Meja
session_start();

// Simulasi menu dari database
$menu = [
    1 => ["nama" => "Kopi Hitam", "harga" => 15000],
    2 => ["nama" => "Latte", "harga" => 25000],
    3 => ["nama" => "Teh Tarik", "harga" => 20000]
];

if (isset($_POST['pesan'])) {
    $idMenu   = $_POST['menu'];
    $jumlah   = $_POST['jumlah'];
    $nomorMeja = $_POST['meja'];

    $total = $menu[$idMenu]['harga'] * $jumlah;

    echo "Pesanan berhasil!<br>";
    echo "Menu : " . $menu[$idMenu]['nama'] . "<br>";
    echo "Jumlah : " . $jumlah . "<br>";
    echo "Nomor Meja : " . $nomorMeja . "<br>";
    echo "Total Harga : Rp" . $total;
} else {
?>
<form method="post">
    Pilih Menu:
    <select name="menu">
        <option value="1">Kopi Hitam - 15000</option>
        <option value="2">Latte - 25000</option>
        <option value="3">Teh Tarik - 20000</option>
    </select><br>
    Jumlah: <input type="number" name="jumlah" min="1" required><br>
    Nomor Meja: <input type="text" name="meja" required><br>
    <button type="submit" name="pesan">Pesan</button>
</form>
<?php } ?>
