

<?php $__env->startSection('content'); ?>
    <div style="margin-left: 5%; margin-right: 30%; margin-bottom:3%;">
        <h3>Add Videos Page</h3>
    <?php echo Form::open(['action' => 'VideosController@store', 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name', 'Name')); ?>

            <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('video', 'Video URL')); ?>

            <?php echo e(Form::text('video', '', ['class' => 'form-control', 'placeholder' => 'Video URL'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('description', 'Description')); ?>

            <?php echo e(Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('url', 'URL')); ?>

            <?php echo e(Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'URL'])); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/videosAdd.blade.php ENDPATH**/ ?>