<?php
    $style = in_array($shortcode->style, ['grid', 'slider']) ? $shortcode->style : 'grid';
?>

<?php echo Theme::partial("shortcodes.ecommerce-categories.$style", compact('shortcode', 'categories')); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy-fashion/partials/shortcodes/ecommerce-categories/index.blade.php ENDPATH**/ ?>