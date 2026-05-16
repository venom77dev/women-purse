<?php
    $breadcrumbStyle = Theme::get('breadcrumbStyle', theme_option('breadcrumb_style', 'align-start'));
    $breadcrumbBackground = RvMedia::getImageUrl(Theme::get('breadcrumbBackground', theme_option('breadcrumb_background_image')));
    $breadcrumbBackgroundColor = theme_option('breadcrumb_background_color');
    $breadcrumbHeight = theme_option('breadcrumb_height');
    $breadcrumbHeight = is_numeric($breadcrumbHeight) ? "{$breadcrumbHeight}px" : $breadcrumbHeight;
?>

<?php if($breadcrumbStyle !== 'none'): ?>
    <section
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'breadcrumb__area include-bg',
            'pt-60 pb-60 mb-50' => $breadcrumbStyle !== 'without-title' && empty($breadcrumbHeight),
            'pt-30 pb-30 mb-50' => $breadcrumbStyle === 'without-title' && empty($breadcrumbHeight),
            'breadcrumb__style-2 include-bg' => $breadcrumbStyle === 'without-title',
            'pt-30 pb-30' => $breadcrumbStyle === 'without-title' && empty($breadcrumbHeight),
            'mb-30 text-center' => $breadcrumbStyle === 'align-center',
            'text-start' => $breadcrumbStyle === 'align-start',
            'breadcrumb__padding' => $breadcrumbStyle === 'full-width',
        ]); ?>"
        style="<?php echo \Illuminate\Support\Arr::toCssStyles(["background-image: url($breadcrumbBackground)" => $breadcrumbBackground, "background-color: $breadcrumbBackgroundColor" => $breadcrumbBackgroundColor, "display: flex; align-items: center; height: $breadcrumbHeight" => $breadcrumbHeight]) ?>"
    >
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['container' => $breadcrumbStyle !== 'full-width', 'container-fluid' => $breadcrumbStyle === 'full-width']); ?>">
            <div class="breadcrumb__content p-relative z-index-1">
                <?php if($breadcrumbStyle !== 'without-title'): ?>
                    <h3 class="breadcrumb__title"><?php echo Theme::get('pageTitle') ? BaseHelper::clean(Theme::get('pageTitle')) : SeoHelper::getTitleOnly(); ?></h3>
                <?php endif; ?>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['breadcrumb__list', 'js_breadcrumb_reduce_length_on_mobile' => theme_option('breadcrumb_reduce_length_on_mobile', 'yes') == 'yes',]); ?>">
                    <?php $__currentLoopData = Theme::breadcrumb()->getCrumbs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span>
                            <?php if($loop->last): ?>
                                <?php echo BaseHelper::clean($crumb['label']); ?>

                            <?php else: ?>
                                <a href="<?php echo e($crumb['url']); ?>"><?php echo BaseHelper::clean($crumb['label']); ?></a>
                            <?php endif; ?>
                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/breadcrumbs.blade.php ENDPATH**/ ?>