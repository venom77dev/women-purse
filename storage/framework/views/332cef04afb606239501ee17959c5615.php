<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['bb-filter-offcanvas-area', 'd-lg-none' => products_listing_layout() === 'no-sidebar']); ?>">
    <div class="bb-filter-offcanvas-wrapper">
        <div class="bb-filter-offcanvas-close">
            <button type="button" class="bb-filter-offcanvas-close-btn" data-bb-toggle="toggle-filter-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
                <?php echo e(__('Close')); ?>

            </button>
        </div>
        <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/filters-sidebar.blade.php ENDPATH**/ ?>