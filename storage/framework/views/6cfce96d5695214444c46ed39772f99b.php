<?php
    Theme::set('breadcrumbStyle', 'without-title');
    Theme::layout('full-width');
    Theme::asset()->container('footer')->usePath()->add('waypoints', 'plugins/waypoints/jquery.waypoints.min.js');

    $flashSale = $product->latestFlashSales()->first();

    Theme::set('pageTitle', $product->name);
?>

<section class="tp-product-details-area">
    <div class="tp-product-details-top bb-product-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-product-details-thumb-wrapper me-0 me-md-3 tp-tab">
                        <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tp-product-details-wrapper has-sticky">
                        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product-detail'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product-sharing'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php echo dynamic_sidebar('product_details_sidebar'); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if(EcommerceHelper::isEnabledCrossSaleProducts()): ?>
        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.cross-sale-products'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <div class="tp-product-details-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-product-details-tab-nav tp-tab">
                        <nav>
                            <div class="nav nav-tabs justify-content-center p-relative tp-product-tab" id="navPresentationTab" role="tablist">
                                <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">
                                    <?php echo e(__('Description')); ?>

                                </button>
                                <?php if(EcommerceHelper::isReviewEnabled()): ?>
                                    <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">
                                        <?php echo e(__('Reviews (:count)', ['count' => $product->reviews_count])); ?>

                                    </button>
                                <?php endif; ?>

                                <?php if(is_plugin_active('marketplace') && $product->store_id): ?>
                                    <button class="nav-link" id="nav-vendor-tab" data-bs-toggle="tab" data-bs-target="#nav-vendor" type="button" role="tab" aria-controls="nav-store" aria-selected="false">
                                        <?php echo e(__('Vendor')); ?>

                                    </button>
                                <?php endif; ?>
                                <?php if(is_plugin_active('faq') && $product->faq_items): ?>
                                    <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab" data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq" aria-selected="false">
                                        <?php echo e(__('FAQs')); ?>

                                    </button>
                                <?php endif; ?>
                                <span id="productTabMarker" class="tp-product-details-tab-line"></span>
                            </div>
                        </nav>
                        <div class="tab-content" id="navPresentationTabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                                <div class="tp-product-details-desc-wrapper">
                                    <div class="ck-content">
                                        <?php echo BaseHelper::clean($product->content); ?>

                                    </div>

                                    <?php echo apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $product); ?>

                                </div>
                            </div>
                            <?php if(EcommerceHelper::isReviewEnabled()): ?>
                                <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                                    <div class="tp-product-details-review-wrapper pt-60" id="product-review">
                                        <?php echo $__env->make(EcommerceHelper::viewPath('includes.reviews'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(is_plugin_active('marketplace') && $product->store_id): ?>
                                <div class="tab-pane fade" id="nav-vendor" role="tabpanel" aria-labelledby="nav-vendor-tab" tabindex="0">
                                    <div class="pt-60">
                                        <?php echo $__env->make(Theme::getThemeNamespace('views.marketplace.includes.vendor-info'), [
                                            'store' => $product->store,
                                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if(is_plugin_active('faq') && $product->faq_items): ?>
                                <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab" tabindex="0">
                                    <div class="pt-60">
                                        <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-faqs'), ['faqs' => $product->faq_items], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-product-details-sticky-actions">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-none d-lg-flex align-items-center gap-3">
                    <div class="sticky-actions-img">
                        <?php echo e(RvMedia::image($product->image, $product->name)); ?>

                    </div>
                    <div class="sticky-actions-content">
                        <h4 class="fs-6 mb-1"><?php echo e($product->name); ?></h4>
                        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.style-1.price'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <?php
                    $isOutOfStock = $product->isOutOfStock();
                ?>
                <div class="sticky-actions-button d-flex align-items-center gap-2">
                    <button
                        type="submit"
                        name="add-to-cart"
                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-product-details-add-to-cart-btn', 'btn-disabled' => $isOutOfStock]); ?>"
                        <?php if($isOutOfStock): echo 'disabled'; endif; ?>
                        <?php echo EcommerceHelper::jsAttributes('add-to-cart-in-form', $product); ?>

                    >
                        <?php echo e(__('Add To Cart')); ?>

                    </button>
                    <?php if(EcommerceHelper::isQuickBuyButtonEnabled()): ?>
                        <button
                            type="submit"
                            name="checkout"
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-product-details-buy-now-btn', 'btn-disabled' => $isOutOfStock]); ?>"
                            <?php if($isOutOfStock): echo 'disabled'; endif; ?>
                        ><?php echo e(__('Buy Now')); ?></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(EcommerceHelper::isEnabledRelatedProducts()): ?>
    <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.related-products'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/product.blade.php ENDPATH**/ ?>