<?php if(! isset($shortcode)): ?>
    <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.filters.results'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($products->isNotEmpty()): ?>
    <?php
        $products->loadMissing(['brand']);
    ?>

    <?php if($layout ?? get_product_layout() === 'grid'): ?>
        <?php
            $itemsPerRow ??= get_products_per_row_by_layout();
            $itemsPerRowOnMobile = theme_option('ecommerce_products_per_row_mobile', 2);
        ?>

        <div class="row row-cols-xxl-<?php echo e($itemsPerRow); ?> row-cols-md-<?php echo e($itemsPerRow - 1); ?> row-cols-sm-<?php echo e($itemsPerRowOnMobile); ?> row-cols-<?php echo e($itemsPerRowOnMobile); ?> mb-30">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product-item'), ['layout' => 'grid'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <div class="row mb-30">
            <div class="col-xl-12">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product-item'), ['layout' => 'list'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
<?php else: ?>
    <div class="alert alert-warning rounded-0">
        <div class="d-flex align-items-center gap-2">
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-info-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Botble\Icon\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
            <?php echo e(__('No products were found matching your selection.')); ?>

        </div>
    </div>
<?php endif; ?>

<?php if($products instanceof \Illuminate\Pagination\LengthAwarePaginator && $products->hasPages()): ?>
    <?php echo e($products->withQueryString()->links(Theme::getThemeNamespace('partials.pagination'))); ?>

<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/includes/product-items.blade.php ENDPATH**/ ?>