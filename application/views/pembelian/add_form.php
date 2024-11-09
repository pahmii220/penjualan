<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('pemmbelian') ?>">Pembelian</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('pembelian/save') ?>" method="post">
                    <div class="mb-3">
                        <label>invoice<code>*</code></label>
                        <input class="form-control" name="invoice" type="text" placeholder="Invoice">
                    </div>
                    <div class="mb-3">
                        <label>Total<code>*</code></label>
                        <input class="form-control" name="Total" type="text" placeholder="Total">
                    </div>
                    <div class="mb-3">
                        <label>Bayar <code>*</code></label>
                        <input class="form-control" name="Bayar" type="text" placeholder="Bayar">
                    </div>
                    <div class="eb-3">
                        <label>Deskripsi <code>*</code></label>
                        <input class="form-control" name="deskripsi" type="text" placeholder="Deskripsi">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal <code>*</code></label>
                        <input class="form-control" name="tanggal" type="date" value=<?= date("Y-m-d"); ?>>
                    </div>
                    <div class="mb-3">
                        <label>Supplier <code>*</code></label>
                        <select name="supplier" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach ($supplier as $k): ?>
                                <option value="<?php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
            <div style="height: 100vh"></div>
        </div>
    </div>
</main>