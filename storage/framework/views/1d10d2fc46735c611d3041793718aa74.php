<div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
    <div class="tp-footer-widget footer-col-1 mb-50">
        <div class="tp-footer-widget-content">
            <div class="tp-footer-logo">
                <a href="<?php echo e(BaseHelper::getHomepageUrl()); ?>">
                    <?php echo e(RvMedia::image($config['logo'] ?: theme_option('logo'), theme_option('site_title'), attributes: $attributes)); ?>

                </a>
            </div>
            <p class="tp-footer-desc"><?php echo e($config['about']); ?></p>
            <?php if($config['show_social_links'] && $socialLinks = Theme::getSocialLinks()): ?>
                <div class="tp-footer-social">
                    <?php $__currentLoopData = $socialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(! $socialLink->getUrl() || ! $socialLink->getIconHtml()) continue; ?>

                        <a <?php echo $socialLink->getAttributes(); ?>><?php echo e($socialLink->getIconHtml()); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/////widgets/site-info/templates/frontend.blade.php ENDPATH**/ ?>