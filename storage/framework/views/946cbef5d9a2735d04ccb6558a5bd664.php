<?php
    $style = in_array($shortcode->style, [1, 2, 3, 4]) ? $shortcode->style : 1;
?>

<?php echo Theme::partial("shortcodes.site-features.style-$style", compact('shortcode', 'tabs')); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/site-features/index.blade.php ENDPATH**/ ?>