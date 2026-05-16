<section class="tp-banner-area pt-30 pb-30" <?php if(BaseHelper::isRtlEnabled()): ?> dir="ltr" <?php endif; ?>>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php ($countAds = count($ads)); ?>
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
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-banner-item tp-banner-height p-relative mb-30 z-index-1 fix', 'tp-banner-item-sm' => $countAds > 2]); ?>">
                        <div class="tp-banner-thumb include-bg transition-3" >
                            <?php echo Theme::partial('shortcodes.ads.includes.item', ['item' => $ad]); ?>

                        </div>

                        <div class="tp-banner-content">
                            <?php if($subtitle = $ad->getMetaData('subtitle', true)): ?>
                                <span><?php echo BaseHelper::clean(nl2br($subtitle)); ?></span>
                            <?php endif; ?>
                            <?php if($title = $ad->getMetaData('title', true)): ?>
                                <h3 class="tp-banner-title">
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
                                <div class="tp-banner-btn">
                                    <?php if($ad->url): ?>
                                        <a href="<?php echo e($ad->click_url); ?>" <?php if($ad->open_in_new_tab): ?> target="_blank" <?php endif; ?> class="tp-link-btn">
                                    <?php endif; ?>
                                        <?php echo e($buttonLabel); ?>

                                        <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    <?php if($ad->url): ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ads/style-1.blade.php ENDPATH**/ ?>