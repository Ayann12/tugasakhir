<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-success-800"><?= $title; ?></h1>
    <div class="row ">
        <div class="col-lg">
            <form action="<?= base_url('input'); ?>" method="POST">
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK">
                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-5">
                        <label for="kk">No Kartu Keluarga</label>
                        <input type="number" class="form-control" id="kk" name="kk" placeholder="No Kartu Keluarga">
                        <?= form_error('kk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <label for="tempat">Tempat</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat">
                        <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-5">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgllahir" name="tgllahir" placeholder="Tanggal Lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                            <option aria-placeholder="Jenis Kelamin">--Pilih--</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                            <option>Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
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
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option aria-placeholder="status">--Pilih--</option>
                            <option>Menikah</option>
                            <option>Belum Menikah</option>
                            <option>Cerai</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <label for="pt">Pendidikan Terakhir</label>
                        <select class="form-control" id="pt" name="pt">
                            <option value="0">--Pilih--</option>
                            <option>S1</option>
                            <option>D3</option>
                            <option>SMA/SMK</option>
                            <option>SMP</option>
                            <option>SD</option>
                            <option>Paket C</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-5">
                        <label for="notelpon">No Telepon</label>
                        <input type="number" class="form-control" id="notelpon" name="notelpon" placeholder="No Telepon">
                        <?= form_error('notelpon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap"></textarea>
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
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