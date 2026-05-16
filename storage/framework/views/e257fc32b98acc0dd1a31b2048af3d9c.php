<?php
    $style = theme_option('header_style', 1);
    $style = in_array($style, [1, 2, 3, 4, 5]) ? $style : 1;
?>

<?php echo Theme::partial("header.styles.header-$style"); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/header.blade.php ENDPATH**/ ?>