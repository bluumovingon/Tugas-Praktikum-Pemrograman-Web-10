<html>
<head><title>Mengecek Tahun Kabisat</title></head>
<body>
    <h2>Cek Tahun Kabisat</h2>
    <form method="post" action="">
        Masukkan Tahun: <input type="number" name="tahun" required>
        <input type="submit" name="submit" value="Cek">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tahun = $_POST['tahun'];
        
        // Logika sederhana: Jika habis dibagi 4
        // (Bisa diperketat dengan aturan % 100 dan % 400 jika perlu)
        if ($tahun % 4 == 0) {
            echo "<p>Tahun $tahun adalah TAHUN KABISAT.</p>";
        } else {
            echo "<p>Tahun $tahun adalah BUKAN TAHUN KABISAT.</p>";
        }
    }
    ?>
</body>
</html>