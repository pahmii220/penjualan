<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?= $title ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('user') ?>">User</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('user/save') ?>" method="post">
                    <div class="mb-3">
                        <label for="nik">NIK <code>*</code></label>
                        <input class="form-control" type="text" name="nik" placeholder="NIK" required />
                    </div>
                    <div class="mb-3">
                        <label for="username">USERNAME <code>*</code></label>
                        <input class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>"
                            type="text" name="username" placeholder="USERNAME" required />
                        <div class="invalid-feedback">
                            <?= form_error('username') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="full_name">FULL NAME <code>*</code></label>
                        <input class="form-control" type="text" name="full_name" placeholder="FULL NAME" required />
                    </div>
                    <div class="mb-3">
                        <label for="phone">PHONE</label>
                        <input class="form-control" type="number" name="phone" placeholder="PHONE" required />
                    </div>
                    <div class="mb-3">
                        <label for="email">EMAIL</label>
                        <input class="form-control" type="text" name="email" placeholder="EMAIL" required />
                    </div>
                    <div class="mb-3">
                        <label for="alamat">ALAMAT</label>
                        <input class="form-control" type="text" name="alamat" placeholder="ALAMAT" required />
                    </div>
                    <div class="mb-3">
                        <label for="password">PASSWORD <code>*</code></label>
                        <input class="form-control col-md-3 col-sm-12 col-xs-12" id="password"
                            type="password" name="password" autocomplete="off" placeholder="PASSWORD" required />
                    </div>
                    <div class="mb-3">
                        <label for="role">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option selected>Choose...</option>
                            <option value="PENILIK">PENILIK</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="KASIR">KASIR</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-plus"></i> Save
                    </button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>