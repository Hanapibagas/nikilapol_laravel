

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
        <?php $__env->slot('title'); ?> Konfigurasi Umum <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Konfigurasi Umum</h4>
                    <form>
                        <div class="row mb-4">
                            <label for="projectname" class="col-form-label col-lg-2">Nama Website</label>
                            <div class="col-lg-10">
                                <input id="projectname" name="projectname" type="text" class="form-control"
                                    placeholder="Enter Project Name..." value="NikiLa POL" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="projectname" class="col-form-label col-lg-2">Singkatan Website</label>
                            <div class="col-lg-10">
                                <input id="projectname" name="projectname" type="text" class="form-control"
                                    placeholder="Enter Project Name..." value="Niki Lamongan | Pasar Online Lamongan" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="projectname" class="col-form-label col-lg-2">Deskripsi Footer</label>
                            <div class="col-lg-10">
                                <textarea id="projectname" name="projectname" type="text" class="form-control" style="height:100px;"
                                    placeholder="Enter Project Name...">NikiLa Pasar Online Lamongan atau yang disingkat NikiLa POL adalah Super Apps yang menggabungkan Marketplace dan Delivery Order, yang mempunyai tujuan menjadi wadah jualan produk kearifan lokal Kabupaten Lamongan serta untuk meningkatkan PAD (Pendapatan Asli Daerah) Kabupaten. </textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="projectname" class="col-form-label col-lg-2">Logo</label>
                            <div class="col-lg-5">
                                <label for="formFile" class="form-label">Upload logo baru</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-md-5 text-center">
                            <img class="rounded me-2" alt="200x200" src="https://ezazee.github.io/NikiLa-POL/assets/img/logo/Logo%20NIKILA_Lamongan%20POL.png" data-holder-rendered="true" width="200">
                    </div>
                        </div>
                    </form>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Update data</button>
                        </div>
                    </div>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-real\coba\resources\views/panel/personal/index.blade.php ENDPATH**/ ?>