<section
    class="tp-product-offer grey-bg-2"
    <?php if($shortcode->background_color): ?>
        style="background-color: <?php echo e($shortcode->background_color); ?>"
    <?php endif; ?>
    <?php if($shortcode->background_image): ?>
        style="background-image: url(<?php echo e(RvMedia::getImageUrl($shortcode->background_image)); ?>); background-size: cover;"
    <?php endif; ?>
>
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-xl-4 col-md-5 col-sm-6">
                <?php echo Theme::partial('section-title', ['shortcode' => $shortcode, 'title' => $shortcode->title ?: $flashSale->name]); ?>

            </div>
            <div class="col-xl-8 col-md-7 col-sm-6">
                <?php if($buttonLabel = $shortcode->button_label): ?>
                    <div class="tp-product-offer-more-wrapper d-flex justify-content-sm-end p-relative z-index-1">
                        <div class="tp-product-offer-more text-sm-end">
                            <a href="<?php echo e($shortcode->button_url ?: route('public.products')); ?>" class="tp-btn tp-btn-2 tp-btn-blue">
                                <?php echo BaseHelper::clean($buttonLabel); ?>

                                <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <span class="tp-product-offer-more-border"></span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-product-offer-slider fix">
                    <div class="tp-product-offer-slider-active swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $flashSale->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product-item'), ['class' => 'tp-product-offer-item swiper-slide mb-0', 'withCountdown' => true, 'endDate' => $flashSale->end_date], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="tp-deals-slider-dot tp-swiper-dot text-center mt-40"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ecommerce-flash-sale/style-1.blade.php ENDPATH**/ ?>