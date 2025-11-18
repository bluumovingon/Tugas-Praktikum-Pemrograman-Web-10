<!DOCTYPE html>
<html>
<head><title>Hitung Gaji Honorer</title></head>
<body>
    <h2>Menghitung Gaji Karyawan Honorer</h2>
    <form method="post" action="">
        Jumlah Jam Kerja (per minggu): <input type="number" name="jam" required>
        <input type="submit" name="submit" value="Hitung Gaji">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jam = $_POST['jam'];
        $upah_per_jam = 2000;
        $upah_lembur = 3000;
        $batas_jam = 48;
        $total_gaji = 0;

        if ($jam > $batas_jam) {
            // Jika lembur
            $jam_lembur = $jam - $batas_jam;
            $gaji_pokok = $batas_jam * $upah_per_jam;
            $gaji_lembur = $jam_lembur * $upah_lembur;
            $total_gaji = $gaji_pokok + $gaji_lembur;
            echo "<p>Jam Normal: $batas_jam jam | Jam Lembur: $jam_lembur jam</p>";
        } else {
            // Jika tidak lembur
            $total_gaji = $jam * $upah_per_jam;
        }

        echo "<h3>Total Upah: Rp. " . number_format($total_gaji, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>