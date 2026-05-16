<section class="tp-trending-area pt-140 pb-150">
    <div class="container">
        <?php if($shortcode->with_sidebar && $ads): ?>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <?php endif; ?>
                    <div class="tp-trending-wrapper">
                        <?php echo Theme::partial('section-title', ['shortcode' => $shortcode, 'class' => 'mb-50']); ?>


                        <div class="tp-trending-slider">
                            <div
                                class="tp-trending-slider-active swiper-container"
                                data-items-per-view="<?php echo e($shortcode->with_sidebar ? 2 : 4); ?>"
                            >
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tp-trending-item swiper-slide">
                                            <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product-item'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="tp-trending-slider-dot tp-swiper-dot text-center mt-45"></div>
                        </div>
                    </div>
                    <?php if($shortcode->with_sidebar && $ads): ?>
                </div>

                <div class="col-xl-4 col-lg-5 col-md-8 col-sm-10">
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $title = $ad->getMetaData('title', true);
                            $buttonLabel = $shortcode->action_label ?: $ad->getMetaData('button_label', true);
                            $buttonUrl = $shortcode->action_url ?: $ad->click_url;
                        ?>

                        <div class="tp-trending-banner p-relative ml-35">
                            <div class="tp-trending-banner-thumb w-img include-bg">
                                <?php echo Theme::partial('shortcodes.ads.includes.item', ['item' => $ad]); ?>

                            </div>
                            <div class="tp-trending-banner-content">
                                <?php if($title): ?>
                                    <h3 class="tp-trending-banner-title">
                                        <?php if($ad->url): ?>
                                            <a href="<?php echo e($ad->click_url); ?>" <?php if($ad->open_in_new_tab): ?> target="_blank" <?php endif; ?>>
                                                <?php echo BaseHelper::clean($title); ?>

                                            </a>
                                        <?php else: ?>
                                            <?php echo BaseHelper::clean(nl2br($title)); ?>

                                        <?php endif; ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if($buttonLabel): ?>
                                    <div class="tp-trending-banner-btn">
                                        <a href="<?php echo e($buttonUrl); ?>" class="tp-btn tp-btn-border tp-btn-border-white tp-btn-border-white-sm">
                                            <?php echo BaseHelper::clean($buttonLabel); ?>

                                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy-fashion/partials/shortcodes/ecommerce-products/slider.blade.php ENDPATH**/ ?>