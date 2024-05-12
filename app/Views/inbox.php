<?= $this->include('templates/header') ?>

<center>
    <div class="mb-3 col-12">
        <h2>Pesanan Anda</h2>
        <div class="justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nama:
                        <!-- Tempat Nama -->
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">UID:
                        <!-- Tempat UID -->
                    </h6>
                    <h6 class="card-subtitle mb-2 text-muted">Region:
                        <!-- Tempat Region -->
                    </h6>
                    <p class="card-text">Pesanan:
                        <!-- Tempat Pesanan -->
                    </p>
                </div>


            </div>
</center>


<center>
    <button type="submit" class="btn btn-primary w-25">
        Hapuskan pesanan
    </button>
</center>
</div>

<?= $this->include('templates/footer') ?>