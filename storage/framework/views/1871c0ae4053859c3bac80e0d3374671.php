<?php $__env->startSection('content'); ?>
    <?php echo apply_filters('theme_front_header_content', null); ?>


    <main>
        <?php echo Theme::breadcrumb()->render(Theme::getThemeNamespace('partials.breadcrumbs')); ?>


        <?php echo Theme::content(); ?>

    </main>

    <?php echo apply_filters('theme_front_footer_content', null); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(Theme::getThemeNamespace('layouts.base'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/layouts/full-width.blade.php ENDPATH**/ ?>