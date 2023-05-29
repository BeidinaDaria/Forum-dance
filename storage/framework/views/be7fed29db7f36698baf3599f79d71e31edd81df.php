
<?php $__env->startSection('title','Создать новость'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Добавление новости</h2>
    <div>
        <form action="<?php echo e(route("articles.store")); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="" class="form-label">Заголовок</label>
                <input type="text" id="title" name="title">
            </div>
            <button type="submit">Создать</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\forum\resources\views/articles/create-article.blade.php ENDPATH**/ ?>