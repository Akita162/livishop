<?= $this->include('templates/header') ?>
<div class="container">
    <div class="row">

    <div class="container">
  <h2>Form Data</h2>

  <form action="proses.php" method="post">
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    </div>

    </div>
</div>
<?= $this->include('templates/footer') ?>