<?php
    Theme::set('pageTitle', $category->name);
?>

<section class="tp-shop-area">
    <div class="container position-relative">
        <?php echo dynamic_sidebar('products_by_category_top_sidebar'); ?>


        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.products-listing'), ['pageName' => $category->name, 'pageDescription' => $category->description], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo dynamic_sidebar('products_by_category_bottom_sidebar'); ?>

    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/product-category.blade.php ENDPATH**/ ?>