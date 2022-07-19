<?php
    $tanggal = $_POST["tanggal"];
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $paket = $_POST['paket'];
    $alamat = $_POST['alamat'];

    echo "<head><title>Tabel Pesanan</title></head>";
    $fp = fopen("file.txt", "a+");
    fputs($fp, "$tanggal|$nama|$nomor|$paket|$alamat\n");
    fclose($fp);

    echo "Terima kasih atas pesanan anda<br>";
    echo "<a href=index.html>Kembali</a><br>";
?>