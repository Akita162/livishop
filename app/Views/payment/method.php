<?= $this->include('templates/header') ?>
<div class="container">
    <div class="mt-3 row gx-5">
        <div class="container">
            <div class="col-6 ">
                <h5>UID :
                    <?= $_POST['uid'] ?>
                </h5>
                <h5>Region :
                    <?= $_POST['region'] ?>
                </h5>
                <h5>Total yang harus di bayar : Rp 57.000</h5>
                <?= $_POST['item'] ?>
            </div>
        </div>

    </div>
</div>
<?= $this->include('templates/footer') ?>