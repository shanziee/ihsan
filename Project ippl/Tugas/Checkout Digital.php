<?php
// PSPEC #3 - Checkout Digital (Pembayaran)
session_start();

if (isset($_POST['bayar'])) {
    $metode = $_POST['metode'];
    $total  = $_POST['total'];

    // Simulasi status pembayaran
    $status = "success";

    echo "Pembayaran dengan metode <b>$metode</b> sejumlah Rp$total <br>";
    echo "Status : " . strtoupper($status) . "<br>";
    echo "Checkout berhasil! Bukti pembayaran digital tersimpan.";
} else {
?>
<form method="post">
    Total Pembayaran: <input type="text" name="total" value="50000"><br>
    Pilih Metode Pembayaran:
    <select name="metode">
        <option value="QRIS">QRIS</option>
        <option value="OVO">OVO</option>
        <option value="GoPay">GoPay</option>
        <option value="Bank Transfer">Bank Transfer</option>
    </select><br>
    <button type="submit" name="bayar">Bayar Sekarang</button>
</form>
<?php } ?>
