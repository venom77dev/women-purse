<section class="tp-category-area">
    <div class="container">
        <?php echo Theme::partial('section-title', compact('shortcode')); ?>

        <div class="row">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6">
                    <div
                        class="tp-category-main-box mb-25 p-relative fix"
                        <?php if($shortcode->background_color): ?>
                            style="background-color: <?php echo e($shortcode->background_color); ?>"
                        <?php endif; ?>
                    >
                        <a href="<?php echo e($category->url); ?>" title="<?php echo e($category->name); ?>">
                            <div
                                class="tp-category-main-thumb include-bg transition-3"
                                <?php if($category->image): ?>
                                    style="background: url('<?php echo e(RvMedia::getImageUrl($category->image)); ?>')"
                                <?php endif; ?>
                            ></div>
                        </a>
                        <div class="tp-category-main-content">
                            <h3 class="tp-category-main-title">
                                <a href="<?php echo e($category->url); ?>"><?php echo e($category->name); ?></a>
                            </h3>
                            <span class="tp-category-main-item">
                                        <?php if($category->products_count === 1): ?>
                                    <?php echo e(__('1 product')); ?>

                                <?php else: ?>
                                    <?php echo e(__(':count products', ['count' => number_format($category->products_count)])); ?>

                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy-fashion/partials/shortcodes/ecommerce-categories/grid.blade.php ENDPATH**/ ?>