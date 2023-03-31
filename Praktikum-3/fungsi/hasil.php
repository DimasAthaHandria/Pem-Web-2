<?php 
// Jika belom mengisi form maka tidak dapat masuk ke halaman hasil
    if(!isset($_POST['submit'])){
        header("Location: Index.php");
        exit;

    }


    //  Menyimpanan inputan user ke dalam variabel
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_uts = $_POST['uts'];
    $_uas = $_POST['uas'];
    $_tugas = $_POST['tugas'];




    // Menentukan Nilai Akhir
    $_nilai_akhir = ($_uts + $_uas + $_tugas) / 3;

    //  Mengambil Sekaligus menjalankan skrip yang ada adi labrary fungsi untuk cetak kelulusan dan grade
    require_once 'libfungsi.php';
    $_nilai = $_nilai_akhir;





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
      <th scope="col">GRADE</th>
      <th scope="col">KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td> <?= $_nama ?> </td>
      <td> <?= $_matkul ?> </td>
      <td> <?= $_uts ?> </td>
      <td> <?= $_uas ?> </td>
      <td> <?= $_tugas ?> </td>
      <td> <?= $_nilai_akhir ?> </td>
      <td> <?= grade($_nilai) ?> </td>
      <td> <?= kelulusan($_nilai) ?> </td>
    </tr>
  </tbody>
</table>
</body>
</html>