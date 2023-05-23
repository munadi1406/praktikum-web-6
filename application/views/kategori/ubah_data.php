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
                        <li class="breadcrumb-item ">Kategori Prestasi</li>
                        <li class="breadcrumb-item active">Tambah Data</li>
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
                            <h5 class="m-0">Tambah Data Kategori Prestasi
                                <a href="<?= base_url('kategori') ?>" class="btn btn-success float-right"><i class="fa fa-arrow-left"></i>Kembali</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nama_kategori">Nama Kategori</label>
                                    <input type="text" value="<?= $kategori->nama_kategori ?>" name="nama_kategori" id="nama_kategori" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-sm" name="simpan" ><i class="fa fa-save mr-2"></i>Simpan</button>
                                    <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban mr-2"></i>Batal</button>
                                </div>
                            </form>
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