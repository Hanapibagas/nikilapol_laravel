

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Konfigurasi <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Header <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    <?php echo e($message); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                <h4 class="card-title mb-4">List Header</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Title Header</th>
                                <th class="align-middle">Deskripsi</th>
                                <th class="align-middle">Link</th>
                                <th class="align-middle">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">1</a> </td>
                                <td style="width: 100px;"><img src="/image/<?php echo e($header->cover); ?>" alt="" class="avatar-md h-auto d-block rounded"></td>
                                <td><?php echo e($header->title); ?></td>
                                <td>
                                <?php echo e($header->description); ?>

                                </td>
                                <td>
                                <a href="/public/image/<?php echo e($header->cover); ?>" target="_blank"><?php echo e($header->link); ?></a>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="<?php echo e(route('header.edit', $header->id)); ?>" class="btn btn-primary waves-effect btn-label waves-light btn-sm"><i class="bx bx-edit label-icon"></i> Edit Header</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-real\coba\resources\views/panel/header/index.blade.php ENDPATH**/ ?>