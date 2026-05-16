<?php
    $for = $name;

    if (isset($attributes['for'])) {
        $for = $attributes['for'];
    }
?>
<?php echo Form::label($for, $label, $attributes, $escapeHtml); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/core/base/resources/views/forms/partials/label.blade.php ENDPATH**/ ?>