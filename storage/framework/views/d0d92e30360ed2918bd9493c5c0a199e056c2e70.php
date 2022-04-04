
<?php $__env->startSection('title','Редагування оголошень::Мої оголошення'); ?>
<?php $__env->startSection('main'); ?>
<form action="<?php echo e(route('bb.update',['bb' => $bb->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>
    <div class="form-group">
        <label for="txtTitle">Товари</label>
        <input name="title" id="txtTitle" class="form-control" value="<?php echo e($bb->title); ?>">
    </div>
    <div class="form-group">
        <label for="txtContent">Опис</label>
        <textarea name="content" id="txtContent" class="form-control" row="3"><?php echo e($bb->content); ?>"</textarea>
    </div>
    <div class="form-group">
        <label for="txtPrice">Ціна</label>
        <input name="price" id="txtPrice" class="form-control" value="<?php echo e($bb->price); ?>">
    </div>
    <input type="submit" class="btn btn-primary" value="Зберегти">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openServer\OSPanel\domains\bboard\resources\views/bb_edit.blade.php ENDPATH**/ ?>