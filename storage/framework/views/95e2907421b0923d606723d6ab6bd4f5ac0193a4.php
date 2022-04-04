<?php $__env->startSection('title', 'Мої оголошення'); ?>
<?php $__env->startSection('main'); ?>
    <p class="text-right"><a href="<?php echo e(route('bb.add')); ?>">Додати оголошення</a></p>
    <?php if(count($bbs) > 0): ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Товар</th>
                <th>Цiна, eur</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $bbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><h3><?php echo e($bb->title); ?></h3></td>
                <td><?php echo e($bb->price); ?></td>
                <td><a href=" <?php echo e(route('bb.edit', ['bb' => $bb->id])); ?>">Змiнити</td>
                <td><a href="<?php echo e(route('bb.delete', ['bb' => $bb->id])); ?>">Видалити</td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openServer\OSPanel\domains\bboard\resources\views/home.blade.php ENDPATH**/ ?>