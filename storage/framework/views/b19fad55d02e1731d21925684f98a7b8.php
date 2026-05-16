<?php
    if (BaseHelper::hasIcon($value)) {
        $icon = BaseHelper::renderIcon($value);
    } else {
        $icon = $value;
    }
?>

<select name="<?php echo e($name); ?>" data-bb-core-icon data-url="<?php echo e(route('core-icons')); ?>" data-placeholder="<?php echo e(trans('core/base::forms.select_placeholder')); ?>" <?php echo Html::attributes($attributes); ?>>
    <?php if($value): ?>
        <option value="<?php echo e($value); ?>" selected><?php echo e($icon); ?></option>
    <?php endif; ?>
</select>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/core/base/resources/views/forms/partials/core-icon.blade.php ENDPATH**/ ?>