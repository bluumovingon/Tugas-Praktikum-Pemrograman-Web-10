<html>
<head><title>Cek Jumlah Hari</title></head>
<body>
    <h2>Cek Jumlah Hari (Bulan Ini)</h2>
    
    <?php
    // Mengambil bulan saat ini (format angka 1-12)
    $bulan_ini = date('n'); 
    $tahun_ini = date('Y');
    
    // Mengubah angka bulan menjadi Nama Bulan (Opsional, agar tampilan bagus)
    $nama_bulan = date('F'); 

    $jumlah_hari = 0;

    switch ($bulan_ini) {
        case 1: // Januari
        case 3: // Maret
        case 5: // Mei
        case 7: // Juli
        case 8: // Agustus
        case 10: // Oktober
        case 12: // Desember
            $jumlah_hari = 31;
            break;
        
        case 4: // April
        case 6: // Juni
        case 9: // September
        case 11: // November
            $jumlah_hari = 30;
            break;
        
        case 2: // Februari
            // Cek tahun kabisat khusus Februari
            if (($tahun_ini % 4 == 0 && $tahun_ini % 100 != 0) || ($tahun_ini % 400 == 0)) {
                $jumlah_hari = 29;
            } else {
                $jumlah_hari = 28;
            }
            break;
            
        default:
            echo "Bulan tidak valid";
    }

    echo "<p>Saat ini adalah bulan: <b>$nama_bulan $tahun_ini</b> (Bulan ke-$bulan_ini)</p>";
    echo "<h3>Jumlah hari dalam bulan ini adalah: $jumlah_hari hari.</h3>";
    ?>
</body>
</html>