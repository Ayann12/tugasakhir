<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>


    <div class="row">
        <div class="lg-10 mx-auto text-center">
            <div class="container">
                <h2><b><?= $ngaduan['judul']; ?></b></h2>
                <img src="<?= base_url('assets/img/pengaduan/') . $ngaduan['image']; ?>" class="img-thumbnail" width="100%" height="100%">
                <p><?= $ngaduan['isi']; ?></p>

                <h4 class="text-left">Pengirim :</h4>
                <p>Nama : <?= $ngaduan['nama']; ?></p>
                <p>Dari Email :<?= $ngaduan['email']; ?></p>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->