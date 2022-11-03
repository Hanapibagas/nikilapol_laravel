<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- Sweet Alert-->
<link href="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Konfigurasi <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Kontak <?php $__env->endSlot(); ?>
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
                <h4 class="card-title mb-2">List Pesan</h4>
                <div class="d-flex flex-wrap mb-2">
                    <a href="<?php echo e(route('list-kontak.create')); ?>" type="button" class="btn btn-success waves-effect btn-label waves-light mb-2"><i class="bx bx-add-to-queue label-icon"></i>Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Nama Depan</th>
                                <th class="align-middle">Nama Belakang</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">No Hp</th>
                                <th class="align-middle">Pesan</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <?php $__currentLoopData = $listkontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listkontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="javascript: void(0);" class="text-body fw-bold"><?php echo e($no++); ?></a> </td>
                                <td><?php echo e($listkontak->name_depan); ?></td>
                                <td><?php echo e($listkontak->name_belakang); ?></td>
                                <td><?php echo e($listkontak->email); ?></td>
                                <td><?php echo e($listkontak->no_hp); ?></td>
                                <td><?php echo e($listkontak->pesan); ?></td>
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

<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes, delete it!"
      })
          .then((result) => {
            if (result.isConfirmed) {
              form.submit();
            }
          });
      });

</script>

<!-- Sweet Alerts js -->
<script src="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>

<!-- Sweet alert init js-->
<script src="<?php echo e(URL::asset('/assets/js/pages/sweet-alerts.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/panel/list-kontak/index.blade.php ENDPATH**/ ?>