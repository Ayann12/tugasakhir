<script src="<?= base_url('assets/plugin/ckeditor/ckeditor.js') ?>"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('pelayanan/editcaption/') . $kata['id']; ?>" method="POST">
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $kata['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jabatan">jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $kata['jabatan']; ?>">
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="caption">caption</label>
                    <textarea type="text" class="form-control" id="caption" name="caption"><?= $kata['caption']; ?></textarea>
                    <?= form_error('caption', '<small class="text-danger pl-3">', '</small>'); ?>
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
    CKEDITOR.replace('caption', {

        uiColor: '#1CC789'
    });
</script>