<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('penjualan') ?>">Penjualan</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('penjualan/save') ?>" method="post">
                    <div class="mb-3">
                        <label>Invoice <code>*</code></label>
                        <input class="form-control" name="invoice" type="text" placeholder="Invoice">
                    </div>
                    <div class="mb-3">
                        <label>Total<code>*</code></label>
                        <input class="form-control" name="total" type="text" placeholder="Total Bayaran">
                    </div>
                    <div class="mb-3">
                        <label>Bayar <code>*</code></label>
                        <input class="form-control" name="bayar" type="text" placeholder="Bayaran">
                    </div>
                    <div class="mb-3">
                        <label>Kembali <code>*</code></label>
                        <input class="form-control" name="kembali" type="text" placeholder="Kembalian">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal <code>*</code></label>
                        <input class="form-control" name="tanggal" type="date" value=<?= date("Y-m-d"); ?>>
                    </div>
                    <div class=" mb-3">
                        <label>Kustomer <code>*</code></label>
                        <select name="kustomer" class="form-control" required>
                            <option value="" hidden>- Pilih -</option>
                            <?php foreach ($kustomer as $k): ?>
                                <option value="<?php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
            <div style="height: 100vh"></div>
        </div>
    </div>
</main>