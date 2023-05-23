<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           
        <?php
            if (!empty($this->session->flashdata('pesan'))) {
                if ($this->session->flashdata('status') == 'Berhasil') { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                        <?= $this->session->flashdata('pesan'); ?>
                    </div>
                <?php
                } else { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                        <?= $this->session->flashdata('pesan'); ?>
                    </div>
            <?php }
            }
            ?>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Kategori Prestasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kategori Prestasi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Data Kategori Prestasi
                                <a href="<?= base_url('kategori/tambah')?>" class="btn btn-success float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-stripped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $datas) : ?>
                                        <tr>
                                            
                                            <td><?= $datas->id ?></td>
                                            <td><?= $datas->nama_kategori ?></td>
                                            <td>
                                                <a href="<?= base_url('kategori/ubah/'.$datas->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</a>
                                                <a href="<?= base_url('kategori/hapus/'.$datas->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data Ini ?');"><i class="fa fa-trash" ></i>Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $i++;
                                    endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>