<header>
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-header-area tp-header-height', 'tp-header-style-primary' => ! Theme::get('isHomePage')]); ?>">
        <?php echo Theme::partial('header.top', ['colorMode' => 'light', 'headerTopClass' => 'container', 'showUserMenu' => true]); ?>


        <div
            id="header-sticky"
            class="tp-header-bottom-2 tp-header-sticky" <?php echo Theme::partial('header.sticky-data'); ?>

            style="background-color: <?php echo e($headerMainBackgroundColor); ?>; color: <?php echo e($headerMainTextColor); ?>"
        >
            <div class="container">
                <div class="tp-mega-menu-wrapper p-relative">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-5 col-md-5 col-sm-4 col-6">
                            <?php echo Theme::partial('header.logo'); ?>

                        </div>
                        <div class="col-xl-5 d-none d-xl-block">
                            <div class="main-menu menu-style-2">
                                <nav class="tp-main-menu-content">
                                    <?php echo Menu::renderMenuLocation('main-menu', ['view' => 'main-menu']); ?>

                                </nav>
                            </div>
                            <?php if(is_plugin_active('ecommerce')): ?>
                                <div class="tp-category-menu-wrapper d-none">
                                    <nav class="tp-category-menu-content">
                                        <?php echo Theme::partial('header.categories-dropdown'); ?>

                                    </nav>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if(is_plugin_active('ecommerce')): ?>
                            <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8 col-6">
                                <div class="tp-header-bottom-right d-flex align-items-center justify-content-end pl-30">
                                    <div class="tp-header-search-2 d-none d-sm-block">
                                        <?php if (isset($component)) { $__componentOriginal8a03368ec6e49e00ad030dd0f1968073 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a03368ec6e49e00ad030dd0f1968073 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'ccf469bf367e9d43e8287323c43b8fe7::fronts.ajax-search.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('plugins-ecommerce::fronts.ajax-search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <?php if (isset($component)) { $__componentOriginald7d73f83e04d5f260717ce3bbffc01d3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald7d73f83e04d5f260717ce3bbffc01d3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'ccf469bf367e9d43e8287323c43b8fe7::fronts.ajax-search.input','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('plugins-ecommerce::fronts.ajax-search.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald7d73f83e04d5f260717ce3bbffc01d3)): ?>
<?php $attributes = $__attributesOriginald7d73f83e04d5f260717ce3bbffc01d3; ?>
<?php unset($__attributesOriginald7d73f83e04d5f260717ce3bbffc01d3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald7d73f83e04d5f260717ce3bbffc01d3)): ?>
<?php $component = $__componentOriginald7d73f83e04d5f260717ce3bbffc01d3; ?>
<?php unset($__componentOriginald7d73f83e04d5f260717ce3bbffc01d3); ?>
<?php endif; ?>

                                            <button type="submit" title="Search">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                    <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a03368ec6e49e00ad030dd0f1968073)): ?>
<?php $attributes = $__attributesOriginal8a03368ec6e49e00ad030dd0f1968073; ?>
<?php unset($__attributesOriginal8a03368ec6e49e00ad030dd0f1968073); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a03368ec6e49e00ad030dd0f1968073)): ?>
<?php $component = $__componentOriginal8a03368ec6e49e00ad030dd0f1968073; ?>
<?php unset($__componentOriginal8a03368ec6e49e00ad030dd0f1968073); ?>
<?php endif; ?>
                                    </div>
                                    <?php echo Theme::partial('header.actions', ['class' => 'ml-30']); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/header/styles/header-2.blade.php ENDPATH**/ ?>