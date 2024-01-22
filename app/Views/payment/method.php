<?= $this->include('templates/header') ?>
<div class="container">
    <form method="POST">
        <h5>UID :
            <input type="hidden" name="uid" value="<?= $_POST['uid'] ?>">
            <?= $_POST['uid'] ?>
        </h5>

        <h5>Region :
            <input type="hidden" name="region" value="<?= $_POST['region'] ?>">
            <?= $_POST['region'] ?>
        </h5>
        <h5>Item yang Dibeli : <?= $item['nama']; ?></h5>
        <h5>Total yang harus di bayar : <?= number_to_currency($item['harga'], 'IDR'); ?></h5>
        <input type="hidden" name="item" value="<?= $_POST['item'] ?>">

        <select name="paymethod" id="input">
            <option value="dana">DANA</option>
            <option value="bca">BCA</option>
            <option value="gopay">GOPAY</option>
        </select>
        <button type="submit" class="btn btn-primary w-25">
            CEPATKAN BAYAR
        </button>
    </form>
</div>
<?= $this->include('templates/footer') ?>