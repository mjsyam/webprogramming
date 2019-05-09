<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
</head>
<body>
    <?php $__env->startSection('sidebar'); ?>
    
    <?php echo $__env->yieldSection(); ?>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script type="text/javascript" src="<?php echo e(asset('/js/app.js')); ?>"></script>
</body>
</html><?php /**PATH /home/vagrant/code/unibava/resources/views/layouts/app.blade.php ENDPATH**/ ?>