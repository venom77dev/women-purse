<section class="tp-feature-area tp-feature-border-2 pt-30 pb-30">
    <div class="container">
        <div class="tp-feature-inner-2">
            <div class="row align-items-center">
                <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-feature-item-2 d-flex align-items-start">
                            <?php if(($icon = $tab['icon']) && BaseHelper::hasIcon($icon)): ?>
                                <div class="tp-feature-icon-2 mr-10">
                                    <span <?php if($shortcode->icon_color): ?> style="color: <?php echo e($shortcode->icon_color); ?>" <?php endif; ?>>
                                       <?php echo BaseHelper::renderIcon($icon); ?>

                                    </span>
                                </div>
                            <?php endif; ?>
                            <div class="tp-feature-content-2">
                                <h3 class="tp-feature-title-2"><?php echo BaseHelper::clean($tab['title']); ?></h3>
                                <p><?php echo BaseHelper::clean($tab['description']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/site-features/style-2.blade.php ENDPATH**/ ?>