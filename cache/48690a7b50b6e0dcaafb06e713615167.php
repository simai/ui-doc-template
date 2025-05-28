<?php
    $breadcrumbs_array = $page->generateBreadcrumbs();
    $home =  $page->isHome();
?>
<?php if(!$home): ?>
    <section>

        <ul class="sf-breadcrumb">


            <?php $__currentLoopData = $breadcrumbs_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key === 0): ?>
                    <li class="sf-breadcrumb-item">
                        <a href="<?php echo e($item['path']); ?>">
                            <i class="color-on-surface sf-icon sf-icon-medium">home</i>
                        </a>
                        <i class="sf-icon sf-icon-light">chevron_right</i>
                    </li>
                <?php else: ?>
                    <li class="sf-breadcrumb-item text-1/2 ">
                        <?php if(isset($item['path'])): ?>
                            <a href="<?php echo e($item['path']); ?>"><?php echo e($item['label']); ?></a>
                        <?php else: ?>
                            <span><?php echo e($item['label']); ?></span>
                        <?php endif; ?>

                        <?php if(!$loop->last): ?>
                            <i class="sf-icon sf-icon-light">chevron_right</i>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>
<?php endif; ?>
<?php /**PATH C:\Users\Mike\Documents\Михаил\work\SimaiWork\SF5\new_documentation\ui-doc-template\source/_core/_nav/breadcrumbs.blade.php ENDPATH**/ ?>