
<?php $__env->startSection('title','Доданi оголошення::Мої оголошення'); ?>
<?php $__env->startSection('main'); ?>
<form action="<?php echo e(route('bb.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="txtTitle">Товари</label>
        <input name="title" id="txtTitle" class="form-control" value="<?php echo e(old('title')); ?>">
    </div>
    <div class="form-group">
        <label for="txtContent">Опис</label>
        <textarea name="content" id="txtContent" class="form-control" row="3"></textarea>
    </div>
    <div class="form-group">
        <label for="txtPrice">Ціна</label>
        <input name="price" id="txtPrice" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Додати">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openServer\OSPanel\domains\bboard\resources\views/bb_add.blade.php ENDPATH**/ ?>