<?php if(is_plugin_active('language')): ?>
    <?php
        $type ??= 'desktop';

        $supportedLocales = Language::getSupportedLocales();
        $languageDisplay = setting('language_display', 'all');
    ?>

    <?php if($supportedLocales && count($supportedLocales) > 1): ?>
        <?php if($type === 'desktop'): ?>
            <div class="tp-header-top-menu-item tp-header-lang">
                <?php if(setting('language_switcher_display', 'dropdown') === 'dropdown'): ?>
                    <span class="tp-header-lang-toggle" id="tp-header-lang-toggle">
                    <?php if($languageDisplay === 'all' || $languageDisplay === 'flag'): ?>
                        <div class="d-inline-block me-1">
                            <?php echo language_flag(Language::getCurrentLocaleFlag(), Language::getCurrentLocaleName()); ?>

                        </div>
                        <?php endif; ?>
                        <?php if($languageDisplay === 'all' || $languageDisplay === 'name'): ?>
                            <?php echo e(Language::getCurrentLocaleName()); ?>

                        <?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-down'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Botble\Icon\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                    </span>
                    <ul>
                        <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($localeCode === Language::getCurrentLocale()) continue; ?>
                            <li>
                                <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>" class="d-flex align-items-center gap-2">
                                    <?php if($languageDisplay === 'all' || $languageDisplay === 'flag'): ?>
                                        <?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?>

                                    <?php endif; ?>
                                    <?php if($languageDisplay === 'all' || $languageDisplay === 'name'): ?>
                                        <span><?php echo e($properties['lang_name']); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php else: ?>
                    <div class="d-flex align-items-center text-white gap-3">
                        <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($localeCode === Language::getCurrentLocale()) continue; ?>
                            <span>
                            <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>" class="d-flex gap-2">
                                <?php if($languageDisplay === 'all' || $languageDisplay === 'flag'): ?>
                                    <?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?>

                                <?php endif; ?>
                                <?php if($languageDisplay === 'all' || $languageDisplay === 'name'): ?>
                                    <span><?php echo e($properties['lang_name']); ?></span>
                                <?php endif; ?>
                            </a>
                        </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="offcanvas__select language">
                <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
                    <div class="offcanvas__lang-img mr-15">
                        <?php if($languageDisplay === 'all' || $languageDisplay === 'flag'): ?>
                            <?php echo language_flag(Language::getCurrentLocaleFlag(), Language::getCurrentLocaleName(), 24); ?>

                        <?php endif; ?>
                    </div>
                    <div class="offcanvas__lang-wrapper">
                    <span class="offcanvas__lang-selected-lang tp-lang-toggle" id="tp-offcanvas-lang-toggle">
                        <?php if($languageDisplay === 'all' || $languageDisplay === 'name'): ?>
                            <?php echo e(Language::getCurrentLocaleName()); ?>

                        <?php endif; ?>
                    </span>
                        <ul class="offcanvas__lang-list tp-lang-list">
                            <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($localeCode === Language::getCurrentLocale()) continue; ?>
                                <li>
                                    <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>" class="d-flex align-items-center gap-2">
                                        <?php if($languageDisplay === 'all' || $languageDisplay === 'flag'): ?>
                                            <?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?>

                                        <?php endif; ?>
                                        <?php if($languageDisplay === 'all' || $languageDisplay === 'name'): ?>
                                            <span class="text-nowrap"><?php echo e($properties['lang_name']); ?></span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\Users\Andropedia_2025\Desktop\anali\kiyawallet\platform\themes/shofy/partials/language-switcher.blade.php ENDPATH**/ ?>