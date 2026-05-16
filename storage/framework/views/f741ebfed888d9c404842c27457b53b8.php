<div class="number-items-available">
    <?php if($product->isOutOfStock()): ?>
        <span class="text-danger"><?php echo e(__('Out of stock')); ?></span>
    <?php else: ?>
        <?php if(! $productVariation): ?>
            <span class="text-danger"><?php echo e(__('Not available')); ?>

        <?php else: ?>
            <?php if($productVariation->isOutOfStock()): ?>
                <span class="text-danger"><?php echo e(__('Out of stock')); ?></span>
            <?php elseif(! $productVariation->with_storehouse_management || $productVariation->quantity < 1): ?>
                <span class="text-success"><?php echo e(__('Available')); ?></span>
            <?php elseif($productVariation->quantity): ?>
                <span class="text-success">
                    <?php if(EcommerceHelper::showNumberOfProductsInProductSingle()): ?>
                        <?php if($productVariation->quantity !== 1): ?>
                            <?php echo e(__(':number products available', ['number' => $productVariation->quantity])); ?>

                        <?php else: ?>
                            <?php echo e(__(':number product available', ['number' => $productVariation->quantity])); ?>

                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo e(__('In stock')); ?>

                    <?php endif; ?>
                </span>
           <?php endif; ?>
       <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/product-availability.blade.php ENDPATH**/ ?>