<?php
    SeoHelper::setTitle(__('Page not found') . ' - ' . theme_option('site_title'));
    Theme::fireEventGlobalAssets();
?>



<?php $__env->startSection('content'); ?>
    <section class="tp-error-area pt-110 pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="text-center tp-error-content">
                        <div class="tp-error-thumb">
                            <img src="<?php echo e(theme_option('404_page_image') ? RvMedia::getImageUrl(theme_option('404_page_image')) : Theme::asset()->url('images/404.png')); ?>" alt="<?php echo e(theme_option('site_title')); ?>">
                        </div>

                        <h3 class="tp-error-title"><?php echo e(__('Oops! Page not found')); ?></h3>
                        <p><?php echo e(__("Whoops, this is embarrassing. Looks like the page you were looking for wasn't found.")); ?></p>

                        <a href="<?php echo e(BaseHelper::getHomepageUrl()); ?>" class="tp-error-btn"><?php echo e(__('Back to Home')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Theme::getThemeNamespace('layouts.base'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/404.blade.php ENDPATH**/ ?>