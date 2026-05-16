<?php if($brands->isNotEmpty()): ?>
    <section class="tp-brand-area pb-40">
        <?php switch($config['style']):
            case ('slider'): ?>
                <div class="tp-brand-slider p-relative">
                    <div class="tp-brand-slider-active swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tp-brand-item swiper-slide text-center">
                                    <a href="<?php echo e($brand->url); ?>">
                                        <?php echo e(RvMedia::image($brand->logo, $brand->name, attributes: ['loading' => false])); ?>

                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="tp-brand-slider-arrow">
                        <button class="tp-brand-slider-button-prev">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="tp-brand-slider-button-next">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>

                <?php break; ?>

            <?php case ('grid'): ?>
                <div class="tp-brand-grid">
                    <div class="row">
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="tp-brand-item text-center">
                                    <a href="<?php echo e($brand->url); ?>">
                                        <?php echo e(RvMedia::image($brand->logo, $brand->name, attributes: ['loading' => false])); ?>

                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php break; ?>
        <?php endswitch; ?>
    </section>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/////widgets/ecommerce-brands/templates/frontend.blade.php ENDPATH**/ ?>