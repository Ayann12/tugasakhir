<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-center text-success-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg">
            <form action="<?= base_url('output/ktpedit/') . $ktp['id_surat']; ?>" method="POST">
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="no_surat">No Surat</label>
                        <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?= $ktp['no_surat'] ?>">
                        <?= form_error('no_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $ktp['nama']; ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <label for="tempat">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" value="<?= $ktp['tempat_lahir']; ?>">
                        <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="col-sm-4">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="<?= $ktp['tgllahir']; ?>">
                        <?= form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jk" name="jk" value="<?= $ktp['jenis_kelamin']; ?>">
                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" value="<?= $ktp['agama']; ?>">
                        <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" name="status" value="<?= $ktp['status']; ?>">
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $ktp['pekerjaan']; ?>">
                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $ktp['alamat']; ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="tglsurat">Tanggal Surat</label>
                        <input type="date" class="form-control" id="tglsurat" name="tglsurat" value="<?= $ktp['tglsurat']; ?>"">
                        <?= form_error('tglsurat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class=" form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success btn-md btn-block">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->