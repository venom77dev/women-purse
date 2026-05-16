<ul <?php echo $options; ?>>
    <?php $__currentLoopData = $menu_nodes->loadMissing('metadata'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e(url($node->url)); ?>">
                <?php if($iconImage = $node->getMetaData('icon_image', true)): ?>
                    <img src="<?php echo e(RvMedia::getImageUrl($iconImage)); ?>" alt="<?php echo e($node->title); ?>" width="14" height="14" />
                <?php elseif($node->icon_font): ?>
                    <i class="<?php echo e(trim($node->icon_font)); ?>"></i>
                <?php endif; ?>
                <?php echo e($node->title); ?>

            </a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/footer/menu.blade.php ENDPATH**/ ?>