<?php if(EcommerceHelper::isReviewEnabled()): ?>
    <div class="tp-product-rating d-flex align-items-center">
        <div class="tp-product-rating-icon tp-product-rating-icon-2">
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.rating-star'), ['avg' => $product->reviews_avg], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="tp-product-rating-text">
            <a href="<?php echo e($product->url); ?>#product-review" data-bb-toggle="scroll-to-review">
                <span class="d-none d-sm-block"><?php echo e(__('(:count reviews)', ['count' => number_format($product->reviews_count)])); ?></span>
                <span class="d-block d-sm-none"><?php echo e(__('(:count)', ['count' => number_format($product->reviews_count)])); ?></span>
            </a>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/product/style-2/rating.blade.php ENDPATH**/ ?>