<section class="tp-product-sm-area">
    <div class="container">
        <div class="row g-4">
            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-<?php echo e(12 / count($groups)); ?> col-md-6">
                    <div class="tp-product-sm-list mb-50">
                        <div class="tp-section-title-wrapper">
                            <h3 class="section-title tp-section-title tp-section-title-sm">
                                <?php echo e($group['title']); ?>

                                <?php echo Theme::partial('section-title-shape'); ?>

                            </h3>
                        </div>

                        <div class="tp-product-sm-wrapper">
                            <?php $__currentLoopData = $group['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.style-1.small'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ecommerce-product-groups/columns.blade.php ENDPATH**/ ?>