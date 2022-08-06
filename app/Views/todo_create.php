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
                    <h4>Add To-Do Lists</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('todo/store')?>">
                        <?= csrf_field(); ?>
                        <fieldset>
                            <div class="form-group">
                                <label for="task" class="form-label mt-4">Task</label>
                                <input type="text" class="form-control" id="task" name="task">
                            </div>
                            <div class="form-group">
                                <label for="start_date" class="form-label mt-4">Start Date</label>
                                <input type="text" class="form-control datepicker" id="start_date" name="start_date">
                            </div>
                            <div class="form-group">
                                <label for="end_date" class="form-label mt-4">End Date</label>
                                <input type="text" class="form-control datepicker" id="end_date" name="end_date">
                            </div>
                            <br/>
                            <input type="submit" value="SAVE" class="btn btn-primary">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>         
    </div>
</div>
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
    });
</script>
<?= $this->endSection('content'); ?>