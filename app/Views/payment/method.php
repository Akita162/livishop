<?= $this->include('templates/header') ?>
<div class="container">
    <div class="mt-3 row gx-5">
        <div class="container">
            <div class="col-6 ">
                <form method="POST">
                    <h5>UID :
                        <input type="hidden" name="uid" value="<?= $_POST['uid'] ?>">
                        <?= $_POST['uid'] ?>
                    </h5>

                    <h5>Region :
                        <input type="hidden" name="region" value="<?= $_POST['region'] ?>">
                        <?= $_POST['region'] ?>
                    </h5>
                    <h5>Total yang harus di bayar : Rp 57.000</h5>
                    <input type="hidden" name="item" value="<?= $_POST['item'] ?>">

                    <select name="paymethod" id="input">
                        <option value="dana">DANA</option>
                        <option value="BCA">BCA</option>
                        <option value="gopay">GOPAY</option>
                    </select>
                    <button type="submit" class="btn btn-primary w-25">
                        CEPATKAN BAYAR
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
<?= $this->include('templates/footer') ?>