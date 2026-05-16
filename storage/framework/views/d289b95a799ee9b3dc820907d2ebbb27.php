<?php
    use Botble\Shortcode\Facades\Shortcode;

    Theme::asset()->remove('contact-css');
    Theme::asset()->container('footer')->remove('contact-public-js');

    $contactInfo = Shortcode::fields()->getTabsData(['icon', 'content'], $shortcode);
?>

<section class="tp-contact-area pb-100">
    <div class="container">
        <div class="tp-contact-inner">
            <div class="row">
                <?php if($shortcode->show_contact_form): ?>
                    <div class="col-xl-9 col-lg-8">
                        <div class="tp-contact-wrapper">
                            <?php if($title = $shortcode->title): ?>
                                <h3 class="tp-contact-title"><?php echo e($title); ?></h3>
                            <?php endif; ?>

                            <div class="tp-contact-form">
                                <?php echo $form->renderForm(); ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-xl-3 col-lg-4">
                    <div class="tp-contact-info-wrapper">
                        <?php $__currentLoopData = $contactInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(empty($info['icon']) || empty($info['content'])) continue; ?>

                            <div class="tp-contact-info-item">
                                <div class="tp-contact-info-icon">
                                    <span>
                                        <?php echo e(RvMedia::image($info['icon'], $info['content'])); ?>

                                    </span>
                                </div>
                                <div class="tp-contact-info-content">
                                    <p><?php echo BaseHelper::clean($info['content']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($shortcode->show_social_info): ?>
                            <?php
                                $socialInfoLabel = $shortcode->social_info_label;
                            ?>

                            <div class="tp-contact-info-item">
                                <div class="tp-contact-info-icon">
                                    <span>
                                        <?php echo e(RvMedia::image($shortcode->social_info_icon, $socialInfoLabel ?: __('Social Media'))); ?>

                                    </span>
                                </div>
                                <div class="tp-contact-info-content">
                                    <div class="tp-contact-social-wrapper mt-5">
                                        <?php if($socialInfoLabel): ?>
                                            <h4 class="tp-contact-social-title"><?php echo e($socialInfoLabel); ?></h4>
                                        <?php endif; ?>

                                        <?php if($socialLinks = Theme::getSocialLinks()): ?>
                                            <div class="tp-contact-social-icon">
                                                <?php $__currentLoopData = $socialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a href="<?php echo e($socialLink->getUrl()); ?>"><?php echo e($socialLink->getIconHtml()); ?></a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/contact-form/index.blade.php ENDPATH**/ ?>