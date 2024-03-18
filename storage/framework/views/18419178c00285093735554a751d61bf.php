<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e(session('success')); ?></h1>
        <h1><?php echo e(session('validate')); ?></h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php elseif(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php $__currentLoopData = $task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tasks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($tasks->id); ?></th>
                        <td><?php echo e($tasks->title); ?></td>
                        <td><?php echo e($tasks->description); ?></td>
                        <td><?php echo e($tasks->priority); ?></td>
                        <td><?php echo e($tasks->status); ?></td>
                        <td>
                                <form action="<?php echo e(route('task.delete', $tasks->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </td>
                        <td>

                            <a href="<?php echo e(route('task.update', $tasks->id)); ?>" class="btn btn-primary">Edit</a>

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>
        <a href="<?php echo e(url('/task/create')); ?>">Add more</a>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macos/laravel/small-todo/resources/views//task.blade.php ENDPATH**/ ?>