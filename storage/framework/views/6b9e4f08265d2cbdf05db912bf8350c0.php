<?php
    Theme::set('hasSlider', true);
?>

<section class="tp-slider-area p-relative z-index-1">
    <div class="tp-slider-active-3 swiper-container"
         data-loop="<?php echo e($shortcode->is_loop == 'yes'); ?>"
         data-autoplay="<?php echo e($shortcode->is_autoplay == 'yes'); ?>"
         data-autoplay-speed="<?php echo e(in_array($shortcode->autoplay_speed, [2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000]) ? $shortcode->autoplay_speed : 5000); ?>"
    >
        <div class="swiper-wrapper">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $title = $slider->title;
                    $description = $slider->description;

                    $tabletImage = $slider->getMetaData('tablet_image', true) ?: $slider->image;
                    $mobileImage = $slider->getMetaData('mobile_image', true) ?: $tabletImage;
                ?>

                <div class="tp-slider-item-3 tp-slider-height-3 p-relative swiper-slide grey-bg d-flex align-items-center">
                    <div
                        class="tp-slider-thumb-3 include-bg"
                        <?php if($slider->image): ?>
                            data-background="<?php echo e(RvMedia::getImageUrl($slider->image, $title)); ?>"
                        <?php endif; ?>
                        <?php if($tabletImage): ?> data-tablet-background="<?php echo e(RvMedia::getImageUrl($tabletImage)); ?>" <?php endif; ?>
                        <?php if($mobileImage): ?> data-mobile-background="<?php echo e(RvMedia::getImageUrl($mobileImage)); ?>" <?php endif; ?>
                    ></div>
                    <?php if($title || $description): ?>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-8">
                                    <div class="tp-slider-content-3">
                                        <?php if($description): ?>
                                            <span <?php if($fontFamily = $shortcode->font_family_of_description): ?> style="--tp-ff-oregano: '<?php echo e($fontFamily); ?>'" <?php endif; ?>>
                                                <?php echo BaseHelper::clean($description); ?>

                                            </span>
                                        <?php endif; ?>
                                        <?php if($title): ?>
                                            <h3 class="tp-slider-title-3"><?php echo BaseHelper::clean($title); ?></h3>
                                        <?php endif; ?>
                                        <?php if($buttonLabel = $slider->getMetaData('button_label', true)): ?>
                                            <div class="tp-slider-btn-3">
                                                <a href="<?php echo e($slider->link); ?>" class="tp-btn tp-btn-border tp-btn-border-white">
                                                    <?php echo BaseHelper::clean($buttonLabel); ?>

                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="tp-swiper-dot tp-slider-3-dot d-sm-none"></div>
        <div class="tp-slider-arrow-3 d-none d-sm-block">
            <button type="button" class="tp-slider-3-button-prev">
                <svg width="22" height="42" viewBox="0 0 22 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 0.999999L1 21L21 41" stroke="currentColor" stroke-opacity="0.3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button type="button" class="tp-slider-3-button-next">
                <svg width="22" height="42" viewBox="0 0 22 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 0.999999L21 21L1 41" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/simple-slider/style-3.blade.php ENDPATH**/ ?>