<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    Error! Please try again.
                </div>
            <?php endif; ?>
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    Successfully added.
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header bg-light">
                    <a href="<?php echo base_url('/todo/create') ?>" class="btn btn-sm btn-outline-primary" style="float:left;">Add To-Do Lists</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabel" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Task</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    $no = 1;
                                    foreach ($tasks as $value) { 
                                ?>
                                    <tr id="<?php echo $value->id; ?>">
                                        <td><?= $no++; ?></td>
                                        <td><?php echo $value->task; ?></td>
                                        <td><?php echo $value->start_date; ?></td>
                                        <td><?php echo $value->end_date; ?></td>
                                        <td>
                                            <?php if($value->status === 'Done'): ?>
                                                <span class="badge bg-success"><?= $value->status; ?></span>
                                            <?php else: ?>
                                                <span class="badge bg-primary"><?= $value->status; ?></span>
                                            <?php endif ?>
                                        </td>
                                        <td><a href="<?php echo base_url("/todo/edit/$value->id") ?>" class="btn btn-sm btn-outline-primary">Edit</a> &nbsp; <a href="<?= base_url("/todo/delete/$value->id") ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                                    </tr>

                                <?php } ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>         
    </div>
</div>
<script type="text/javascript">
    var url_home   = "<?= base_url('/') ?>"
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#tabel').DataTable({
            "language": {
                "emptyTable":     "No data available in table",
                "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty":      "Showing 0 to 0 of 0 entries",
                "infoFiltered":   "(filtered of _MAX_ total entries)",
                "lengthMenu":     "Showing _MENU_ entries",
                "search":         "Search:",
                "zeroRecords":    "No matching records found",
                "paginate": {
                    "first":      "<<",
                    "last":       ">>",
                    "next":       ">",
                    "previous":   "<"
                },
            },
            "lengthMenu"  : [[10, 25, 50, -1], [10, 25, 50, "All"]],
            autoWidth:false,
            order: [
                0, "asc"
            ],
        });
    });
</script>

<?= $this->endSection('content'); ?>