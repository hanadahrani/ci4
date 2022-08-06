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
				  	Successfully updated.
				</div>
			<?php endif; ?>
            <div class="card">
                <div class="card-header bg-light">
                    <h4>Edit To-Do Lists</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= base_url('todo/update/'.$tasks->id) ?>">
                    	<?= csrf_field(); ?>
					  	<fieldset>
					    	<div class="form-group">
						      	<label class="form-label mt-4">Task</label>
						      	<input type="text" class="form-control" id="task" name="task" value="<?= $tasks->task; ?>">
						    </div>
				      		<div class="form-group">
                                <label for="start_date" class="form-label mt-4">Start Date</label>
                                <input type="text" class="form-control datepicker" id="start_date" name="start_date" value="<?= $tasks->start_date; ?>">
                            </div>
                            <div class="form-group">
                                <label for="end_date" class="form-label mt-4">End Date</label>
                                <input type="text" class="form-control datepicker" id="end_date" name="end_date" value="<?= $tasks->end_date; ?>">
                            </div>
						    <fieldset class="form-group">
						      	<label for="status" class="form-label mt-4">Status</label>
						      	<div class="form-check">
							        <input class="form-check-input" type="radio" name="status" id="status1" value="Ongoing" <?php echo ($tasks->status == 'Ongoing' ? ' checked' : ''); ?>>
							        <label class="form-check-label" for="status1">
							          	Ongoing
							        </label>
						      	</div>
						      	<div class="form-check">
							        <input class="form-check-input" type="radio" name="status" id="status2" value="Done" <?php echo ($tasks->status == 'Done' ? ' checked' : ''); ?>>
							        <label class="form-check-label" for="status2">
							          	Done
							        </label>
						      	</div>
						    </fieldset>
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
