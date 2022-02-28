<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('artikel/tambahberita'); ?>" class="btn btn-success mb-3" role="button" aria-pressed="true">Upload Berita</a>
            <table class="table table-striped table-bordered" id="dataTable" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Artikel</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($berita as $b) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $b['judul']; ?></td>
                            <td><?= $b['deskripsi']; ?></td>
                            <td><img src="<?= base_url('assets/img/artikel/') . $b['image']; ?>" height="100" width="100"></td>
                            <td>
                                <a href="<?= base_url('artikel/editberita/') . $b['id']; ?>" class="badge badge-pill badge-primary"> <i class="fas fa-edit"></i>Edit</a>
                                <a href="<?= base_url('artikel/deleteberita/') . $b['id']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Really?');"> <i class="fas fa-trash"></i>Hapus</a>
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