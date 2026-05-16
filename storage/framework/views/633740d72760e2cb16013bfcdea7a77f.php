<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('packages/data-synchronize::partials.importer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($importer->getLayout(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\vendor\botble\data-synchronize\src\Providers/../../resources/views/import.blade.php ENDPATH**/ ?>