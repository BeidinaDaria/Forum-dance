<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config("app.name")); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/style.css")); ?>">
</head>
<body>
    <header>
        <div class="logo">
            <img src="<?php echo e(asset("assets/images/Logo.png")); ?>" alt="Forum">
            <div class="contact">
                <h2>8 (958) 222-55-11</h2>
                <h2>8 (918) 94-20-800</h2>
            </div>
        </div>
        <nav>
            <a href="<?php echo e(route("app.main")); ?>"><?php echo e(__("app.menu.home")); ?></a>
            <a href="<?php echo e(route("articles.list")); ?>"><?php echo e(__("app.menu.news")); ?></a>
            <a href="cup.html"><?php echo e(__("app.menu.news")); ?></a>
            <a href="schedule.html"><?php echo e(__("app.menu.schedule")); ?></a>
            <a href="#"><?php echo e(__("app.menu.gallery")); ?></a>
            <a href="<?php echo e(route("auth.login-page")); ?>"><?php echo e(__("app.menu.profile")); ?></a>
            <a href="<?php echo e(route("articles.create")); ?>"><?php echo e(__("app.menu.dashboard")); ?></a>
        </nav>
        <?php if(auth()->user()): ?>
        <form action="<?php echo e(route('auth.logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit">Выйти</button>
        </form>
        <?php endif; ?>
    </header>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\forum\resources\views/layouts/header.blade.php ENDPATH**/ ?>