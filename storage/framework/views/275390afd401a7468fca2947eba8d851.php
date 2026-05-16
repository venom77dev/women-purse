<?php
    $iconImage = $category->icon_image;
    $icon = $category->icon;
?>

<?php if($iconImage || $icon): ?>
    <span>
        <?php if($iconImage): ?>
            <img src="<?php echo e(RvMedia::getImageUrl($iconImage)); ?>" alt="<?php echo e($category->name); ?>" width="18" height="18">
        <?php elseif($icon): ?>
            <?php echo BaseHelper::renderIcon($icon); ?>

        <?php endif; ?>
    </span>
<?php endif; ?>

<?php echo e($category->name); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/header/categories-item.blade.php ENDPATH**/ ?>