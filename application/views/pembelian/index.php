<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('pembelian') ?>">pembelian</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('pembelian/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tabelkelas" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Invoice</th>
                                <th>Total</th>
                                <th>Bayar</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pembelian as $pembelian) {
                                echo "
                            <tr>
                                <td>$no</td>
                                <td>$pembelian->invoice</td>
                                <td>$pembelian->total</td>
                                <td>$pembelian->bayar</td>
                                <td>$pembelian->deskripsi</td>
                                <td>$pembelian->tanggal</td>
                                <td>
                                    <div>
                                        <a href=" . base_url('Pembelian/getedit/' . $pembelian->id) . " class='btn btn-sn
                                            btn-info'> <i class='fa fa-edit'></i> Edit</a>
                                        <a href=" . base_url('Pembelian/delete/' . $pembelian->id) . " class='btn btn-sn btn-danger'
                                                onclick='return confirm(\"Ingin mengapus data pembelian ini?\");'>
                                                <i class='fas fa-trash'></I> Hapus</a>
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
</main>