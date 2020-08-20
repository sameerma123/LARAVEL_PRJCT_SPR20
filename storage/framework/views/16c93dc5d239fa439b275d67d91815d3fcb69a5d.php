

<?php $__env->startSection('content'); ?>
    
    <div style="text-align: center">
        <img src="/storage/assets/logo.png" alt="logo">
        <h3 class="bold">UN ESPACIO PARA DEBATIR A PARTIR DEL VÍDEO</h3>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="box box1">
        <?php if(count($video)>=1): ?>
            <?php $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box2">
                    <iframe src="<?php echo e($row['video']); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%"></iframe><br>
                    <div style="padding: 8%;">
                        <h4 class="bold"><?php echo e($row['name']); ?></h4><br>
                        <span style="text-align: center;"><?php echo e($row['decription']); ?><br/> URL: 
                        <a href="<?php echo e($row['url']); ?>"><?php echo e($row['url']); ?></a>
                        </span><br>
                    </div>
                    <?php if(!Auth::guest()): ?>
                        <?php if(Auth::user()->adminFlag == 1): ?>
                            <a href="/videos/<?php echo e($row['tableid']); ?>/edit" class="btn btn-default">Edit</a>
                            <?php echo Form::open(['action'=>['VideosController@destroy', $row['tableid']], 'method'=>'POST', 'class'=>'pull-right']); ?>

                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                <?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger'])); ?>

                            <?php echo Form::close(); ?>

                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?> 
            <p>No Videos</p>
        <?php endif; ?>    
    </div> <br/><br/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/videos.blade.php ENDPATH**/ ?>