<?= $this->include('templates/header') ?>


<div class="container text-center">
    <div class="row w-100">
        <div class="col-12">
            <h2>Pesanan Anda</h2>
        </div>

        <div class="col-12">
            <form method="post">
                <button type="submit" class="btn btn-primary w-25">
                    Hapus Pesanan
                </button>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Pilih</th>
                            <th scope="col">Pesanan</th>
                            <th scope="col">UID</th>
                            <th scope="col">Region</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pesanan as $p) { ?>
                            <tr>
                                <td>
                                    <input class="form-check-input" name="IDP[]" type="checkbox" value="<?= $p['id']; ?>" id="Order<?= $p['id']; ?>">
                                </td>
                                <td>
                                    <label class="form-check-label" for="Order<?= $p['id']; ?>">
                                        <?= $p['nama']; ?>
                                    </label>
                                </td>
                                <td><?= $p['uid']; ?></td>
                                <td><?= $p['region']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>