

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Konfigurasi <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Layanan <?php $__env->endSlot(); ?>
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
                <h4 class="card-title mb-2">List Artikel</h4>
                <div class="d-flex flex-wrap mb-2">
                    <a href="<?php echo e(route('blog.create')); ?>" type="button" class="btn btn-success waves-effect btn-label waves-light mb-2"><i class="bx bx-add-to-queue label-icon"></i>Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Gambar</th>
                                <th class="align-middle">Title</th>
                                <th class="align-middle">Kategori</th>
                                <th class="align-middle">Tag</th>
                                <th class="align-middle">Author</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?> 
                            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold"><?php echo e($no++); ?></a> </td>
                                <td style="width: 100px;"><img src="/image/<?php echo e($blog->gambar); ?>" alt="" class="avatar-md h-auto d-block rounded"></td>
                                <td>
                                    <h5 class="font-size-13 text-truncate mb-1"><a href="javascript: void(0);" class="text-dark"><?php echo e($blog->title); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($blog->created_at->format('d F Y')); ?></p>
                                </td>
                                <td><button type="button" class="btn btn-outline-primary waves-effect btn-sm"><?php echo e($blog->category); ?></button></td>
                                <td><button type="button" class="btn btn-outline-dark waves-effect btn-sm">driver</button></td>
                                <td><?php echo e($blog->author); ?></td>
                                <td>
                                    <form action="<?php echo e(route('blog.destroy',$blog->id)); ?>" method="POST">
                                        <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="<?php echo e(route('blog.edit',$blog->id)); ?>"><i class="bx bx-edit  label-icon"></i>Edit</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="bx bxs-trash   label-icon"></i>Hapus</button>
                                    </form>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-real\coba\resources\views/panel/blog/index.blade.php ENDPATH**/ ?>