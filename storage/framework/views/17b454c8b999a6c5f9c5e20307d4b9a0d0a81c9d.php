<form action="<?php echo e(route('kontak.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="formBox">
        <div class="row50">
            <div class="inputBox">
                <span>Nama Depan</span>
                <input name="name_depan" type="text" placeholder="Nama Depan Kamu">
            </div>
            <div class="inputBox">
                <span>Nama Belakang</span>
                <input name="name_belakang" type="text" placeholder="Nama Belakang Kamu">
            </div>
        </div>
        <div class="row50">
            <div class="inputBox">
                <span>Email</span>
                <input name="email" type="email" placeholder="contoh12@email.com">
            </div>
            <div class="inputBox">
                <span>No HP</span>
                <input name="no_hp" type="number" placeholder="08XXXXXXXXX">
            </div>
        </div>
        <div class="row100">
            <div class="inputBox">
                <span>Pesan</span>
                <textarea name="pesan" placeholder="Tulis suatu pesan"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">
        Simpan
    </button>
</form>
<?php /**PATH D:\Project-web\Laravel\nikilapol_laravel\resources\views/panel/list-kontak/create.blade.php ENDPATH**/ ?>