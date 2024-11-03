<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('kustomer/edit') ?>" method="post">
                    <div class="form-floating mb-3">
                        <input class="form-control" type="hidden" name="id" value="<?= $kustomer->id; ?>" required />
                        <div class="mb-3">
                            <label>NIK <code>*</code></label>
                            <input class="form-control" name="nik" type="text" placeholder="NIK"
                                value="<?= $kustomer->nik; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Nama <code>*</code></label>
                            <input class="form-control" name="name" type="text" placeholder="Diskrispi"
                                value="<?= $kustomer->name; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Telepon <code>*</code></label>
                            <input class="form-control" name="telp" type="text" placeholder="Telepon"
                                value="<?= $kustomer->telp; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Email <code>*</code></label>
                            <input class="form-control" name="email" type="text" placeholder="Email"
                                value="<?= $kustomer->email; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Alamat <code>*</code></label>
                            <input class="form-control" name="alamat" type="text" placeholder="Alamat"
                                value="<?= $kustomer->alamat; ?>">
                        </div>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>