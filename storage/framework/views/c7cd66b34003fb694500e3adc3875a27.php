<?php if($categories->isNotEmpty()): ?>
    <?php echo $__env->make(Theme::getThemeNamespace("widgets.product-categories.templates.styles.$style"), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/////widgets/product-categories/templates/frontend.blade.php ENDPATH**/ ?>