<?php
    Theme::asset()->container('footer')->writeContent('quick-view-modal', view(Theme::getThemeNamespace('views.ecommerce.includes.quick-view-modal')));
    Theme::asset()->container('footer')->writeContent('quick-shop-modal', view(EcommerceHelper::viewPath('includes.quick-shop-modal')));
    Theme::asset()->add('lightgallery-css', 'vendor/core/plugins/ecommerce/libraries/lightgallery/css/lightgallery.min.css');
    Theme::asset()->container('footer')->add('lightgallery-js', 'vendor/core/plugins/ecommerce/libraries/lightgallery/js/lightgallery.min.js', ['jquery']);
?>

<?php echo Theme::partial(
    "shortcodes.ecommerce-product-groups.$style",
    compact('shortcode', 'productTabs', 'selectedTabs', 'groups', 'style')
); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ecommerce-product-groups/index.blade.php ENDPATH**/ ?>