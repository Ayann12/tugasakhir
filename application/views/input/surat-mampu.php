<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-center text-success-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg">
            <form action="<?= base_url('input/surattidakmampu'); ?>" method="POST">
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="no_surat">No Surat</label>
                        <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="No Surat">
                        <?= form_error('no_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <label for="tempat">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat Lahir">
                        <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="col-sm-4">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgllahir" name="tgllahir" placeholder="Tanggal Lahir">
                        <?= form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                            <option class="">--Pilih--</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                            <option>Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="agama">Agama</label>
                        <select class="form-control" id="agama" name="agama">
                            <option aria-placeholder="Agama">--Pilih--</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Budha</option>
                            <option>Katholik</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option aria-placeholder="status">--Pilih--</option>
                            <option>Menikah</option>
                            <option>Belum Menikah</option>
                            <option>Cerai</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <label for="tglsurat">Tanggal Surat</label>
                        <input type="date" class="form-control" id="tglsurat" name="tglsurat" placeholder="Tanggal Surat">
                        <?= form_error('tglsurat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
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