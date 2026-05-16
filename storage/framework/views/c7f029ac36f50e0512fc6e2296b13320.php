<?php
    $style = in_array($shortcode->style, [1, 2]) ? $shortcode->style : 1;
?>

<?php echo Theme::partial("shortcodes.galleries.style-$style", compact('galleries', 'shortcode')); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/galleries/index.blade.php ENDPATH**/ ?>