<script src="<?= base_url('assets/plugin/ckeditor/ckeditor.js') ?>"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('pelayanan/edit/') . $layanan['id']; ?>" method="POST">
                <div class="form-group">
                    <input type="hidden" id="id" name="id" value="<?= $layanan['id']; ?>">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $layanan['icon']; ?>">
                    <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="kode_warna">Kode Warna</label>
                    <input type="text" class="form-control" id="kode_warna" name="kode_warna" value="<?= $layanan['kode_warna']; ?>">
                    <?= form_error('kode_warna', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $layanan['judul']; ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="ket">ket</label>
                    <textarea type="text" class="form-control" id="ket" name="ket"><?= $layanan['ket']; ?></textarea>
                    <?= form_error('ket', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    CKEDITOR.replace('ket', {

        uiColor: '#1CC789'
    });
</script>