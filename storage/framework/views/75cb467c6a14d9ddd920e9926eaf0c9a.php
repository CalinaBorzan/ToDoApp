<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent("title", "To Do App"); ?></title>
    <link href="<?php echo e(asset("assets/css/bootstrap.min.css")); ?>" rel="stylesheet" >
    <?php echo $__env->yieldContent("style"); ?>

</head>
<body class ="d-flex flex-column h-100">
<?php echo $__env->make("include.header", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldContent("content"); ?>
<?php echo $__env->make("include.footer", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<script src="<?php echo e(asset("assets/js/bootstrap.min.js")); ?>"></script>
</body>
</html>

<?php /**PATH C:\Users\Calina\to-do-app\resources\views/layout/default.blade.php ENDPATH**/ ?>