<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg">
            <form action="<?= base_url('output/edit/') . $penduduk['nik']; ?>" method="POST">
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik" value="<?= $penduduk['nik']; ?>">
                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-5">
                        <label for="kk">No Kartu Keluarga</label>
                        <input type="number" class="form-control" id="kk" name="kk" value="<?= $penduduk['kk']; ?>">
                        <?= form_error('kk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $penduduk['nama']; ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="tempat">Tempat</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" value="<?= $penduduk['tempatlahir'] ?>">
                        <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-5">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="<?= $penduduk['tgllahir'] ?>">
                        <?= form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class=" form-group row">
                    <div class="col-sm-10">
                        <label for="jk">Jenis Kelamin</label>
                        <input class="form-control" id="jk" name="jk" value="<?= $penduduk['jenis_kelamin'] ?>">
                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="agama">Agama</label>
                        <input class="form-control" id="agama" name="agama" value="<?= $penduduk['agama']; ?>">
                        <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="status">Status</label>
                        <input class="form-control" id="status" name="status" value="<?= $penduduk['status']; ?>">
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-5">
                        <label for="pt">Pendidikan Terakhir</label>
                        <input class="form-control" id="pt" name="pt" value="<?= $penduduk['pendidikan']; ?>">
                        <?= form_error('pt', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $penduduk['pekerjaan']; ?>">
                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-5">
                        <label for="notelpon">No Telepon</label>
                        <input type="number" class="form-control" id="notelpon" name="notelpon" value="<?= $penduduk['no_telpon']; ?>">
                        <?= form_error('notelpon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $penduduk['alamat']; ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
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