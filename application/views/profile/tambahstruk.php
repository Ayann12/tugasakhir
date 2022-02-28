<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_open_multipart('profile/tambahstruk'); ?>
            <div class="form-group row">
                <label for="periode" class="col-sm-2 col-form-label">periode</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="periode" name="periode" placeholder="Tahun-tahun">
                    <?= form_error('periode', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success btn-md btn-block">Tambah data</button>
                </div>
            </div>
            </form>

        </div>
    </div>



</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->