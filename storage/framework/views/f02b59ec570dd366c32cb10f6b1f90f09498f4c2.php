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
        <?php $__env->slot('title'); ?> Konfigurasi ShoeCase <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Konfigurasi ShoeCase</h4>

                    <form action="<?php echo e(route('show-case.galery.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-4">
                            <label for="title" class="col-form-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input id="title" name="title" type="text" class="form-control"
                                    placeholder="Enter Project Name..." value="<?php echo e($showcase->title); ?>" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-form-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea id="description" name="description" type="text" class="form-control" style="height:100px;"
                                    placeholder="Enter Project Name..."><?php echo e($showcase->description); ?></textarea>
                            </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/panel/showcase/create.blade.php ENDPATH**/ ?>