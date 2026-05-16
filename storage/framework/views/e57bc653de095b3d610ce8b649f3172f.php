<?php
    $groupedCategories = ProductCategoryHelper::getProductCategoriesWithUrl()->groupBy('parent_id');

    $currentCategories = $groupedCategories->get(0);
?>

<?php if($currentCategories): ?>
    <?php switch($style ?? 1):
        case (5): ?>
            <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-submenu' => $hasChildren]); ?>">
                <?php $__currentLoopData = $currentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $hasChildren = $groupedCategories->has($category->id);
                    ?>

                    <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['has-dropdown' => $hasChildren]); ?>">
                        <a href="<?php echo e($category->url); ?>">
                            <?php echo Theme::partial('header.categories-item', ['category' => $category]); ?>

                        </a>

                        <?php if($hasChildren && $currentCategories = $groupedCategories->get($category->id)): ?>
                            <?php echo Theme::partial('header.categories-dropdown', ['currentCategories' => $currentCategories, 'hasChildren' => $hasChildren, 'groupedCategories' => $groupedCategories]); ?>

                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <?php break; ?>
        <?php default: ?>
            <ul>
                <?php $__currentLoopData = $currentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $hasChildren = $groupedCategories->has($category->id);
                        $hasMegaMenu = $hasChildren && $category->image;
                    ?>

                    <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['has-dropdown' => $hasChildren]); ?>">
                        <a href="<?php echo e(route('public.single', $category->url)); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['has-mega-menu' => $hasMegaMenu]); ?>">
                            <?php echo Theme::partial('header.categories-item', ['category' => $category]); ?>

                        </a>

                        <?php if($hasChildren && $currentCategories = $groupedCategories->get($category->id)): ?>
                            <?php
                                $hasMegaMenu = $groupedCategories->has($currentCategories->first()->id) && $currentCategories->first()->image;
                            ?>

                            <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-submenu', 'mega-menu' => $hasMegaMenu]); ?>">
                                <?php $__currentLoopData = $currentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $hasChildren = $groupedCategories->has($childCategory->id);
                                        $hasMegaMenu = $hasChildren && $childCategory->image;
                                    ?>

                                    <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['has-dropdown' => $hasChildren && !$hasMegaMenu]); ?>">
                                        <a href="<?php echo e(route('public.single', $childCategory->url)); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['mega-menu-title' => $hasMegaMenu && $hasChildren]); ?>">
                                            <?php echo Theme::partial('header.categories-item', ['category' => $childCategory]); ?>

                                        </a>

                                        <?php if($hasChildren): ?>
                                            <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-submenu' => ! $hasMegaMenu]); ?>">
                                                <?php $__currentLoopData = $groupedCategories->get($childCategory->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($loop->first && $childCategory->image && $hasMegaMenu): ?>
                                                        <li>
                                                            <a href="<?php echo e(route('public.single', $childCategory->url)); ?>">
                                                                <img src="<?php echo e(RvMedia::getImageUrl($childCategory->image)); ?>" alt="<?php echo e($childCategory->name); ?>">
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                    <li>
                                                        <a href="<?php echo e(route('public.single', $item->url)); ?>">
                                                            <?php echo Theme::partial('header.categories-item', ['category' => $item]); ?>

                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <?php break; ?>
    <?php endswitch; ?>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/product-categories-dropdown.blade.php ENDPATH**/ ?>