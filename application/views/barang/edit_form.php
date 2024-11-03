<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('barang') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('barang/edit') ?>" method="post">
                    <!-- Input Barkode -->
                    <div class="form-floating mb-3">
                        <input class="form-control" type="hidden" name="id" value="<?= $barang->id; ?>" required />
                        <input class="form-control <?php echo form_error('barcode') ? 'is-invalid' : '' ?>" type="text"
                            name="barcode" value="<?= $barang->barcode; ?>" placeholder="Barkode" required />
                        <label for="barcode">Barkode <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('name') ?>
                        </div>
                    </div>
                    <!-- Input Nama Barang -->
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="name" value="<?= $barang->name; ?>"
                            placeholder="Nama Barang" required />
                        <label for="name">Name <code>*</code></label>
                    </div>
                    <!-- Input Harga Jual -->
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="harga_jual" value="<?= $barang->harga_jual; ?>"
                            placeholder="Harga Jual" required />
                        <label for="harga_jual">Harga Jual <code>*</code></label>
                    </div>
                    <!-- Input Harga Beli -->
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="harga_beli" value="<?= $barang->harga_beli; ?>"
                            placeholder="Harga Beli" required />
                        <label for="harga_beli">Harga Beli <code>*</code></label>
                    </div>
                    <!-- Input Stok -->
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="stok" value="<?= $barang->stok; ?>"
                            placeholder="Stok" required />
                        <label for="stok">Stok <code>*</code></label>
                    </div>
                    <!-- Id Kategori -->
                    <div class="form-floating mb-3">
                        <select name="kategori" class="form-control" required>
                            <option value="<?php echo $barang->kategori_id ?>" hidden><?php
                               foreach ($kategori as $k):
                                   if (strcmp($k["id"], "$barang->kategori_id") == "0") {
                                       echo $k['name'];
                                   }
                               endforeach; ?>
                            </option>
                            <?php foreach ($kategori as $k): ?>
                                <option value="<?php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="kategori">Kategori <code>*</code></label>
                    </div>

                    <!-- Id Satuan -->
                    <div class="form-floating mb-3">
                        <select name="satuan" class="form-control" required>
                            <option value="<?php echo $barang->satuan_id ?>" hidden><?php
                               foreach ($satuan as $k):
                                   if (strcmp($k["id"], "$barang->satuan_id") == "0") {
                                       echo $k['name'];
                                   }
                               endforeach; ?>
                            </option>
                            <?php foreach ($satuan as $k): ?>
                                <option value="<?php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="satuan">Satuan <code>*</code></label>
                    </div>
                    <!-- Id Supplier -->
                    <div class="form-floating mb-3">
                        <select name="supplier" class="form-control" required>
                            <option value="<?php echo $barang->supplier_id ?>" hidden><?php
                               foreach ($supplier as $k):
                                   if (strcmp($k["id"], "$barang->supplier_id") == "0") {
                                       echo $k['name'];
                                   }
                               endforeach; ?>
                            </option>
                            <?php foreach ($supplier as $k): ?>
                                <option value="<?php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="supplier">Supplier <code>*</code></label>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>