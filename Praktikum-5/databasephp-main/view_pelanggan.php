<?php 
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Pelanggan</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Kartu</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$row['kode']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['jk']?></td>
            <td><?=$row['tmp_lahir']?></td>
            <td><?=$row['tgl_lahir']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['kartu_id']?></td>
        </tr>
    </tbody>
</table>
