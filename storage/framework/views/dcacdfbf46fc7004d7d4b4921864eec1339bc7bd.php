

<?php $__env->startSection('content'); ?>
<div class="flex-container1">
    <div style="text-align: center;">
        <img src="storage/assets/logo.png" alt="logo" width="80px" height="80px"/>
        <h2 class="bold">RESPONSABILIDAD SOCIAL UNIVERSITARIA​ Y DESARROLLO SUSTENTABLE ¿QUÉ Y PARA QUÉ?
        </h2>
    </div>
</div>
    <?php if(count($project)>=1): ?>
        <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <div class="flex-container1">
                <div style="flex-grow: 5;">
                    <img src="/storage/assets/<?php echo e($row['assets']); ?>" alt="logo" />
                </div>
                <div style="flex-grow: 5;">
                    <h4 class="bold"><?php echo e($row['name']); ?></h4>
                    <p><?php echo e($row['description']); ?></p>
                    <p><span class="projectStyle">Propósito:</span> <?php echo e($row['purpose']); ?></p>  
                    <p><span class="projectStyle">Valores:</span> <?php echo e($row['values']); ?></p>  
                    <p> <span class="projectStyle">Métodos:</span> <?php echo e($row['methods']); ?></p>
           l     </div>
            </div><br/><br/>
            <div class="flex-container1">
                <div style="flex-grow: 5;">
                    <p ><span class="projectStyle">Investigación:</span><?php echo e($row['investigation']); ?></p>
                    <p><span class="projectStyle">Asociación:</span><?php echo e($row['associations']); ?></p>
                    <p><span class="projectStyle">Diálogo:</span><?php echo e($row['research']); ?></p>
                    <?php if(!Auth::guest()): ?>
                        <?php if(Auth::user()->adminFlag == 1): ?>
                            <a href="/projects/<?php echo e($row['tableid']); ?>/edit" class="btn btn-default">Edit</a>
                            <?php echo Form::open(['action'=>['ProjectsController@destroy', $row['tableid']], 'method'=>'POST', 'class'=>'pull-right']); ?>

                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                <?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger'])); ?>

                            <?php echo Form::close(); ?>

                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div style="flex-grow: 5;">
                    <img src="/storage/assets/<?php echo e($row['assets']); ?>" alt="logo" />
                </div>
                
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?> 
        <p> no projects </p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/projects.blade.php ENDPATH**/ ?>