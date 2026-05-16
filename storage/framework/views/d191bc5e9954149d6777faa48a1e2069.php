<?php if(request()->ajax() && isset($products)): ?>
    <?php if($products->isNotEmpty()): ?>
        <section class="tp-cross-sale-product">
            <div class="container">
                <div class="tp-section-title-wrapper-6 text-center mb-40">
                    <h3 class="section-title tp-section-title-6"><?php echo e(__('Bought Together')); ?></h3>
                </div>

                <div class="row">
                    <div class="tp-product-cross-sale-slider">
                        <div class="tp-product-cross-sale-slider-active swiper-container mb-10">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <div class="tp-product-item-3 mb-50">
                                            <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                                                <a href="<?php echo e($product->url); ?>">
                                                    <?php echo e(RvMedia::image($product->image, $product->name, 'medium', true)); ?>

                                                </a>

                                                <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.badges'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                            <div class="tp-product-content-3">
                                                <h3 class="tp-product-title-3 text-truncate">
                                                    <a href="<?php echo e($product->url); ?>" title="<?php echo e($product->name); ?>">
                                                        <?php echo BaseHelper::clean($product->name); ?>

                                                    </a>
                                                </h3>

                                                <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product.style-1.price'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                <?php if(EcommerceHelper::isCartEnabled()): ?>
                                                    <button
                                                        type="button"
                                                        <?php if($hasVariations = $product->hasVariations): ?>
                                                            data-bb-toggle="quick-shop"
                                                        data-url="<?php echo e(route('public.ajax.quick-shop', ['slug' => $product->slug, 'reference_product' => $parentProduct->slug])); ?>"
                                                        <?php else: ?>
                                                            data-bb-toggle="add-to-cart"
                                                        data-url="<?php echo e(route('public.cart.add-to-cart')); ?>"
                                                        data-id="<?php echo e($product->id); ?>"
                                                        <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product); ?>

                                                        <?php endif; ?>
                                                        class="tp-product-cross-sale-btn"
                                                    >
                                                        <?php if($hasVariations): ?>
                                                            <?php echo e(__('Select Options')); ?>

                                                        <?php else: ?>
                                                            <?php echo e(__('Buy now at :price', ['price' => $product->price()->displayAsText()])); ?>

                                                        <?php endif; ?>
                                                    </button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tp-cross-sale-swiper-scrollbar tp-swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php else: ?>
    <div data-bb-toggle="block-lazy-loading" data-url="<?php echo e(route('public.ajax.cross-sale-products', $product)); ?>" class="position-relative" style="min-height: 14rem">
        <div class="loading-spinner"></div>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/cross-sale-products.blade.php ENDPATH**/ ?>