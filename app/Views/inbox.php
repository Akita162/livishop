<?= $this->include('templates/header') ?>


<div class="container text-center">
    <h2>Pesanan Anda</h2>

    <form action="home\delete" method="post">

        <ul>

            <?php foreach ($pesanan as $p) { ?>
                <center>
                    <li>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                        <div class="mb-3 col-12">

                            <div class="justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">UID:</h6>
                                        <span>
                                            <?= $p['uid']; ?>
                                        </span>
                                        <h6 class="card-subtitle mb-2 text-muted">Region:</h6>
                                        <span>
                                            <?= $p['region']; ?>
                                        </span>
                                        <p class="card-text">Pesanan:</p>
                                        <span>
                                            <?= $p['item']; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </center>
            <?php } ?>
        </ul>
    </form>
</div>

<center>
    <button type="submit" class="btn btn-primary w-25">
        Hapuskan pesanan
    </button>
</center>

<?= $this->include('templates/footer') ?>