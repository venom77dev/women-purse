<section class="tp-category-area pb-95 pt-95">
    <div class="container">
        <?php echo Theme::partial('section-title', ['shortcode' => $shortcode, 'class' => 'text-center mb-40']); ?>


        <div class="row">
            <div class="col-xl-12">
                <div class="tp-category-slider-2">
                    <div class="tp-category-slider-active-2 swiper-container mb-50">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tp-category-item-2 p-relative z-index-1 text-center swiper-slide">
                                    <div class="tp-category-thumb-2">
                                        <a href="<?php echo e($category->url); ?>">
                                            <?php echo e(RvMedia::image($category->image, $category->name, 'medium', useDefaultImage: true)); ?>

                                        </a>
                                    </div>
                                    <div class="tp-category-content-2">
                                        <span>
                                            <?php if($category->products_count === 1): ?>
                                                <?php echo e(__('1 product')); ?>

                                            <?php else: ?>
                                                <?php echo e(__(':count products', ['count' => number_format($category->products_count)])); ?>

                                            <?php endif; ?>
                                        </span>
                                        <h3 class="tp-category-title-2">
                                            <a href="<?php echo e($category->url); ?>"><?php echo e($category->name); ?></a>
                                        </h3>
                                        <div class="tp-category-btn-2">
                                            <a href="<?php echo e($category->url); ?>" class="tp-btn tp-btn-border">
                                                <?php echo e(__('Shop now')); ?>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="swiper-scrollbar tp-swiper-scrollbar tp-swiper-scrollbar-drag"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy-fashion/partials/shortcodes/ecommerce-categories/slider.blade.php ENDPATH**/ ?>