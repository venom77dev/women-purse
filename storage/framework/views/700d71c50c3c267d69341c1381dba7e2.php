<?php if(request()->ajax() && isset($products)): ?>
    <?php if($products->isNotEmpty()): ?>
        <section class="tp-related-product">
            <div class="container">
                <div class="tp-section-title-wrapper-6 text-center mb-40">
                    <h3 class="section-title tp-section-title-6"><?php echo e(__('Related Products')); ?></h3>
                </div>

                <div class="row">
                    <div class="tp-product-related-slider">
                        <div class="tp-product-related-slider-active swiper-container mb-10">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product-item'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tp-related-swiper-scrollbar tp-swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php else: ?>
    <div data-bb-toggle="block-lazy-loading" data-url="<?php echo e(route('public.ajax.related-products', $product)); ?>" class="position-relative" style="min-height: 14rem">
        <div class="loading-spinner"></div>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/related-products.blade.php ENDPATH**/ ?>