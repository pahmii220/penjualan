<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('penjualan') ?>">Penjualan</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('penjualan/edit') ?>" method="post">
                    <!-- Input Barkode -->
                    <div class="mb-3">
                        <input class="form-control" type="text" name="id" value="<?= $penjualan->id; ?>" required />
                        <label>Invoice <code>*</code></label>
                        <input class="form-control" name="invoice" type="text" placeholder="Invoice"
                            value="<?= $penjualan->invoice; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Total<code>*</code></label>
                        <input class="form-control" name="total" type="text" placeholder="Total Bayaran"
                            value="<?= $penjualan->total; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Bayar <code>*</code></label>
                        <input class="form-control" name="bayar" type="text" placeholder="Bayaran"
                            value="<?= $penjualan->bayar; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Kembali <code>*</code></label>
                        <input class="form-control" name="kembali" type="text" placeholder="Kembalian"
                            value="<?= $penjualan->kembali; ?>">
                    </div>
                    <div class="eb-3">
                        <label>Tanggal <code>*</code></label>
                        <input class="form-control" name="tanggal" type="date" placeholder="Tanggal"
                            value="<?= $penjualan->tanggal; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Kustomer <code>*</code></label>
                        <select name="kustomer" class="form-control" required>
                            <option value="<?php echo $penjualan->kustomer_id ?>" hidden><?php
                               foreach ($kustomer as $k):
                                   if (strcmp($k["id"], "$penjualan->kustomer_id") == "0") {
                                       echo $k['name'];
                                   }
                               endforeach; ?>
                            </option>
                            <?php foreach ($kustomer as $k): ?>
                                <option value="<?php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>