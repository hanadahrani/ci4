<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Peserta</h3>
        </div>
        <div class="card-body">
            
            <form method="post" action="<?php echo base_url('peserta/store') ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" />
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary" />
                </div>

            </form>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>