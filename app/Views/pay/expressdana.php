<?= $this->include('templates/header') ?>
<div class="container">
    <div class="row">

    <div class="container">
  <h2>Akun Dana : 123123123123</h2>
  <h2>Total yang harus di bayar : Rp 57.000</h2>

  <h5>Bila sudah melakukan pembayaran, klik OK dan cek Inbox untuk mengecek
    informasi apakah sudah masuk apa belum </h5>


    <button onclick="goHome()">OK</button>
    <script>
    function goToHome() {
        window.location.href = 'main.php';
    }
    </script>


  

    </div>

    </div>
</div>
<?= $this->include('templates/footer') ?>