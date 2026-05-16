<?php
    $isDisplayPriceOriginal ??= true;
    $priceWrapperClassName ??= null;
    $priceClassName ??= null;
    $priceOriginalClassName ??= null;
    $priceOriginalWrapperClassName ??= null;
?>

<div class="<?php echo e($priceWrapperClassName === null ? 'bb-product-price mb-3' : $priceWrapperClassName); ?>">
    <span
        class="<?php echo e($priceClassName === null ? 'bb-product-price-text fw-bold' : $priceClassName); ?>"
        data-bb-value="product-price"
    ><?php echo e($product->price()->displayAsText()); ?></span>

    <?php if($isDisplayPriceOriginal && $product->isOnSale()): ?>
        <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-prices.original'), [
            'priceWrapperClassName' => $priceOriginalWrapperClassName,
            'priceClassName' => $priceOriginalClassName,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/plugins/ecommerce/resources/views/themes/includes/product-price.blade.php ENDPATH**/ ?>