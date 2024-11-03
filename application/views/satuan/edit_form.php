<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('satuan') ?>">Satuan</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('satuan/edit') ?>" method="post">
                    <div class="form-floating mb-3">
                        <input class="form-control" type="hidden" name="id" value="<?= $satuan->id; ?>" required />
                        <input class="form-control <?php echo form_error('Name') ? 'is-invalid' : '' ?>" type="text"
                            name="name" value="<?= $satuan->name; ?>" placeholder="Name" required />
                        <label for="name">Name <code>*</code></label>
                        <div class="invalid-feedback">
                            <?php echo form_error('name') ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="diskripsi" value="<?= $satuan->diskripsi; ?>"
                            placeholder="Diskripsi" required />
                        <label for="diskripsi">Diskrispi <code>*</code></label>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>