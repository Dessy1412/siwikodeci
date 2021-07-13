<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <b><?= $title; ?></b>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('Culinary/update') ?>" method="post">
                <input type="hidden" name="id"  value="<?= $culinary['id']; ?>">
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Nama Kuliner</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control"  value="<?= $culinary['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="jenis" class="col-sm-2 label" >Jenis</label>
                    <div class="col-sm-4">
                    <input type="text" name="jenis" class="form-control" value="<?= $culinary['jenis']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="alamat" class="col-sm-2 label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text-area"  name="alamat" rows="3" class="form-control" value="<?= $culinary['alamat'];?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Telp</label>
                    <div class="col-sm-4">
                        <input type="text" name="telp" class="form-control" value="<?= $culinary['telp']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Bintang</label>
                    <div class="col-sm-4">
                        <input type="text" name="bintang" class="form-control" value="<?= $culinary['bintang']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="nama" class="col-sm-2 label">Foto</label>
                    <div class="col-sm-4">
                        <input type="text" name="foto" class="form-control" value="<?= $culinary['foto']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="submit" value="submit" onclick="confirm('Are you sure to update ? ')" class="btn btn-info">
                        <a class="btn btn-danger" href="<?= base_url('Culinary/registrasi');?>">Cancel</a>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>