<?php if (! $__env->hasRenderedOnce('a9dc891f-4b11-4448-bec7-665e8d628ec7')): $__env->markAsRenderedOnce('a9dc891f-4b11-4448-bec7-665e8d628ec7'); ?>
    <script>
        var lazyLoadShortcodeBlocks = function () {
            $('.shortcode-lazy-loading').each(function (index, element) {
                var $element = $(element);
                var name = $element.data('name');
                var attributes = $element.data('attributes');

                $.ajax({
                    url: '<?php echo e(route('public.ajax.render-ui-block')); ?>',
                    type: 'POST',
                    data: {
                        name,
                        attributes: {
                            ...attributes,
                        },
                    },
                    headers: {
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    },
                    success: function ({ error, data }) {
                        if (error) {
                            return;
                        }

                        $element.replaceWith(data);

                        document.dispatchEvent(new CustomEvent('shortcode.loaded', {
                            detail: {
                                name,
                                attributes,
                                html: data,
                            }
                        }));
                    },
                });
            });
        };

        window.addEventListener('load', function () {
            lazyLoadShortcodeBlocks();
        });
    </script>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/packages/shortcode/resources/views/partials/lazy-loading-script.blade.php ENDPATH**/ ?>