

<?php $__env->startSection('content'); ?>
    <div style="margin-left: 5%; margin-right: 30%; margin-bottom:3%;">
        <h3>Edit Events Page</h3>
    <?php echo Form::open(['action' => ['EventsController@update', $event['tableid']], 'method' => 'POST', 'enctype'=>'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name', 'Event Name')); ?>

            <?php echo e(Form::text('name', $event['name'], ['class' => 'form-control', 'placeholder' => 'Event Name'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('description', 'Description')); ?>

            <?php echo e(Form::textarea('description', $event['description'], ['class' => 'form-control', 'placeholder' => 'Description'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('contactname', 'Contact Name')); ?>

            <?php echo e(Form::text('contactname', $event['contactname'], ['class' => 'form-control', 'placeholder' => 'Contact Name'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('telephone', 'Contact Telephone')); ?>

            <?php echo e(Form::number('telephone', $event['telephone'], ['class' => 'form-control', 'placeholder' => 'Contact Telephone'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('email', 'Contact email')); ?>

            <?php echo e(Form::email('email', $event['email'], ['class' => 'form-control', 'placeholder' => 'Contact email'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('location', 'Location')); ?>

            <?php echo e(Form::text('location', $event['location'], ['class' => 'form-control', 'placeholder' => 'Location'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('date', 'Date')); ?>

            <?php echo e(Form::date('date', $event['date'], ['class' => 'form-control', 'placeholder' => 'Date'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('upload', 'Upload File')); ?>

            <?php echo e(Form::file('assets')); ?>

        </div>
        <?php echo e(Form::hidden('_method', 'PUT')); ?>

        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/eventsEdit.blade.php ENDPATH**/ ?>