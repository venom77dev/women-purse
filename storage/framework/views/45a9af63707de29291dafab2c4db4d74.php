<div class="offcanvas__area offcanvas__radius">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn" title="Search">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                <div class="offcanvas__logo logo">
                    <?php echo Theme::partial('header.logo'); ?>

                </div>
            </div>
            <?php if(is_plugin_active('ecommerce') && theme_option('enabled_header_categories_dropdown_on_mobile', 'yes') === 'yes'): ?>
                <div class="pb-40 offcanvas__category">
                    <button class="tp-offcanvas-category-toggle">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-menu-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <?php echo e(__('All Categories')); ?>

                    </button>
                    <div class="tp-category-mobile-menu"></div>
                </div>
            <?php endif; ?>

            <div class="mb-40 tp-main-menu-mobile fix d-xl-none"></div>

            <?php if($hotline = theme_option('hotline')): ?>
                <div class="offcanvas__btn">
                    <a href="tel:<?php echo e($hotline); ?>" class="tp-btn-2 tp-btn-border-2">
                        <?php echo e(__('Contact Us')); ?>

                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="offcanvas__bottom">
            <div class="offcanvas__footer d-flex align-items-center justify-content-between">
                <?php if(is_plugin_active('ecommerce') && ($currencies = get_all_currencies()) && $currencies->count() > 1): ?>
                    <div class="offcanvas__currency-wrapper currency">
                        <span class="offcanvas__currency-selected-currency tp-currency-toggle" id="tp-offcanvas-currency-toggle">
                            <?php echo e(__('Currency: :currency', ['currency' => get_application_currency()->title])); ?>

                        </span>
                        <?php echo Theme::partial('currency-switcher', ['class' => 'offcanvas__currency-list tp-currency-list']); ?>

                    </div>
                <?php endif; ?>

                <?php echo Theme::partial('language-switcher', ['type' => 'mobile']); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/mobile-offcanvas.blade.php ENDPATH**/ ?>