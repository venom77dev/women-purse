<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-product-item-2 mb-40', $class ?? null]); ?>">
    <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
        <a href="<?php echo e($product->url); ?>">
            <?php echo e(RvMedia::image($product->image, $product->name, $style === 2 ? 'thumb' : 'medium', true)); ?>

        </a>

        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.badges'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.style-2.actions'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="tp-product-content-2 pt-15">
        <?php echo apply_filters('ecommerce_before_product_item_content_renderer', null, $product); ?>


        <?php if(is_plugin_active('marketplace') && $product->store->getKey()): ?>
            <div class="tp-product-tag-2">
                <a href="<?php echo e($product->store->url); ?>"><?php echo e($product->store->name); ?></a>
            </div>
        <?php endif; ?>

        <h3 class="tp-product-title-2 text-truncate">
            <a href="<?php echo e($product->url); ?>" title="<?php echo $name = BaseHelper::clean($product->name); ?>"><?php echo $name; ?></a>
        </h3>

        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.style-2.rating'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.style-2.price'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo apply_filters('ecommerce_after_product_item_content_renderer', null, $product); ?>

    </div>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/product/style-2/grid.blade.php ENDPATH**/ ?>