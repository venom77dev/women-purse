<?php
    $dataForFilter = EcommerceHelper::dataForFilter($category ?? null);
    [$categories, $brands, $tags, $rand, $categoriesRequest, $urlCurrent, $categoryId, $maxFilterPrice] = $dataForFilter;
?>

<div class="bb-shop-sidebar">
    <form action="<?php echo e(URL::current()); ?>" data-action="route('public.products')" method="GET" class="bb-product-form-filter">
        <input type="hidden" name="sort-by" value="<?php echo e(BaseHelper::stringify(request()->query('sort-by'))); ?>">
        <input type="hidden" name="per-page" value="<?php echo e(BaseHelper::stringify(request()->query('per-page'))); ?>">
        <input type="hidden" name="layout" value="<?php echo e(BaseHelper::stringify(request()->query('layout'))); ?>">
        <input type="hidden" name="page" value="<?php echo e(BaseHelper::stringify(request()->query('page'))); ?>">

        <?php echo apply_filters('theme_ecommerce_products_filter_before', null, $dataForFilter); ?>


        <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.price'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.categories'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(EcommerceHelper::isEnabledFilterProductsByBrands()): ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.brands'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <?php if(EcommerceHelper::isEnabledFilterProductsByTags()): ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.tags'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <?php if(EcommerceHelper::isEnabledFilterProductsByAttributes()): ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.attributes'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <?php echo apply_filters('theme_ecommerce_products_filter_after', null, $dataForFilter); ?>

    </form>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/plugins/ecommerce/resources/views/themes/includes/filters.blade.php ENDPATH**/ ?>