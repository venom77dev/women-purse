<!doctype html>
<html <?php echo Theme::htmlAttributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="robots" content="noindex, nofollow">
        <?php echo Theme::partial('header-meta'); ?>


        <?php echo Theme::header(); ?>



    </head>
    <body <?php echo Theme::bodyAttributes(); ?>>
        <?php echo apply_filters(THEME_FRONT_BODY, null); ?>


        <?php echo $__env->yieldContent('content'); ?>

        <?php echo Theme::footer(); ?>

    </body>
</html>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/layouts/base.blade.php ENDPATH**/ ?>