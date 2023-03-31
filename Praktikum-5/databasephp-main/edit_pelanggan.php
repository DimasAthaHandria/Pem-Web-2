<?php 
    require_once 'dbkoneksi.php';

    if(isset($_GET['idedit'])){
        $id = $_GET['idedit'];


        $sql = "SELECT * FROM pelanggan WHERE id = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }


?>

<form methode="post" action="list_pelanggan.php">
    <input type="hidden" name="id" value="<?=  $row['id']     ?>">

    <label for="">KODE</label>
    <input type="text" name="kode" value="<?=   $row['kode']   ?>">
    <br>

    <label for="">Nama</label>
    <input type="text" name="nama" value="<?=   $row['nama']   ?>"><br>

    <label for="">Jenis Kelamin</label>
    <br>
    <label for="">Laki-laki</label>
    <input type="radio" name="jk" value="L" checked>
    <br>
    <label for="">Perempuan</label>
    <input type="radio" name="jk" value="P" > <br><br>


    <label for="">Tempat Lahir</label>
    <input type="text" name="tmp_lahir" value="<?=   $row['tmp_lahir']   ?>"> <br>

    <label for="">Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" value="<?=   $row['tgl_lahir']   ?>"> <br>

    <label for="">Email</label>
    <input type="email" name="email" value="<?=   $row['email']   ?>"> <br><br>

    <label for="">Kartu ID</label>
    <input type="select" name="kartu_id" value="<?=   $row['kartu_id']   ?>">
    <br><br>

    <button type="submit" name="submit">SAVE</button>

</form>