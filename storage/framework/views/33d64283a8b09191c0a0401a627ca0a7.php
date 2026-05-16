<?php
    $title = $shortcode->title;
    $subtitle = $shortcode->subtitle;
?>

<?php if($title || $subtitle): ?>
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-section-title-wrapper-2', $class ?? null]); ?>">
        <?php if($subtitle): ?>
            <span class="tp-section-title-pre-2">
                <?php echo BaseHelper::clean($subtitle); ?>

                <?php echo Theme::partial('section-title-shape'); ?>

            </span>
        <?php endif; ?>
        <?php if($title): ?>
            <h3 class="section-title tp-section-title-2">
                <?php echo $__env->make(Theme::getThemeNamespace('partials.section-title-inner'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </h3>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy-fashion/partials/section-title.blade.php ENDPATH**/ ?>