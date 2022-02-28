<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>
            <table class="table table-striped table-bordered" id="dataTable" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pengaduan as $b) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><img src="<?= base_url('assets/img/pengaduan/') . $b['image']; ?>" height="100" width="100"></td>
                            <td><?= $b['nama']; ?></td>
                            <td><?= $b['email']; ?></td>
                            <td><?= $b['isi']; ?></td>
                            <td>
                                <a href="<?= base_url('pengaduan/detail/') . $b['id_pengaduan']; ?>" class="badge badge-pill badge-primary"> <i class="fas fa-compress-alt"></i> Detail</a>
                                <a href="<?= base_url('pengaduan/hapus/') . $b['id_pengaduan']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Really?');"> <i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->