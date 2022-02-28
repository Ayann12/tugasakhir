<script src="<?= base_url('assets/plugin/ckeditor/ckeditor.js') ?>"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('visimisi/edit/') . $id['id']; ?>" method="POST">
                <div class="form-group">
                    <input type="hidden" id="id" name="id" value="<?= $id['id']; ?>">
                    <label for="visi">Ubah Visi Desa</label>
                    <textarea type="text" class="form-control" id="visi" name="visi"><?= $id['visi']; ?></textarea>
                    <?= form_error('visi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="misi">Ubah Misi Desa</label>
                    <textarea type="text" class="form-control" id="misi" name="misi"><?= $id['misi']; ?></textarea>
                    <?= form_error('misi', '<small class="text-danger pl-3">', '</small>'); ?>
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
    CKEDITOR.replace('visi', {
        uiColor: '#1CC789'
    });
</script>
<script>
    CKEDITOR.replace('misi', {

        uiColor: '#1CC789'
    });
</script>