<?php
    $style = in_array($shortcode->style, [1, 2, 3, 4, 5, 'full-width']) ? $shortcode->style : 1;
    $sliders->loadMissing('metadata');

    $shortcode->font_family_of_description = $shortcode->font_family_of_description ?: theme_option('tp_cursive_font');
?>

<?php if($shortcode->customize_font_family_of_description && $shortcode->font_family_of_description !== theme_option('tp_primary_font')): ?>
    <?php echo BaseHelper::googleFonts('https://fonts.googleapis.com/' . sprintf('css2?family=%s:wght@400&display=swap', urlencode($shortcode->font_family_of_description))); ?>

<?php endif; ?>

<?php echo Theme::partial("shortcodes.simple-slider.style-$style", compact('sliders', 'shortcode')); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/shortcodes/simple-slider/index.blade.php ENDPATH**/ ?>