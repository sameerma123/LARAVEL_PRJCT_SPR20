

<?php $__env->startSection('content'); ?>
    <div>
        <table class="adminpanel">
            <tr>
                <th class="bold">Page</th>
                <th class="bold" colspan="2">Action</th>
            </tr>
            <tr>
                <td>Proyectos</td>
                <td><a href="/projects/create">Add</a></td>
                <td><a href="/projects">Update / Delete</a></td>
                
            </tr>
            <tr>
                <td>Eventos</td>
                <td><a href="/events/create">Add</a></td>
                <td><a href="/events">Update / Delete</a></td>
                
            </tr>
            <tr>
                <td>Videos</td>
                <td><a href="/videos/create">Add</a></td>
                <td><a href="/videos">Update / Delete</a></td>
                
            </tr>
            <tr>
                <td>Equipos</td>
                <td><a href="/members/create">Add</a></td>
                <td><a href="/members">Update / Delete</a></td>
                
            </tr>
        </table>
    </div><br/><br/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/pages/adminpanel.blade.php ENDPATH**/ ?>