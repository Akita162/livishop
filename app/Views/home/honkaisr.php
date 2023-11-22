<?= $this->include('templates/header') ?>
<div class="container">
    <div class="row">

        <div class="col-12 text-center">
            <img src="/assets/gambar/Heading.png" alt="Heading" class="img-heading">
        </div>

        <div class="col-4 offset-3 text-center">
            <a href="/game/hsr">
                <img src="/assets/gambar/Express Pass.png" alt="Express" class="img-express-big">
            </a>
        </div>

        <div class="col-12 text-center mt-4">
            <h2>Harga Express Pass Saat ini : Rp 57.000 (Update 20 Oktober)</h2>
            <h2>Pilih Metode Pembayaran</h2>
        </div>

        <div class="col-4">
            <a href="/bayar/dana">
                <img src="/assets/gambar/logo dana.jpg" alt="Heading" class="img-small">
            </a>
        </div>

        <div class="col-4">
            <a href="/bayar/gopay">
                <img src="/assets/gambar/logo gopay.jpg" alt="Heading" class="img-small">
            </a>
        </div>

        <div class="col-4">
            <a href="/bayar/bca">
                <img src="/assets/gambar/Logo BCA_Biru.png" alt="Heading" class="img-small">
            </a>
        </div>

    </div>
</div>
<?= $this->include('templates/footer') ?>