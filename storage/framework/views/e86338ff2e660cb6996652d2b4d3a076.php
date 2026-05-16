<section class="tp-product-area position-relative pb-90">
    <div class="container">
        <?php echo Theme::partial('section-title', ['shortcode' => $shortcode, 'class' => 'mb-40 text-center']); ?>


        <div class="row">
            <div class="col-xl-12">
                <div class="tp-product-tab-2 tp-tab mb-50 text-center">
                    <nav>
                        <div
                            class="nav nav-tabs justify-content-center"
                            id="productTab"
                            role="tablist"
                            data-ajax-url="<?php echo e(route('public.ajax.products', ['limit' => $shortcode->limit ?: 8])); ?>"
                        >
                            <?php $__currentLoopData = $productTabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(! in_array($key, $selectedTabs) || (! EcommerceHelper::isReviewEnabled() && $key === 'top-rated')) continue; ?>

                                <button
                                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => $loop->first]); ?>"
                                    id="<?php echo e($key); ?>-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#tab-pane"
                                    type="button"
                                    role="tab"
                                    aria-controls="tab-pane"
                                    <?php if($loop->first): ?> aria-selected="true" <?php endif; ?>
                                    data-bb-toggle="product-tab"
                                    data-bb-value="<?php echo e($key); ?>"
                                >
                                    <?php echo e($tab); ?>

                                    <span class="tp-product-tab-tooltip">0</span>
                                </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tab-content" id="productTabContent">
                    <div class="tab-pane fade show active" id="tab-pane" role="tabpanel" aria-labelledby="tab" tabindex="0"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy-fashion/partials/shortcodes/ecommerce-product-groups/tabs.blade.php ENDPATH**/ ?>