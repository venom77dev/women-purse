<?php
    $description = Arr::get($config, 'description');
    $image = Arr::get($config, 'image');
?>

<?php if($messages): ?>
    <div class="tp-product-details-msg mb-15">
        <ul>
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo BaseHelper::clean($message); ?></li>
                <?php break; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if($description || $image): ?>
    <div class="tp-product-details-payment d-flex align-items-center flex-wrap justify-content-between gap-3">
        <?php if($description): ?>
            <p><?php echo BaseHelper::clean($description); ?></p>
        <?php endif; ?>

        <?php if($image): ?>
            <?php echo e(RvMedia::image($image, $description)); ?>

        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/////widgets/product-detail-info/templates/frontend.blade.php ENDPATH**/ ?>