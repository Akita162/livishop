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

        <div class="row">
            <div class="col-4">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#bayarModal"
                    data-pay-method="dana">
                    <img src="/assets/gambar/logo dana.jpg" alt="Heading" class="img-small">
                </button>
            </div>

            <div class="col-4">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#bayarModal"
                    data-pay-method="gopay">
                    <img src="/assets/gambar/logo gopay.jpg" alt="Heading" class="img-small">
                </button>
            </div>

            <div class="col-4">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#bayarModal"
                    data-pay-method="bca">
                    <img src="/assets/gambar/Logo BCA_Biru.png" alt="Heading" class="img-small">
                </button>
            </div>

        </div>



        <div class="modal fade" id="bayarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Isi Data</h1>
                    </div>

                    <div class="modal-body">
                        <form action="\pay\">
                            <input type="hidden" name="paymethod" id="metodePembayaran" value="">
                            <div class="mb-3">
                                <label for="inputUid" class="form-label">UID Anda</label>
                                <input type="input" name="uid" class="form-control" id="inputUid" required>
                            </div>
                            <div class="mb-4">
                                <label for="inputRegion" class="form-label">Region Akun</label>
                                <select name="region" class="form-select" id="inputRegion">
                                    <option value="Asia">Asia</option>
                                    <option value="Eropa">Eropa</option>
                                    <option value="Amerika">Amerika</option>
                                    <option value="Hongkong">Hongkong</option>
                                </select>
                            </div>

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
</div>

<script>
    const exampleModal = document.getElementById('bayarModal')
    if (exampleModal) {
        exampleModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const payment = button.getAttribute('data-pay-method')
            // If necessary, you could initiate an Ajax request here
            // and then do the updating in a callback.

            // Update the modal's content.
            const modalBodyInput = exampleModal.querySelector('.modal-body #metodePembayaran')

            modalBodyInput.value = payment
        })
    }
</script>

</div>
<?= $this->include('templates/footer') ?>