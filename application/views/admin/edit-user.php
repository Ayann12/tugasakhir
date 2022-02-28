<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <h5> Name : <?= $name['name']; ?></h5>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('admin/edit/')  . $name['id']; ?>" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $name['email']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="role_id">Control Level</label>
                    <select class="form-control" id="role_id" name="role_id" value="<?= $name['role_id']; ?>">
                        <?php foreach ($pilihan as $p) : ?>
                            <?php if ($p == $name['role_id']) : ?>
                                <option value="<?= $p ?>" selected><?= $p ?></option>
                            <?php else : ?>
                                <option value="<?= $p ?>"><?= $p ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="is_active">Control Aktivasi</label>
                    <select class="form-control" id="is_active" name="is_active" value="<?= $name['role_id']; ?>">
                        <?php foreach ($aktifasi as $a) : ?>
                            <?php if ($a == $name['role_id']) : ?>
                                <option value="<?= $a ?>" selected><?= $a ?></option>
                            <?php else : ?>
                                <option value="<?= $a ?>"><?= $a ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Ubah Pengguna</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->