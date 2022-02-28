<script src="<?= base_url('assets/plugin/ckeditor/ckeditor.js') ?>"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#NewVisimisiModal">Visi Misi Desa</a>
            <table class="table table-striped table-bordered" id="dataTable" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($visimisi as $vm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $vm['visi']; ?></td>
                            <td><?= $vm['misi']; ?></td>
                            <td>
                                <a href="<?= base_url('visimisi/edit/') . $vm['id']; ?>" class="badge badge-pill badge-primary"> <i class="fas fa-edit"></i>Edit</a>
                                <a href="<?= base_url('visimisi/delete/') . $vm['id']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Really?');"> <i class="fas fa-trash"></i>Hapus</a>
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


<!-- Modal -->
<div class="modal fade" id="NewVisimisiModal" tabindex="-1" role="dialog" aria-labelledby="NewVisimisiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewVisimisiModalLabel">Visi Misi Desa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('visimisi'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="visi" name="visi" placeholder="Visi Desa"></textarea>
                        <?= form_error('visi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="misi" name="misi" placeholder="Misi Desa"></textarea>
                        <?= form_error('misi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

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