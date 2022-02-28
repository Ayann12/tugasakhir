<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('profile/tambah'); ?>" class="btn btn-success mb-3" role="button" aria-pressed="true">Tambah data</a>
            <table class="table table-striped table-bordered" id="dataTable" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($profile as $pro) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $pro['deskripsi']; ?></td>
                            <td><img src="<?= base_url('assets/img/sejarah/') . $pro['image']; ?>" height="100" width="100"></td>
                            <td>
                                <a href="<?= base_url('profile/edit/') . $pro['id']; ?>" class="badge badge-pill badge-primary"> <i class="fas fa-edit"></i>Edit</a>
                                <a href="<?= base_url('profile/delete/') . $pro['id']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Really?');"> <i class="fas fa-trash"></i>Hapus</a>
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