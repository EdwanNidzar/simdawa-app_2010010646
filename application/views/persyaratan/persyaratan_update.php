<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Persyaratan Beasiswa</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('persyaratan') ?>" class="breadcrumb-link">Persyaratan Beasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data persyaratan Beasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $persyaratan->id ?>">
                            <div class="form-group row">
                                <label for="nama" class="col-md-2">Nama persyaratan Beasiswa</label>
                                <div class="col-md-10">
                                    <input type="text" value="<?= $persyaratan->nama_persyaratan ?>" name="nama_persyaratan" id="nama" class="form-control" required placeholder="Nama Persyaratan Beasiswa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ket" class="col-md-2">Keterangan</label>
                                <div class="col-md-10">
                                    <input type="text" value="<?= $persyaratan->keterangan ?>" name="keterangan" id="ket" class="form-control" required placeholder="Keterangan">
                                </div>
                            </div>
                            <a href="<?= base_url('persyaratan') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>