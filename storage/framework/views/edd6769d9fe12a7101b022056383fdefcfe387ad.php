

<?php $__env->startSection('content'); ?>
    <div style="margin-left: 5%; margin-right: 30%; margin-bottom:3%;">
        <h3>Add Projects Page</h3>
    <?php echo Form::open(['action' => 'ProjectsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name', 'Name')); ?>

            <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('description', 'Description')); ?>

            <?php echo e(Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('purpose', 'Purpose')); ?>

            <?php echo e(Form::textarea('purpose', '', ['class' => 'form-control', 'placeholder' => 'Purpose'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('values', 'Values')); ?>

            <?php echo e(Form::textarea('values', '', ['class' => 'form-control', 'placeholder' => 'Values'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('methods', 'Methods')); ?>

            <?php echo e(Form::textarea('methods', '', ['class' => 'form-control', 'placeholder' => 'Methods'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('investigation', 'Investigation')); ?>

            <?php echo e(Form::textarea('investigation', '', ['class' => 'form-control', 'placeholder' => 'Investigation'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('associations', 'Associations')); ?>

            <?php echo e(Form::textarea('associations', '', ['class' => 'form-control', 'placeholder' => 'Associations'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('research', 'Research')); ?>

            <?php echo e(Form::textarea('research', '', ['class' => 'form-control', 'placeholder' => 'Research'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('upload', 'Upload File')); ?>

            <?php echo e(Form::file('assets')); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/projectsAdd.blade.php ENDPATH**/ ?>