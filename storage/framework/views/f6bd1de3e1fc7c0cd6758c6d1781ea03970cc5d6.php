
<?php $__env->startSection('title','Новости'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Новости</h2>
    <section>
        <?php if($articles->count()): ?>
        <div class="main_news">
            <h4><?php echo e($article[0]->title); ?></h4>
            <p><?php echo e($article[0]->text); ?></p>
        </div>
        <div class="news">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route("articles.show",$article->slug)); ?>"></a>
            <img src="<?php echo e(asset('uploads'.$article->image)); ?>" alt="">
            <span>
                <a href="<?php echo e(route("articles.editArticle",$article)); ?>"><button type="submit">Изменить</button></a>
                <form action="<?php echo e(route("articles.delete",$article)); ?>" method="POST">
                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick='event.preventDefault();if(confirm("Запись будет удалена. Продолжить?")){this.coldest("form").submit()'>Удалить</button>
                </form>
            </span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php else: ?>
        <p>Нет новостей</p>
        <?php endif; ?>
        <a href="<?php echo e(route('articles.create')); ?>">Добавить статью</a>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\forum\resources\views/articles/articles-list.blade.php ENDPATH**/ ?>