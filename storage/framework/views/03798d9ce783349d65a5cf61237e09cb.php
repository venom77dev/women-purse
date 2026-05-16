<?php
    /** @var Botble\Table\Actions\Action $action */
?>

<<?php echo e($action->getType()); ?>

    <?php echo $__env->make('core/table::actions.includes.action-attributes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
>
    <?php echo $__env->make('core/table::actions.includes.action-icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['sr-only' => $action->hasIcon()]); ?>"><?php echo e($action->getLabel()); ?></span>
</<?php echo e($action->getType()); ?>>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/core/table/resources/views/actions/action.blade.php ENDPATH**/ ?>