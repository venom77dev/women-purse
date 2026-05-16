<?php
    Theme::layout('full-width');
?>

<section class="tp-shop-area">
    <div class="container position-relative pt-50 pb-50">
        <?php echo dynamic_sidebar('products_listing_top_sidebar'); ?>


        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.products-listing'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo dynamic_sidebar('products_listing_bottom_sidebar'); ?>

    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/products.blade.php ENDPATH**/ ?>