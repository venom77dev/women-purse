<?php
    Theme::asset()->container('footer')->usePath()->add('range-slider', 'js/range-slider.js');
    $listingLayout = products_listing_layout();
?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['row', 'flex-row-reverse' => $listingLayout === 'right-sidebar']); ?>">
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['col-xl-3 col-lg-4' => $listingLayout !== 'no-sidebar', 'col-12' => $listingLayout === 'no-sidebar']); ?>">
        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.filters-sidebar'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php if($listingLayout !== 'no-sidebar'): ?>
        <div class="col-xl-9 col-lg-8">
            <?php endif; ?>
            <div class="tp-shop-main-wrapper">
                <?php if(! empty($pageName)): ?>
                    <div class="ps-block__header">
                        <h1 class="h1"><?php echo e($pageName); ?></h1>
                    </div>

                    <?php if(! empty($pageDescription)): ?>
                        <div class="ps-block__content">
                            <?php echo BaseHelper::clean($pageDescription); ?>

                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-filters-top'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="bb-product-items-wrapper tp-shop-item-primary">
                    <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product-items'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <?php if($listingLayout !== 'no-sidebar'): ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/products-listing.blade.php ENDPATH**/ ?>