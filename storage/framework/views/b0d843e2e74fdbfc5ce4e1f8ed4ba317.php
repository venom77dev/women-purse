<?php
    $style = in_array($shortcode->style, range(1, 2)) ? $shortcode->style : 1;
?>

<?php echo Theme::partial("shortcodes.ecommerce-flash-sale.style-$style", compact('shortcode', 'flashSale')); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ecommerce-flash-sale/index.blade.php ENDPATH**/ ?>