<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('satuan') ?>">satuan</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('satuan/save') ?>" method="post">
                    <div class="mb-3">
                        <label>Nama Barang <code>*</code></label>
                        <input class="form-control" name="name" type="text" placeholder="Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label>Dekripsi <code>*</code></label>
                        <input class="form-control" name="diskripsi" type="text" placeholder="Deskrispi">
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>