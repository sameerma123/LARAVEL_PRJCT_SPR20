

<?php $__env->startSection('content'); ?>
    <?php if(count($mission)>=1): ?>
        <?php $__currentLoopData = $mission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex-container1" style="text-align: center;">
            <div style="flex-grow: 5" >
                <h1 style="color: #6059f6;" class="bold">MISIÓN</h2>
                <p><?php echo e($row['mission']); ?></p>
            </div>
            <div style="flex-grow: 5">
                <h1 style="color: #6059f6;" class="bold">VISIÓN</h2>
                <p ><?php echo e($row['vision']); ?></p>
            </div>
        </div>
        <div class="flex-container1" style="text-align: center;">
            <div>
                <img src="/storage/assets/logo.png" alt="logo"  width="50px" height="50px"/><br>
                <h2 class="bold">VALORES</h2>
                <p  class="purposeSpacing"><?php echo e($row['valores']); ?></p>
            </div>  
        </div><br/>
        <div class="box box1">
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">RESPONSABILIDAD SOCIAL</h4><br>
                <p><?php echo e($row['value1']); ?></p>
                
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">FRATERNIDAD</h4>
                <p><?php echo e($row['value2']); ?> </p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">LIBERTAD</h4>
                <p><?php echo e($row['value3']); ?></p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">CORRESPONSABILIDAD</h4>
                <p><?php echo e($row['value4']); ?></p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">SOLIDARIDAD</h4>
                <p><?php echo e($row['value5']); ?></p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">CONSTANCIA</h4>
                <p><?php echo e($row['value6']); ?> </p>  
            </div>
            <br/><br/>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    <?php else: ?> 
        <p>Something went wrong. Please try again later.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/mission.blade.php ENDPATH**/ ?>