<?php if($product instanceof \Botble\Ecommerce\Models\Product && $product->exists): ?>
    <div class="tp-product-sm-item d-flex align-items-center">
        <div class="tp-product-thumb mr-25 fix">
            <a href="<?php echo e($product->url); ?>">
                <?php echo e(RvMedia::image($product->image, $product->name, 'thumb')); ?>

            </a>
        </div>
        <div class="tp-product-sm-content">
            <?php if(is_plugin_active('marketplace') && $product->store->getKey()): ?>
                <div class="tp-product-category">
                    <a href="<?php echo e($product->store->url); ?>"><?php echo e($product->store->name); ?></a>
                </div>
            <?php endif; ?>

            <h3 class="tp-product-title">
                <a href="<?php echo e($product->url); ?>"><?php echo e($product->name); ?></a>
            </h3>

            <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.style-1.rating'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.style-1.price'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/product/style-1/small.blade.php ENDPATH**/ ?>