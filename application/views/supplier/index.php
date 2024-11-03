<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('supplier') ?>">Supplier</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('supplier/add') ?>"><i class="fas fa-plus"></i> Add New</a>
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
                                <th>Perusahaan</th>
                                <th>Nama Bank</th>
                                <th>Nama Akun Bank</th>
                                <th>No Akun Bank</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($supplier as $supplier) {
                                echo "
                                <tr> 
                                    <td> $no </td>
                                    <td> $supplier->nik </td>
                                    <td> $supplier->name </td>
                                    <td> $supplier->telp </td>
                                    <td> $supplier->email </td>
                                    <td> $supplier->alamat </td>
                                    <td> $supplier->perusahaan </td>
                                    <td> $supplier->nama_bank </td>
                                    <td> $supplier->nama_akun_bank </td>
                                    <td> $supplier->no_akun_bank </td>
                                    <td>
                                    <div>
                                        <a href=" . base_url('supplier/getedit/' . $supplier->id) . " class='btn btn-sm btn-info'> <i class='fas fa-edit'></i> Edit</a>
                                        <a href=" . base_url('supplier/delete/' . $supplier->id) . " class='btn btn-sm btn-danger'
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