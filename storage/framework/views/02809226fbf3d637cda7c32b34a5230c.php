<div class="tp-product-badge">
    <?php if($product->isOutOfStock()): ?>
        <span class="product-out-stock"><?php echo e(__('Out Of Stock')); ?></span>
    <?php else: ?>
        <?php if($product->productLabels->isNotEmpty()): ?>
            <?php $__currentLoopData = $product->productLabels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span style="<?php echo \Illuminate\Support\Arr::toCssStyles(["background-color: $label->color !important" => $label->color]) ?>"><?php echo e($label->name); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <?php if($product->front_sale_price !== $product->price): ?>
                <span class="product-sale"><?php echo e(get_sale_percentage($product->price, $product->front_sale_price)); ?></span>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/product/badges.blade.php ENDPATH**/ ?>