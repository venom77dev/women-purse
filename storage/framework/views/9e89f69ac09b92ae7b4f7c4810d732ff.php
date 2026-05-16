<?php if(theme_option('section_title_shape_decorated', 'style-1') === 'style-3'): ?>
    <?php
        $title = preg_replace('/(\w+)/', '<span>$1</span>', $title, 1);
    ?>

    <?php echo BaseHelper::clean($title); ?>

<?php else: ?>
    <?php echo BaseHelper::clean($title); ?>

    <?php echo Theme::partial('section-title-shape'); ?>

<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/section-title-inner.blade.php ENDPATH**/ ?>