<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" style="width:100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                            <th scope="col">Aktif</th>
                            <th scope="col">Terdaftar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $a = 1; ?>
                        <?php foreach ($id as $i) : ?>
                            <tr>
                                <th scope="row"><?= $a; ?></th>
                                <td><?= $i['name']; ?></td>
                                <td><?= $i['email']; ?></td>
                                <td><?= $i['role']; ?></td>
                                <td><?= $i['is_active']; ?></td>
                                <td><?= date('d F Y', $i['date_created']); ?></td>
                                <td>
                                    <a href="<?= base_url('admin/edit/') . $i['id']; ?>" class="badge badge-pill badge-primary"> <i class="fas fa-edit"></i>Edit</a>
                                    <a href="<?= base_url('admin/delete/') . $i['id']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Really?');"> <i class="fas fa-trash"></i>Hapus</a>
                                </td>
                            </tr>
                            <?php $a++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->