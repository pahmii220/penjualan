<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('pembelian') ?>">Pembelian</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?php echo site_url('pembelian/edit') ?>" method="post">
                        <div class="mb-3">
                            <input class="form-control" type="text" name="id" value="<?= $pembelian->id; ?>" required />
                            <label>Invoice <code>*</code></label>
                            <input class="form-control" name="invoice" type="text" placeholder="Invoice"
                                value="<?= $pembelian->invoice; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Total<code>*</code></label>
                            <input class="form-control" name="total" type="text" placeholder="Total Bayaran"
                                value="<?= $pembelian->total; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Bayar <code>*</code></label>
                            <input class="form-control" name="bayar" type="text" placeholder="Bayaran"
                                value="<?= $pembelian->bayar; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Deskripsi <code>*</code></label>
                            <input class="form-control" name="deskripsi" type="text" placeholder="Deskripsi"
                                value="<?= $pembelian->deskripsi; ?>">
                        </div>
                        <div class="eb-3">
                            <label>Tanggal <code>*</code></label>
                            <input class="form-control" name="tanggal" type="date" placeholder="Tanggal"
                                value="<?= $pembelian->tanggal; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Kustomer <code>*</code></label>
                            <select name="kustomer" class="form-control" required>
                                <option value="<?php echo $pembelian->supplier_id ?>" hidden><?php
                                foreach ($supplier as $s):
                                if (strcmp($s["id"], "$pembelian->supplier_id") == "0") {
                                echo $s['name'];
                                    }
                                endforeach; ?>
                                </option>
                                <?php foreach ($supplier as $s): ?>
                                    <option value="<?php echo $s['id'] ?>"><?php echo $s['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                    </form>
                </div>
            </div>
            <div style="height: 50vh"></div>
        </div>
</main>