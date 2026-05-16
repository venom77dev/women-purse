<?php
    $attributes = $attributes->where('attribute_set_id', $set->id);
?>

<?php if($attributes->isNotEmpty()): ?>
    <div class="bb-product-filter">
        <h4 class="bb-product-filter-title"><?php echo e($set->title); ?></h4>

        <div class="bb-product-filter-content">
            <ul class="bb-product-filter-items filter-visual">
                <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="bb-product-filter-item">
                        <input
                            id="attribute-<?php echo e($attribute->id); ?>"
                            name="attributes[<?php echo e($set->slug); ?>][]"
                            type="checkbox"
                            value="<?php echo e($attribute->id); ?>"
                            <?php if(in_array($attribute->id, $selected)): echo 'checked'; endif; ?>
                        >
                        <label for="attribute-<?php echo e($attribute->id); ?>"><?php echo e($attribute->title); ?></label>
                        <span style="<?php echo e($attribute->getAttributeStyle()); ?>"></span>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/plugins/ecommerce/resources/views/themes/attributes/_layouts-filter/visual.blade.php ENDPATH**/ ?>