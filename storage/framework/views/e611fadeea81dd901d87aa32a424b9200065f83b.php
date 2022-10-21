

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Sweet_Alert'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- Sweet Alert-->
<link href="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> UI Elements <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Sweet Alert <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Examples</h4>
                <p class="card-title-desc">A beautiful, responsive, customizable
                    and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                    dependencies.</p>

                <div class="row text-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>A basic message</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>A title with a text under</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>A success message!</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>A warning message, with a function attached to the "Confirm"-button...</p>
                            <a href="google.com" type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>By passing a parameter, you can execute something else for "Cancel".</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>A message with custom Image Header</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>A message with auto close timer</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>Custom HTML description and buttons</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>A custom positioned dialog</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-position">Click me</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>A message with custom width, padding and background</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <p>Ajax request example</p>
                        <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>Chaining modals (queue) example</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="chaining-alert">Click me</button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>Dynamic queue example</p>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="dynamic-alert">Click me</button>
                        </div>
                    </div>

                </div> <!-- end row -->

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Sweet Alerts js -->
<script src="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>

<!-- Sweet alert init js-->
<script src="<?php echo e(URL::asset('/assets/js/pages/sweet-alerts.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-real\coba\resources\views/ui-sweet-alert.blade.php ENDPATH**/ ?>