<?php 
    include_once 'template/header.php';
?>


<form method="POST" action="home.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Siswa</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="rabbit">Pemrograman Web</option>
        <option value="duck">Basis Data</option>
        <option value="fish">UIUX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Rombel</label> 
    <div class="col-8">
      <input id="rombel" name="rombel" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php 
    include_once 'template/footer.php';
?>