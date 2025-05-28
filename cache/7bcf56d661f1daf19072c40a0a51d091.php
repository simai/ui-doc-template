

<?php $__env->startSection('nav-toggle'); ?>
    <?php echo $__env->make('_core._nav.menu-toggle', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section>

        <?php echo $__env->make('_core._nav.breadcrumbs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <div class="flex flex-col lg:flex-row">
            <div class="main--content" v-pre>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </section>
    <?php echo $__env->make('_core._nav.bottom-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_core._layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Mike\Documents\Михаил\work\SimaiWork\SF5\new_documentation\ui-doc-template\source/_core/_layouts/documentation.blade.php ENDPATH**/ ?>