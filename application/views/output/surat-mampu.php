<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>

            <table class="table table-striped table-bordered" id="dataTable" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Surat</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tgl Surat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mampu as $tak) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $tak['no_surat']; ?></td>
                            <td><?= $tak['nama']; ?></td>
                            <td><?= $tak['tgllahir']; ?></td>
                            <td><?= $tak['jenis_kelamin']; ?></td>
                            <td><?= $tak['alamat']; ?></td>
                            <td><?= $tak['tglsurat']; ?></td>
                            <td>
                                <a href="<?= base_url('output/mampuprint/') . $tak['id_surat']; ?>" class="badge badge-pill badge-warning"> <i class="fas fa-print"></i> Print</a>
                                <a href="<?= base_url('output/editmampu/') . $tak['id_surat']; ?>" class="badge badge-pill badge-primary"> <i class="fas fa-edit"></i> Edit</a>
                                <a href="<?= base_url('output/mampudelete/') . $tak['id_surat']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Really?');"> <i class="fas fa-trash"></i> Hapus</a>
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