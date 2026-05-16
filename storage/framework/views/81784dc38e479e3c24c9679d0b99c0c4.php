<?php if($item->url): ?>
    <a href="<?php echo e($item->click_url); ?>" <?php if($item->open_in_new_tab): ?> target="_blank" <?php endif; ?>>
<?php endif; ?>
        <picture>
            <source
                srcset="<?php echo e($item->image_url); ?>"
                media="(min-width: 1200px)"
            />
            <source
                srcset="<?php echo e($item->tablet_image_url); ?>"
                media="(min-width: 768px)"
            />
            <source
                srcset="<?php echo e($item->mobile_image_url); ?>"
                media="(max-width: 767px)"
            />

            <?php echo e(RvMedia::image($item->image_url, $item->name, attributes: ['style' => 'width: 100%'])); ?>

        </picture>
<?php if($item->url): ?>
    </a>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/ads/includes/item.blade.php ENDPATH**/ ?>