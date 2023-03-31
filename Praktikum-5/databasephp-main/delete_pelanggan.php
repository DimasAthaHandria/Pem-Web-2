<?php 
    require_once 'dbkoneksi.php';

    // mendapatkan nilai dari paremeter id pada url
    $delete = $_GET['iddel'];

    // perintah sql
    $sql ="DELETE FROM pelanggan WHERE id = ?";
    
    // menyiapkan statmen 
    $stmt = $dbh->prepare($sql);

    // mengeksekusi statmen
    $stmt->execute([$delete]);




?>