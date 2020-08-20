

<?php $__env->startSection('content'); ?>
    <?php if(count($inicio)>=1): ?>
        <?php $__currentLoopData = $inicio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex-container1">
                <div style="flex-grow: 5">
                    <img src="/storage/assets/logo.png" alt="logo"/>
                    <h1 style="color: #6059f6;" class="bold">CENTRO AUGUSTO MIJARES</h1>
                    ​<h2 class="bold" >DESARROLLO HUMANO SUSTENTABLE</h2>
                </div>
                <div style="flex-grow: 5">
                    <h3 class="bold">BIENVENIDA</h3>
                    <div><?php echo e($row['message']); ?></div>
                </div>
            </div> 
            <div class="flex-container">
                <div style="text-align: center;">
                    <img src="/storage/assets/logo.png" alt="logo" width="50px" height="50px"/>
                    <h3 class="bold">PROPÓSITO</h3>
                    <div class="purposeSpacing"><?php echo e($row['purpose']); ?></div>
                </div>
            </div>
            <div class="flex-container1" style="background-color:#F8F8F8;">
                <div style="flex-grow: 5; padding-top: 4%; padding-left: 4%;">
                    <iframe src="https://youtube.com/embed/Kcl-T98Wtvo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div style="flex-grow: 5">
                    <h3 class="bold">OBJETIVOS</h3>
                    <ol>
                        <li><?php echo e($row['objective1']); ?></li>
                        <li><?php echo e($row['objective2']); ?></li>
                        <li><?php echo e($row['objective3']); ?></li>
                        <li><?php echo e($row['objective4']); ?></li>
                    </ol>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?> 
        <p> Something went wrong. Please try after sometime. </p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/inicio.blade.php ENDPATH**/ ?>