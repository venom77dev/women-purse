<?php $__currentLoopData = $attributeSets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeSet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $selected = Arr::get($selectedAttrs, $attributeSet->slug, $selectedAttrs);
        $view = EcommerceHelper::viewPath("attributes._layouts-filter.$attributeSet->display_layout");

        if (! view()->exists($view)) {
            $view = EcommerceHelper::viewPath('attributes._layouts.dropdown');
        }
    ?>

    <?php echo $__env->make($view, [
        'set' => $attributeSet,
        'attributes' => $attributeSet->attributes,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/plugins/ecommerce/resources/views/themes/attributes/attributes-filter-renderer.blade.php ENDPATH**/ ?>