<?php
    $hasLogoLight ??= false;
    $defaultIsDark ??= true;

    $logo = theme_option('logo');
    $logoLight = theme_option('logo_light');

    $height = theme_option('logo_height', 35);
    $attributes = [
        'style' => sprintf('height: %s', is_numeric($height) ? "{$height}px" : $height),
        'loading' => false,
    ];
?>

<?php if($logo || $logoLight): ?>
    <div class="logo">
        <a href="<?php echo e(BaseHelper::getHomepageUrl()); ?>">
            <?php if($hasLogoLight): ?>
                <?php echo e(RvMedia::image($logoLight ?: $logo, theme_option('site_title'), attributes: ['class' => 'logo-light', ...$attributes])); ?>

                <?php echo e(RvMedia::image($logo ?: $logoLight, theme_option('site_title'), attributes: ['class' => 'logo-dark', ...$attributes])); ?>

            <?php else: ?>
                <?php echo e(RvMedia::image($defaultIsDark ? $logo : $logoLight, theme_option('site_title'), attributes: $attributes)); ?>

            <?php endif; ?>
        </a>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/header/logo.blade.php ENDPATH**/ ?>