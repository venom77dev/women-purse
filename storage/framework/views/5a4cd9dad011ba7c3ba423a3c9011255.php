<ul class="bb-social-sharing">
    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="bb-social-sharing__item">
            <a
                href="<?php echo e($social['url']); ?>"
                target="_blank"
                title="<?php echo e(__('Share on :social', ['social' => $social['name']])); ?>"
                style="<?php echo \Illuminate\Support\Arr::toCssStyles(["background-color: {$social['background_color']}" => $social['background_color'], "color: {$social['color']}" => $social['color']]) ?>"
            >
                <?php echo $social['icon']; ?>

            </a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <li class="bb-social-sharing__item">
        <button title="<?php echo e(__('Copy link')); ?>" data-bb-toggle="social-sharing-clipboard" data-clipboard-text="<?php echo e($url); ?>">
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-copy'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Botble\Icon\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-clipboard-icon' => 'copy']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-check'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Botble\Icon\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-clipboard-icon' => 'copied','style' => 'display: none;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
        </button>
    </li>
</ul>

<?php if (! $__env->hasRenderedOnce('0c5e47f1-788e-4802-a200-0c18b90037ed')): $__env->markAsRenderedOnce('0c5e47f1-788e-4802-a200-0c18b90037ed'); ?>
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            function toggleClipboardActionIcon(element) {
                const copiedState = element.querySelector('[data-clipboard-icon="copy"]');
                const copyState = element.querySelector('[data-clipboard-icon="copied"]');

                copiedState.style.display = 'none';
                copyState.style.display = 'inline-block';

                setTimeout(function () {
                    copiedState.style.display = 'inline-block';
                    copyState.style.display = 'none';
                }, 3000);
            }

            document.querySelectorAll('[data-bb-toggle="social-sharing-clipboard"]').forEach(function (element) {
                element.addEventListener('click', function (event) {
                    event.preventDefault();

                    if (navigator.clipboard && window.isSecureContext) {
                        navigator.clipboard.writeText(element.dataset.clipboardText).then(function () {
                            toggleClipboardActionIcon(element);
                        });
                    } else {
                        const input = document.createElement('input');
                        input.value = element.dataset.clipboardText;
                        document.body.appendChild(input);
                        input.select();
                        document.execCommand('copy');
                        document.body.removeChild(input);

                        toggleClipboardActionIcon(element);
                    }
                });
            });
        });
    </script>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform/packages/theme/resources/views/fronts/social-sharing.blade.php ENDPATH**/ ?>