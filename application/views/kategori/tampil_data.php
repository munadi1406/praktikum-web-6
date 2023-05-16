<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Kategori Prestasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
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
                                <a href="?page=jenis&aksi=add" class="btn btn-success float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-stripped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Beasiswa</th>
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