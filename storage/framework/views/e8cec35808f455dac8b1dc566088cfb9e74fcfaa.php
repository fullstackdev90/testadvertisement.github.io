
<?php $__env->startSection('title', $bb->title); ?>
<?php $__env->startSection('main'); ?>
                <h2><?php echo e($bb->title); ?></h2>
                    <p><?php echo e($bb->content); ?></p>
                    <p><?php echo e($bb->price); ?> eur. </p>
                    <p>Автор: <?php echo e($bb->user->name); ?></p>
                    <p><a href="<?php echo e(route('index')); ?>">Нa головну</a></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openServer\OSPanel\domains\bboard\resources\views/detail.blade.php ENDPATH**/ ?>