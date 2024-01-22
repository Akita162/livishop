<?= $this->include('templates/header') ?>
<div class="container">
  <div class="mt-3 row gx-5">
    <div class="container">
      <div class="col-6 ">
        <h5>Akun Dana : 123123123123</h5>
        <h5>UID :
          <?= $_POST['uid'] ?>
        </h5>
        <h5>Region :
          <?= $_POST['region'] ?>
        </h5>
        <h5>Total yang harus di bayar : Rp 57.000</h5>
      </div>

      <div class="col-6">
        <h5>Bila sudah melakukan pembayaran, klik OK dan cek Inbox untuk mengecek
          informasi apakah sudah masuk apa belum </h5>
        <button class="btn" onclick="location.href = '/home/';">OK</button>
      </div>
    </div>

  </div>
</div>
<?= $this->include('templates/footer') ?>