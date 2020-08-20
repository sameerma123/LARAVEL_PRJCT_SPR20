

<?php $__env->startSection('content'); ?>
<div style="text-align: center;">
    <img src="/storage/assets/logo.png" alt="logo" width="100px" height="100px"/>
    <h3 class="bold">SOMOS UN EQUIPO INTERDISCIPLINARIO</h3><br/><br/><br/>
</div>
<div class="box box1">
    <?php if(count($member)>=1): ?>
        <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="box2">
        <img src="/storage/assets/<?php echo e($row['assets']); ?>" alt="image" /><br>        
        <h4 class="bold"><?php echo e($row['name']); ?></h4><br>
        <div class="membersStyle">
            <span><?php echo e($row['description']); ?></span><br/>
            <span>Teléf.: <?php echo e($row['telephone']); ?></span><br>
            <span>E-mail: <?php echo e($row['email']); ?></span>
        </div>
        <?php if(!Auth::guest()): ?>
            <?php if(Auth::user()->adminFlag == 1): ?>
                <a href="/members/<?php echo e($row['tableid']); ?>/edit" class="btn btn-default">Edit</a>
                <?php echo Form::open(['action'=>['MembersController@destroy', $row['tableid']], 'method'=>'POST', 'class'=>'pull-right']); ?>

                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger'])); ?>

                <?php echo Form::close(); ?>

            <?php endif; ?>
        <?php endif; ?>
    </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?> 
        <p>No Members</p>
    <?php endif; ?>
    
</div>
<br/><br/>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/members.blade.php ENDPATH**/ ?>