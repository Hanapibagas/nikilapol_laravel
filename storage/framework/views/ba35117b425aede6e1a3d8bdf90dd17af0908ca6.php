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
        <?php $__env->slot('title'); ?> showcase <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Konfigurasi showcase galleri</h4>

                    <form action="<?php echo e(route('galery.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-4">
                            <label for="showcase_id" class="col-form-label col-lg-2">Brand</label>
                            <div class="col-lg-10">
                                <select name="showcase_id" type="text" class="form-control">
                                    <option value="">Pilih Show Case</option>
                                    <?php $__currentLoopData = $showcase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showcase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($showcase->id); ?>">
                                            <?php echo e($showcase->title); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="gambar" class="col-form-label col-lg-2">Gambar</label>
                            <div class="col-lg-5">
                                <label for="gambar" class="form-label">Upload gambar baru</label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                            </div>
                            <div class="col-md-5 text-center">
                            <img class="rounded me-2" id="gambar-view" alt="200x200" src="/assets/images/preview.png" data-holder-rendered="true" width="200">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/panel/showcase/galeri/create.blade.php ENDPATH**/ ?>