<div class="tp-instagram-area pb-70">
    <div class="container">
        <?php echo Theme::partial('section-title', ['shortcode' => $shortcode, 'class' => 'text-center mb-40']); ?>


        <div class="tp-gallery-slider swiper-container">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                            <?php echo e(RvMedia::image($gallery->image, $gallery->name, 'medium')); ?>

                            <div class="tp-instagram-icon">
                                <a href="<?php echo e($gallery->url); ?>">
                                    <?php echo e($gallery->name); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/galleries/style-1.blade.php ENDPATH**/ ?>