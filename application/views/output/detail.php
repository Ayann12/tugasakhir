<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="text-center text-success"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>
            <table class="table table-striped table-bordered" id="dataTable" style="width:100%" cellspacing="0">
                <thead class="bg-success text-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nik</th>
                        <th scope="col">No KK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($penduduk as $pen) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $pen['nik']; ?></td>
                            <td><?= $pen['kk']; ?></td>
                            <td><?= $pen['nama']; ?></td>
                            <td><?= $pen['tempatlahir']; ?></td>
                            <td><?= $pen['tgllahir']; ?></td>
                            <td><?= $pen['jenis_kelamin']; ?></td>
                            <td><?= $pen['agama']; ?></td>
                            <td><?= $pen['status']; ?></td>
                            <td><?= $pen['pendidikan']; ?></td>
                            <td><?= $pen['pekerjaan']; ?></td>
                            <td><?= $pen['no_telpon']; ?></td>
                            <td><?= $pen['alamat']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="<?= base_url('output/'); ?>" class="btn btn-success"> <i class="fas fa-times-circle"></i> Tutup</a>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->