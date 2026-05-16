<?php
    $categoriesRequest ??= [];
    $categoryId ??= 0;
    $urlCurrent ??= url()->current();

    if (!isset($groupedCategories)) {
        $groupedCategories = $categories->groupBy('parent_id');
    }

    $currentCategories = $groupedCategories->get($parentId ?? 0);
?>

<?php if($currentCategories): ?>
    <ul
        class="bb-product-filter-items"
        <?php if(
            in_array($categoryId, $categoriesRequest)
            || isset($category) && $categoryId == $category->id
        ): ?>
            style="display: block !important;"
        <?php endif; ?>
    >
        <?php $__currentLoopData = $currentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(! empty($categoriesRequest) && $loop->first && ! $category->parent_id): ?>
                <li class="bb-product-filter-item">
                    <a href="<?php echo e(route('public.products')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['bb-product-filter-link', 'active' => empty($categoriesRequest)]); ?>">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-left'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                        <?php echo e(__('All categories')); ?>

                    </a>
                </li>
            <?php endif; ?>

            <li class="bb-product-filter-item">
                <a
                    href="<?php echo e(route('public.single', $category->url)); ?>"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['bb-product-filter-link', 'active' => $categoryId == $category->id || $urlCurrent == route('public.single', $category->url)]); ?>"
                    data-id="<?php echo e($category->id); ?>"
                >
                    <?php if(!$category->parent_id): ?>
                        <?php if($category->icon_image): ?>
                            <?php echo e(RvMedia::image($category->icon_image, $category->name)); ?>

                        <?php elseif($category->icon): ?>
                            <?php echo BaseHelper::renderIcon($category->icon); ?>

                        <?php endif; ?>
                        <?php echo e($category->name); ?>

                    <?php else: ?>
                        <?php echo e($category->name); ?>

                    <?php endif; ?>
                </a>

                <?php
                    $hasChildren = $groupedCategories->has($category->id);
                ?>

                <?php if($hasChildren): ?>
                    <button data-bb-toggle="toggle-product-categories-tree">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-down'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    </button>

                    <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.categories-list'), [
                        'groupedCategories' => $groupedCategories,
                        'parentId' => $category->id,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/plugins/ecommerce/resources/views/themes/includes/filters/categories-list.blade.php ENDPATH**/ ?>