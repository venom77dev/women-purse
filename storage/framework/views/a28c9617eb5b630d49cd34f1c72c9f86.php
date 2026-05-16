<?php
    $style = in_array($shortcode->style, ['grid', 'slider', 'simple', 'slider-full-width']) ? $shortcode->style : 'grid';
?>

<?php echo Theme::partial("shortcodes.ecommerce-products.$style", compact('shortcode', 'products', 'ads', 'categoryIds')); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ecommerce-products/index.blade.php ENDPATH**/ ?>