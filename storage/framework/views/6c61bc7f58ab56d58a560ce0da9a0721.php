<?php
    $style = theme_option('ecommerce_product_item_style', 1);
    $style = in_array($style, [1, 2, 3, 4, 5]) ? $style : 1;

    $layout ??= 'grid';
?>

<?php echo $__env->make(Theme::getThemeNamespace("views.ecommerce.includes.product.style-$style.$layout"), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/product-item.blade.php ENDPATH**/ ?>