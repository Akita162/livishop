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

        <div class="col-4" onclick="showForm('inputForm')">
            <a href="#">
                <img src="/assets/gambar/logo dana.jpg" alt="Heading" class="img-small">
            </a>
        </div>

        <div class="col-4" onclick="showForm('inputForm')">
            <a href="#">
                <img src="/assets/gambar/logo gopay.jpg" alt="Heading" class="img-small">
            </a>
        </div>

        <div class="col-4" onclick="showForm('inputForm')">
            <a href="#">
                <img src="/assets/gambar/Logo BCA_Biru.png" alt="Heading" class="img-small">
            </a>
        </div>

    <form id="inputForm" class="hiddenForm">
        <label for="accountId">Masukkan UID Anda:</label><br>
        <input type="text" id="accountId" name="accountId"><br><br>

        <label for="regions">Pilih region:</label><br>
        <input type="checkbox" id="asiaCheckbox" name="region" value="Asia">
        <label for="asiaCheckbox">Asia</label><br>
        <input type="checkbox" id="europeCheckbox" name="region" value="Eropa">
        <label for="europeCheckbox">Eropa</label><br>
        <input type="checkbox" id="usCheckbox" name="region" value="AS">
        <label for="usCheckbox">AS</label><br><br>

        <input type="submit" value="Submit">
    </form>

    <script>
    function showForm(formId) {
        // Mengambil referensi form berdasarkan ID
        const form = document.getElementById(formId);

        // Menampilkan form yang terkait dengan gambar yang diklik
        form.classList.remove('hiddenForm');
    }
    </script>

    </div>

   


</div>
<?= $this->include('templates/footer') ?>