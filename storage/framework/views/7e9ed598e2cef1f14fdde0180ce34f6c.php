<?php
    $colorMode ??= 'light';
    $showUserMenu ??= false;
    $announcements = apply_filters('announcement_display_html', null);
    $currencies = collect();
    $hasCurrencies = false;
    if (is_plugin_active('ecommerce')) {
        $currencies = get_all_currencies();
        $hasCurrencies = $currencies->count() > 1;
    }
?>

<div
    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['p-relative z-index-11 d-none d-md-block', 'tp-header-top-border' => $hasCurrencies || $announcements, 'tp-header-top-2' => $colorMode === 'light', 'tp-header-top black-bg' => $colorMode !== 'light']); ?>"
    style="background-color: <?php echo e(theme_option('header_top_background_color', $headerTopBackgroundColor)); ?>; color: <?php echo e($headerTopTextColor); ?>"
>
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([$headerTopClass ?? null]); ?>">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <div class="position-relative">
                <?php echo $announcements; ?>

            </div>
            <div>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-header-top-right d-flex align-items-center justify-content-end', 'tp-header-top-black' => $colorMode === 'light']); ?>">
                    <div class="tp-header-top-menu d-none d-lg-flex align-items-center justify-content-end">
                        <?php echo Theme::partial('language-switcher', ['type' => 'desktop']); ?>

                        <?php if($hasCurrencies): ?>
                            <div class="tp-header-top-menu-item tp-header-currency">
                                <span class="tp-header-currency-toggle" id="tp-header-currency-toggle">
                                    <?php echo e(get_application_currency()->title); ?>

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
                                </span>
                                <?php echo Theme::partial('currency-switcher'); ?>

                            </div>
                        <?php endif; ?>

                        <?php if($showUserMenu && is_plugin_active('ecommerce')): ?>
                            <?php if(auth()->guard('customer')->check()): ?>
                                <div class="tp-header-top-menu-item tp-header-setting">
                                    <span class="tp-header-setting-toggle" id="tp-header-setting-toggle">
                                        <?php echo e(auth('customer')->user()->name); ?>

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
                                    </span>
                                    <ul>
                                        <li>
                                            <a href="<?php echo e(route('customer.overview')); ?>"><?php echo e(__('My Profile')); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('customer.orders')); ?>"><?php echo e(__('Orders')); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('customer.logout')); ?>"><?php echo e(__('Logout')); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            <?php else: ?>
                                <div class="tp-header-top-menu-item tp-header-setting">
                                    <a href="<?php echo e(route('customer.login')); ?>"><?php echo e(__('Login')); ?></a>
                                </div>
                                <div class="tp-header-top-menu-item tp-header-setting">
                                    <a href="<?php echo e(route('customer.register')); ?>"><?php echo e(__('Register')); ?></a>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/header/top.blade.php ENDPATH**/ ?>