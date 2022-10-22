

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Create_New'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- bootstrap datepicker -->
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">

    <!-- dropzone css -->
    <link href="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <style>
.ck-editor__editable_inline {
    min-height: 400px;
}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Konfigurasi <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Edit Faq <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Faq</h4>
                    <form action="<?php echo e(route('faq.update', $faq->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row mb-4">
                            <label for="title" class="col-form-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input id="title" name="title" type="text" class="form-control" placeholder="Nama judul..." value="<?php echo e($faq->title); ?>" >
                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="slug" class="col-form-label col-lg-2">Slug</label>
                            <div class="col-lg-10">
                                <input id="slug" name="slug" type="text" class="form-control"
                                    placeholder="isikan slug..." value="<?php echo e($faq->slug); ?>" >
                                    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="category" class="col-form-label col-lg-2">Category</label>
                            <div class="col-lg-10">
                                <input id="category" name="category" type="text" class="form-control"
                                    placeholder="isikan category..." value="<?php echo e($faq->category); ?>" >
                                    <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-form-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea id="editor" name="description" type="text"><?php echo $faq->description; ?></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Update data</button>
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

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            ckfinder: {
                    uploadUrl: "<?php echo e(route('faq.upload', ['_token' => csrf_token() ])); ?>",
        }
        } )
        .catch( error => {
            console.error( error );
        } );

        const imageConfiguration = {
    resizeOptions: [
        {
            name: 'resizeImage:original',
            value: null,
            icon: 'original'
        },
        {
            name: 'resizeImage:50',
            value: '50',
            icon: 'medium'
        },
        {
            name: 'resizeImage:75',
            value: '75',
            icon: 'large'
        }
    ],
    toolbar: [
        ...
        'resizeImage:50',
        'resizeImage:75',
        'resizeImage:original',
    ]
}

</script>

    <!-- bootstrap datepicker -->
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
    <!-- dropzone plugin -->
    <script src="<?php echo e(URL::asset('/assets/libs/dropzone/dropzone.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/panel/faq/edit.blade.php ENDPATH**/ ?>