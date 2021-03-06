

<?php $__env->startSection('content'); ?>
    <div style="margin-left: 5%; margin-right: 30%; margin-bottom:3%;">
        <h3>Add Events Page</h3>
    <?php echo Form::open(['action' => 'MembersController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name', 'Name')); ?>

            <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('description', 'Description')); ?>

            <?php echo e(Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('telephone', 'Telephone')); ?>

            <?php echo e(Form::number('telephone', '', ['class' => 'form-control', 'placeholder' => 'Telephone'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('email', 'Email')); ?>

            <?php echo e(Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('upload', 'Upload File')); ?>

            <?php echo e(Form::file('assets')); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/membersAdd.blade.php ENDPATH**/ ?>