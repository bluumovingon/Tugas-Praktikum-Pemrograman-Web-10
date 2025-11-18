<html>
<head><title>Gaji Berdasarkan Golongan</title></head>
<body>
    <h2>Menghitung Gaji Berdasarkan Golongan</h2>
    <form method="post" action="">
        Jumlah Jam Kerja: <input type="number" name="jam" required><br><br>
        Pilih Golongan: 
        <select name="golongan">
            <option value="A">Golongan A (Rp 4.000)</option>
            <option value="B">Golongan B (Rp 5.000)</option>
            <option value="C">Golongan C (Rp 6.000)</option>
            <option value="D">Golongan D (Rp 7.500)</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jam = $_POST['jam'];
        $golongan = $_POST['golongan'];
        $upah_lembur = 3000;
        $batas_jam = 48;
        
        // Menentukan upah per jam berdasarkan golongan
        $upah_per_jam = 0;
        switch ($golongan) {
            case 'A': $upah_per_jam = 4000; break;
            case 'B': $upah_per_jam = 5000; break;
            case 'C': $upah_per_jam = 6000; break;
            case 'D': $upah_per_jam = 7500; break;
        }

        // Perhitungan Gaji
        if ($jam > $batas_jam) {
            $jam_lembur = $jam - $batas_jam;
            $gaji_pokok = $batas_jam * $upah_per_jam;
            $gaji_lembur_total = $jam_lembur * $upah_lembur;
            $total_gaji = $gaji_pokok + $gaji_lembur_total;
        } else {
            $total_gaji = $jam * $upah_per_jam;
        }

        echo "<hr>";
        echo "Golongan: <b>$golongan</b> (Upah: Rp $upah_per_jam /jam)<br>";
        echo "Total Jam Kerja: $jam jam<br>";
        echo "<h3>Total Gaji yang Diterima: Rp. " . number_format($total_gaji, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>