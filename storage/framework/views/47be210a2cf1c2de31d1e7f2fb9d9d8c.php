<section class="tp-banner-area mt-20">
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['container-fluid tp-gx-40' => $shortcode->full_width, 'container' => ! $shortcode->full_width]); ?>">
        <div class="row tp-gx-20">
            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $countAds = count($ads);
                ?>

                <div
                    class="
                        <?php if($countAds > 2): ?>
                            col-xl-4
                        <?php elseif($countAds > 1): ?>
                            <?php if($loop->first): ?>
                                col-xl-8 col-lg-7
                            <?php else: ?>
                                col-xl-4 col-lg-5
                            <?php endif; ?>
                        <?php else: ?>
                            col-xl-12
                        <?php endif; ?>
                    "
                >
                    <div class="tp-banner-item-2 p-relative z-index-1 grey-bg-2 mb-20 fix">
                        <div
                            class="tp-banner-thumb-2 include-bg transition-3"
                        >
                            <?php echo Theme::partial('shortcodes.ads.includes.item', ['item' => $ad]); ?>

                        </div>
                        <?php if($title = $ad->getMetaData('title', true)): ?>
                            <h3 class="tp-banner-title-2">
                                <?php if($ad->url): ?>
                                    <a href="<?php echo e($ad->click_url); ?>" <?php if($ad->open_in_new_tab): ?> target="_blank" <?php endif; ?>>
                                <?php endif; ?>
                                    <?php echo BaseHelper::clean(nl2br($title)); ?></a>
                                <?php if($ad->url): ?>
                                    </a>
                                <?php endif; ?>
                            </h3>
                        <?php endif; ?>
                        <?php if($buttonLabel = $ad->getMetaData('button_label', true)): ?>
                            <div class="tp-banner-btn-2">
                                <?php if($ad->url): ?>
                                    <a href="<?php echo e($ad->click_url); ?>" <?php if($ad->open_in_new_tab): ?> target="_blank" <?php endif; ?> class="tp-btn tp-btn-border tp-btn-border-sm">
                                <?php endif; ?>
                                    <?php echo e($buttonLabel); ?>

                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 7.49988L1 7.49988" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.9502 1.47554L16.0002 7.49954L9.9502 13.5245" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                <?php if($ad->url): ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ads/style-2.blade.php ENDPATH**/ ?>