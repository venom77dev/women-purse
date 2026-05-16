<?php echo BaseHelper::clean(
    trans('core/base::layouts.copyright', [
        'year' => Carbon\Carbon::now()->year,
        'company' => setting('admin_title', config('core.base.general.base_name')),
        'version' => sprintf('<span class="fw-medium">%s</span>', get_cms_version()),
    ]),
); ?>

<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/core/base/resources/views/partials/copyright.blade.php ENDPATH**/ ?>