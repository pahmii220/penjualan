<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('kustomer/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kustomer as $kustomer) {
                                echo "
                                <tr> 
                                    <td> $no </td>
                                    <td> $kustomer->nik </td>
                                    <td> $kustomer->name </td>
                                    <td> $kustomer->telp </td>
                                    <td> $kustomer->email </td>
                                    <td> $kustomer->alamat </td>
                                    <td>
                                    <div>
                                        <a href=" . base_url('kustomer/getedit/' . $kustomer->id) . " class='btn btn-sm btn-info'> <i class='fas fa-edit'></i> Edit</a>
                                        <a href=" . base_url('kustomer/delete/' . $kustomer->id) . " class='btn btn-sm btn-danger'
                                        onclick='return confirm(\"Ingin mengapus data user ini?\");'><i class='fas fa-trash'></i> Hapus</a>
                                    </div>
                                    </td>
                                </tr>";
                                $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>