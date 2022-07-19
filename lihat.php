<?php 
    echo "<head><title>Form Pemesanan</title></head>";
    $fp = fopen("file.txt", "r");

    echo "<center><h2>Table Guest Book</h2>";
    echo "<a href = index.html>::Kembali::</a>";
    echo "<hr><br><br>";
    echo "<table border='1'>";
    echo "<tr><td>Tanggal</td><td>Nama</td><td>No Telpon</td><td>Paket</td><td>Alamat</td></tr>";
    while ($isi = fgets($fp)) {
        $pisah = explode('|', $isi);
        echo "<tr><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>";
    }
    echo "</table>";
    echo "</center><br>";
?>