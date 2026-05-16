<?php
    Theme::layout('full-width');
?>

<section class="tp-order-area pb-160 pt-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="tp-order-inner">
                    <div class="tp-order-info-wrapper">
                        <?php echo $form->renderForm(); ?>

                    </div>
                </div>

                <?php echo $__env->make(EcommerceHelper::viewPath('includes.order-tracking-detail'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/ecommerce/order-tracking.blade.php ENDPATH**/ ?>