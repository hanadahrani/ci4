<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Peserta</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/peserta/create'); ?>" class="btn btn-info">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($peserta as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->name; ?></td>
                        <td><?= $row->email; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("peserta/edit/$row->id"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("peserta/delete/$row->id") ?>" class="btn btn-info" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>