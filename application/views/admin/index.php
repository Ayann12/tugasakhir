<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>

    <table>
        <div class="jumbotron text-center">
            <h1 class="display-4">Hello,<?= $user['name']; ?></h1>
            <p class="lead">Selamat datang pada halaman dashboard admin Sistem Informasi Desa Sumuranja</p>
            <hr class="my-4">
        </div>
    </table>
    <h1 class="h3 mb-4 text-success-800">Pelayanan Surat</h1>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Surat Pengantar KTP</div>
                            <a href="<?= base_url('input/suratktp'); ?>">klik disini</a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope-square fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Surat Ket Tidak Mampu</div>
                            <a class="text-success" href="<?= base_url('input/surattidakmampu'); ?>">klik disini</a>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-sticky-note fa-2x text-success-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Surat Pengantar SKCK</div>
                            <a class="text-warning" href="<?= base_url('input/skck'); ?>">klik disini</a>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-galactic-republic fa-2x text-warning-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Surat Pengantar Nikah</div>
                            <a class="text-danger" href="<?= base_url('input/nikah'); ?>">klik disini</a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-journal-whills fa-2x text-danger-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->