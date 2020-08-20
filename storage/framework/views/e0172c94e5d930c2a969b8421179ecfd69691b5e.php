

<?php $__env->startSection('content'); ?>
    <?php if(count($event)>=1): ?>
        <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex-container1">
                <div>
                    <h2 class="bold"><?php echo e($row['name']); ?></h2><br/>
                    <p><?php echo e($row['description']); ?></p>
                        <br/>Los Interesados deben enviar sus datos a :<br/><br/>
                        <?php echo e($row['contactname']); ?> No. Teléf. <?php echo e($row['telephone']); ?> . Correo: <?php echo e($row['email']); ?><br>
                        <?php echo e($row['contactname1']); ?> No. Télef. <?php echo e($row['telephone1']); ?>.<br>
                        Correo: <?php echo e($row['email1']); ?>;<br> centroaugustomijares@gmail.com<br>
                        <br>
                        <?php echo e($row['location']); ?>

                        <br>
                        <br>
                        Se reciben preinscripciones hasta el <?php echo e($row['date']); ?><br>
                        <br>
                        Saludos, gracias por difundir esta oferta académica y contribuir así con el desarrollo humano de nuestra gente.
                        <br>
                    </p>
                    <?php if(!Auth::guest()): ?>
                        <?php if(Auth::user()->adminFlag == 1): ?>
                            <a href="/events/<?php echo e($row['tableid']); ?>/edit" class="btn btn-default">Edit</a>
                            <?php echo Form::open(['action'=>['EventsController@destroy', $row['tableid']], 'method'=>'POST', 'class'=>'']); ?>

                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                <?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger'])); ?>

                            <?php echo Form::close(); ?>

                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div style="padding-top: 10%;">
                    <img src="/storage/assets/<?php echo e($row['assets']); ?>" alt="logo" />
                </div>
                
            </div><br/><br/>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?> 
        <p>No Events</p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/events.blade.php ENDPATH**/ ?>