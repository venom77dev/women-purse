<?php
    $style = in_array($shortcode->style, [1, 2, 3, 4]) ? $shortcode->style : 1;
?>

<?php echo Theme::partial("shortcodes.ads.style-$style", compact('shortcode', 'ads')); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ads/index.blade.php ENDPATH**/ ?>