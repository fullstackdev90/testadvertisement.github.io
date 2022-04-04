
<?php $__env->startSection('title', 'Видалити оголошення::Мої оголошення'); ?>

<?php $__env->startSection('main'); ?>        
        <form action="<?php echo e(route('bb.delete', ['bb' => $bb->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
                    
            <h2><?php echo e($bb->title); ?></h2>
            <p><?php echo e($bb->content); ?></p>
            <p><?php echo e($bb->price); ?> eur. </p>
            <p>Автор: <?php echo e($bb->user->name); ?></p>
            
            <input type="submit" class="btn btn-danger" vаluе="Видалити">
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openServer\OSPanel\domains\bboard\resources\views/bb_delete.blade.php ENDPATH**/ ?>