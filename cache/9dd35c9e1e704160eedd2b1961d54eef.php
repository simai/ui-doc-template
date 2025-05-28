<?php
    $items = $sub ?? $page->configurator->getItems($page->locale());
    $level = $level ?? 0;
    $isSub = $isSub ?? false;
    $prefix = $prefix ?? '';
?>

<ul class="sf-nav-menu menu-level-<?php echo e($level); ?>">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php

            $title = $item['current']['title'] ?? null;
            $menu = $item['current']['menu'] ?? [];
            $hasSub = !empty($item['pages']);
        ?>


        <li class="sf-nav-menu-element <?php echo e($page->isActiveParent($slug) ? 'active' : ''); ?>">
            <?php if($title && $slug !== $page->locale()): ?>
                <button onclick="toggleNav(this)" class="sf-nav-button" type="button">
                    <i class = "sf-icon">
                        <?php
                            if($page->isActiveParent($slug))
                                echo "keyboard_arrow_up";
                            else
                                echo "keyboard_arrow_down";
                        ?>
                    </i>    
                    <?php echo e($title); ?>  
                </button>
            <?php endif; ?>
             <?php if($slug == $page->locale()): ?>
                <button onclick="toggleNav(this)" class="sf-nav-button" type="button">
                    <i class = "sf-icon">
                        <?php
                            if($page->isActiveParent($slug))
                                echo "keyboard_arrow_up";
                            else
                                echo "keyboard_arrow_down";
                        ?>
                    </i>
                    Основы 
                </button>
            <?php endif; ?>

            <?php if(!empty($menu)): ?>
                <ul>
                    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $fullPath = ($slug === $key) ? $isSub ? $prefix . '/' . $key : $key : trim($slug . '/' . $key, '/');
                            $url = ($slug === $page->language ? '' : '/' . $page->language ). '/' . $fullPath;
                        ?>

                        <li class = "sf-nav-menu-element">
                            <a href="<?php echo e($page->url($url)); ?>"
                               class="sf-nav-menu-element--link sf-nav-menu--lvl<?php echo e($level); ?> <?php echo e($page->isActive($url) ? 'active text-blue-500' : ''); ?>">
                                <?php echo e($label); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>


            <?php if($hasSub): ?>
                <?php echo $__env->make('_core._nav.menu', [
    'sub' => $item['pages'],
    'level' => $level + 1,
    'isSub' => true,
    'prefix' => $slug]
    , array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Users\Mike\Documents\Михаил\work\SimaiWork\SF5\new_documentation\ui-doc-template\source/_core/_nav/menu-item.blade.php ENDPATH**/ ?>