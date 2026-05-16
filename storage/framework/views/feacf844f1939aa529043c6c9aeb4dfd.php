<div class="tp-product-banner-area pt-30 pb-30">
    <div class="container">
        <div class="tp-product-banner-slider fix">
            <div class="tp-product-banner-slider-active swiper-container">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $title = $ad->getMetaData('title', true);
                            $subtitle = $ad->getMetaData('subtitle', true);
                            $buttonLabel = $ad->getMetaData('button_label', true)
                        ?>
                        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-product-banner-inner theme-bg p-relative z-index-1 fix swiper-slide', 'has-content' => $title || $subtitle]); ?>">
                            <?php if($title || $subtitle): ?>
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-banner-content p-relative z-index-1">
                                            <?php if($subtitle): ?>
                                                <span class="tp-product-banner-subtitle"><?php echo BaseHelper::clean(nl2br($subtitle)); ?></a></span>
                                            <?php endif; ?>
                                            <?php if($title): ?>
                                                <h3 class="tp-product-banner-title"><?php echo BaseHelper::clean(nl2br($title)); ?></a></h3>
                                            <?php endif; ?>
                                            <?php if($buttonLabel && $ad->url): ?>
                                                <div class="tp-product-banner-btn">
                                                    <a href="<?php echo e($ad->click_url); ?>" <?php if($ad->open_in_new_tab): ?> target="_blank" <?php endif; ?> class="tp-btn tp-btn-2">
                                                        <?php echo e($buttonLabel); ?>

                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-banner-thumb-wrapper p-relative">
                                            <div class="tp-product-banner-thumb-shape">
                                                <div class="tp-product-banner-thumb text-end p-relative z-index-1">
                                                    <?php echo Theme::partial('shortcodes.ads.includes.item', ['item' => $ad]); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <a href="<?php echo e($ad->click_url); ?>" <?php if($ad->open_in_new_tab): ?> target="_blank" <?php endif; ?>>
                                    <?php echo Theme::partial('shortcodes.ads.includes.item', ['item' => $ad]); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="tp-product-banner-slider-dot tp-swiper-dot"></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ads/style-4.blade.php ENDPATH**/ ?>