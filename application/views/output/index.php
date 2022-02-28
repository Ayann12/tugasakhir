<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <a href="<?= base_url('output/detail/'); ?>" class="badge badge-pill badge-success mb-4"> <i class="fas fa-user"></i> Detail Data Penduduk</a>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-striped table-bordered" id="dataTable" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nik</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($penduduk as $pen) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $pen['nik']; ?></td>
                            <td><?= $pen['nama']; ?></td>
                            <td><?= $pen['tgllahir']; ?></td>
                            <td><?= $pen['jenis_kelamin']; ?></td>
                            <td><?= $pen['alamat']; ?></td>
                            <td>
                                <a href="<?= base_url('output/edit/') . $pen['nik']; ?>" class="badge badge-pill badge-primary"> <i class="fas fa-edit"></i> Edit</a>
                                <a href="<?= base_url('output/delete/') . $pen['nik']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Really?');"> <i class="fas fa-trash"></i> Hapus</a>
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