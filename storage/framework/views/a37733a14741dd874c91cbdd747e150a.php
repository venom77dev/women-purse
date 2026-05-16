<header>
    <?php echo Theme::partial('header.top', ['colorMode' => 'light', 'headerTopClass' => 'container-fluid pl-85 pr-85', 'showUserMenu' => true]); ?>


    <div
        id="header-sticky"
        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tp-header-area tp-header-sticky has-dark-logo tp-header-height', 'header-main' => ! Theme::get('hasSlider'), 'tp-header-style-transparent-white tp-header-transparent' => Theme::get('hasSlider')]); ?>"
        <?php echo Theme::partial('header.sticky-data'); ?>

    >
        <div class="tp-header-bottom-3 pl-85 pr-85" style="background-color: <?php echo e($headerMainBackgroundColor); ?>; color: <?php echo e($headerMainTextColor); ?>">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-6">
                        <?php echo Theme::partial('header.logo', ['hasLogoLight' => true]); ?>

                    </div>
                    <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                        <div class="main-menu menu-style-3 menu-style-4 p-relative">
                            <nav class="tp-main-menu-content">
                                <?php echo Menu::renderMenuLocation('main-menu', ['view' => 'main-menu']); ?>

                            </nav>
                        </div>
                        <?php if(is_plugin_active('ecommerce')): ?>
                            <div class="tp-category-menu-wrapper d-none">
                                <nav class="tp-category-menu-content">
                                    <ul>
                                        <?php echo Theme::partial('header.categories-dropdown'); ?>

                                    </ul>
                                </nav>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-6">
                        <?php echo Theme::partial('header.actions', ['class' => 'justify-content-end ml-50', 'showSearchButton' => true]); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/header/styles/header-4.blade.php ENDPATH**/ ?>