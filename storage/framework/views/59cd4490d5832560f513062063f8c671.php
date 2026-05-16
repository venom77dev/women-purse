<?php
    Theme::set('pageTitle', $page->name);

    if ($breadcrumbStyle = $page->getMetaData('breadcrumb_style', true)) {
        Theme::set('breadcrumbStyle', $breadcrumbStyle);
    }

    if ($breadcrumbBackground = $page->getMetaData('breadcrumb_background', true)) {
        Theme::set('breadcrumbBackground', $breadcrumbBackground);
    }

    Theme::set('isHomePage', BaseHelper::isHomePage($page->id));
?>

<?php if(BaseHelper::isHomepage($page->id)): ?>
    <?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, BaseHelper::clean($page->content), $page); ?>

<?php else: ?>
    <div class="ck-content">
        <?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, BaseHelper::clean($page->content), $page); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/views/page.blade.php ENDPATH**/ ?>