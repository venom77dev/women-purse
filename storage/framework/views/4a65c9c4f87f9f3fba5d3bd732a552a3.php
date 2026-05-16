<?php if($categories->isNotEmpty()): ?>
    <div class="bb-product-filter">
        <h4 class="bb-product-filter-title"><?php echo e(__('Categories')); ?></h4>

        <div class="bb-product-filter-content">
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.categories-list'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/plugins/ecommerce/resources/views/themes/includes/filters/categories.blade.php ENDPATH**/ ?>