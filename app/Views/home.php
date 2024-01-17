<?= $this->include('templates/header') ?>
<div class="container text-center">
    <div class="row w-100 justify-content-center gy-3">

        <div class="col-12 ">
            <img src="/assets/gambar/Heading.png" alt="Heading" class="img-heading">
        </div>

        <div class="col-8">

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/gambar/Express Pass.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/gambar/Genesis Crystal.png" class="d-flex w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/gambar/Oneiric Shard.png" class="d-flex w-100" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-12">
            <p class="d-inline-flex gap-1">

                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#HSRMENU"
                    aria-expanded="false" aria-controls="HSRMENU">
                    Honkai Star Rail
                </button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#GENSHINMENU"
                    aria-expanded="false" aria-controls="GENSHINMENU">
                    Genshin Impact
                </button>
            </p>
            <div class="collapse" id="HSRMENU">
                <div class="card card-body">


                    <form action="\pay\" class="row justify-content-center" method="post">
                        <input type="hidden" name="paymethod" id="metodePembayaran" value="">

                        <div class="mb-3 col-12">
                            <label for="inputUid" class="form-label">UID Anda</label>
                            <center>
                                <input type="input" name="uid" class="form-control w-25" id="inputUid" required>

                            </center>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="inputRegion" class="form-label">Region Akun</label>
                            <center>

                                <select name="region" class="form-select w-25" id="inputRegion">
                                    <option value="Asia">Asia</option>
                                    <option value="Eropa">Eropa</option>
                                    <option value="Amerika">Amerika</option>
                                    <option value="Hongkong">Hongkong</option>
                                </select>
                            </center>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="inputRegion" class="form-label">Pilih Pesanan</label>
                            <center>

                                <select class="form-select w-25" aria-label="Default select example">

                                    <option value="1">Express Pass</option>
                                    <option value="2">60 Oneiric Shard</option>
                                    <option value="3">300 Oneiric Shard</option>
                                    <option value="4">980 Oneiric Shard</option>
                                    <option value="5">1980 Oneiric Shard</option>
                                    <option value="6">3280 Oneiric Shard</option>
                                    <option value="7">6480 Oneiric Shard</option>
                                </select>
                            </center>
                        </div>
                        <button type="submit" class="btn btn-primary w-25">
                            CEPATKAN BAYAR
                        </button>
                    </form>
                </div>
            </div>

            <div class="collapse" id="GENSHINMENU">
                <form action="\pay\" class="row justify-content-center" method="post">
                    <input type="hidden" name="paymethod" id="metodePembayaran" value="">

                    <div class="mb-3 col-12">
                        <label for="inputUid" class="form-label">UID Anda</label>
                        <center>
                            <input type="input" name="uid" class="form-control w-25" id="inputUid" required>

                        </center>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="inputRegion" class="form-label">Region Akun</label>
                        <center>

                            <select name="region" class="form-select w-25" id="inputRegion">
                                <option value="Asia">Asia</option>
                                <option value="Eropa">Eropa</option>
                                <option value="Amerika">Amerika</option>
                                <option value="Hongkong">Hongkong</option>
                            </select>
                        </center>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="inputRegion" class="form-label">Pilih Pesanan</label>
                        <center>

                            <select class="form-select w-25" aria-label="Default select example">

                                <option value="1">Welkin Moon</option>
                                <option value="1">Welkin Moon (2 Bulan)</option>
                                <option value="1">Welkin Moon (3 Bulan)</option>
                                <option value="1">Welkin Moon (4 Bulan)</option>
                                <option value="1">Welkin Moon (5 Bulan)</option>
                                <option value="1">Welkin Moon (6 Bulan)</option>
                                <option value="2">60 Genesis Crystal</option>
                                <option value="3">300 Genesis Crystal</option>
                                <option value="4">980 Genesis Crystal</option>
                                <option value="5">1980 Genesis Crystal</option>
                                <option value="6">3280 Genesis Crystal</option>
                                <option value="7">6480 Genesis Crystal</option>
                            </select>
                        </center>
                    </div>

                    <button type="submit" class="btn btn-primary w-25">
                        CEPATKAN BAYAR
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
<?= $this->include('templates/footer') ?>