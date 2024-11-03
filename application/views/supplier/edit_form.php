<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('supplier') ?>">Supplier</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('supplier/edit') ?>" method="post">
                    <div class="form-floating mb-3">
                        <input class="form-control" type="hidden" name="id" value="<?= $supplier->id; ?>" required />
                        <div class="mb-3">
                            <label>NIK <code>*</code></label>
                            <input class="form-control" name="nik" type="text" placeholder="NIK"
                                value="<?= $supplier->nik; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Nama <code>*</code></label>
                            <input class="form-control" name="name" type="text" placeholder="Diskrispi"
                                value="<?= $supplier->name; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Telepon <code>*</code></label>
                            <input class="form-control" name="telp" type="text" placeholder="Telepon"
                                value="<?= $supplier->telp; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Email <code>*</code></label>
                            <input class="form-control" name="email" type="text" placeholder="Email"
                                value="<?= $supplier->email; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Alamat <code>*</code></label>
                            <input class="form-control" name="alamat" type="text" placeholder="Alamat"
                                value="<?= $supplier->alamat; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Perusahaan <code>*</code></label>
                            <input class="form-control" name="perusahaan" type="text" placeholder="Perusahaan"
                                value="<?= $supplier->perusahaan; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Nama Bank <code>*</code></label>
                            <input class="form-control" name="nama_bank" type="text" placeholder="Nama Bank"
                                value="<?= $supplier->nama_bank; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Nama Akun Bank <code>*</code></label>
                            <input class="form-control" name="nama_akun_bank" type="text" placeholder="Nama Akun Bank"
                                value="<?= $supplier->nama_akun_bank; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Nomor Akun Bank <code>*</code></label>
                            <input class="form-control" name="no_akun_bank" type="text" placeholder="Nomor Akun Bank"
                                value="<?= $supplier->no_akun_bank; ?>">
                        </div>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>