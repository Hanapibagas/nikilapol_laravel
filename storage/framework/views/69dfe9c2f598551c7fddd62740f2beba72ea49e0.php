<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Create_New'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- bootstrap datepicker -->
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">

    <!-- dropzone css -->
    <link href="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Konfigurasi <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Header <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Konfigurasi Header</h4>

                    <form action="<?php echo e(route('header.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-4">
                            <label for="title" class="col-form-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input id="title" name="title" type="text" class="form-control"
                                    placeholder="Enter Project Name..." " >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-form-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea id="description" name="description" type="text" class="form-control" style="height:100px;"
                                    placeholder="Enter Project Name..."></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="link" class="col-form-label col-lg-2">Link</label>
                            <div class="col-lg-10">
                                <input id="link" name="link" type="text" class="form-control"
                                    placeholder="Enter Project Name..." >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="projectname" class="col-form-label col-lg-2">Aplikasi</label>
                            <div class="col-lg-5">
                                <label for="formFile" class="form-label">Upload Aplikasi baru</label>
                                <input class="form-control" name="aplikasi" type="file" id="aplikasi">
                            </div>
                            <div class="col-md-5 text-center">
                            <img class="rounded me-2" alt="200x200" data-holder-rendered="true" width="200">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="cover" class="col-form-label col-lg-2">Cover</label>
                            <div class="col-lg-5">
                                <label for="cover" class="form-label">Upload Cover baru</label>
                                <input class="form-control" name="cover" type="file" id="cover">
                            </div>
                            <div class="col-md-5 text-center">
                            <img class="rounded me-2" alt="200x200"  data-holder-rendered="true" width="200">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                        <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bxs-duplicate label-icon"></i>Update Data</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- bootstrap datepicker -->
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
    <!-- dropzone plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/panel/header/create.blade.php ENDPATH**/ ?>