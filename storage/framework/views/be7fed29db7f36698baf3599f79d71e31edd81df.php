
<?php $__env->startSection('title','Создать новость'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Добавление новости</h2>
    <?php if($errors->any()): ?>
    <ul style="color:rgba(248, 254, 251, 1);">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>
    <div style="color:rgba(248, 254, 251, 1);">
        <form action="<?php echo e(route("articles.store")); ?>" method="POST" enctype="multipart/form-data>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="title" class="form-label">Заголовок</label>
                <input type="text" id="title" name="title" value="<?php echo e(old("")); ?>">
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <small><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="text" class="form-label">Текст</label>
                <input type="text" id="text" name="text" value="<?php echo e(old("")); ?>">
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Изображение</label>
                <input type="file" id="image" name="image" value="<?php echo e(old("")); ?>">
            </div>
            <div class="form-group">
                <label for="is-published" class="form-label">Опубликовать</label>
                <input type="checkbox" id="is-published" name="is-published" checked>
            </div>
            <button type="submit">Создать</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\forum\resources\views/articles/create-article.blade.php ENDPATH**/ ?>