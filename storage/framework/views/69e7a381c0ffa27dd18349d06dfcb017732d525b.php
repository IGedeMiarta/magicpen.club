<!-- JQuery-->
<script src="<?php echo e(URL::asset('plugins/jquery/jquery-3.6.0.min.js')); ?>"></script>

<!-- Bootstrap 5-->
<script src="<?php echo e(URL::asset('plugins/bootstrap-5.0.2/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Tippy JS -->
<script src="<?php echo e(URL::asset('plugins/tippy/popper.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/tippy/tippy-bundle.umd.min.js')); ?>"></script>

<?php echo $__env->yieldContent('js'); ?>

<!-- Custom-->
<script src="<?php echo e(URL::asset('js/custom.js')); ?>"></script>

<script>
    tippy('[data-tippy-content]', {
        animation: 'scale-extreme',
        theme: 'material',
    });
</script>

<!-- Google Analytics -->
<?php if(config('services.google.analytics.enable') == 'on'): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(config('services.google.analytics.id')); ?>"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo e(config('services.google.analytics.id')); ?>');
    </script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\openaidavinci\resources\views/layouts/footer-frontend.blade.php ENDPATH**/ ?>