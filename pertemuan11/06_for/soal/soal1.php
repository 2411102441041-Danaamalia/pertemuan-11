<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Saldo Akhir</title>
</head>
<body>
    <h2>Hitung Saldo Akhir Tabungan</h2>

    <form method="post">
        Saldo Awal: <input type="number" name="saldo_awal" value="1000000" required><br><br>
        Jumlah Bulan (N): <input type="number" name="n_bulan" required><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

<?php
if (isset($_POST['hitung'])) {
    $saldo = $_POST['saldo_awal'];
    $n = $_POST['n_bulan'];

    for ($bulan = 1; $bulan <= $n; $bulan++) {
        // Hitung bunga sesuai saldo
        if ($saldo < 1100000) {
            $bunga = $saldo * 0.03;
        } else {
            $bunga = $saldo * 0.04;
        }
        $saldo += $bunga;
        // Potong biaya administrasi
        $saldo -= 9000;
    }

    echo "<h3>Saldo akhir setelah $n bulan adalah: Rp. ".number_format($saldo, 0, ',', '.')."</h3>";
}
?>
</body>
</html>
