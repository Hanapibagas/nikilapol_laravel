<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900%7CMerriweather:300,400,700,700i,900">
    <link rel="stylesheet" href="/home/css/style.css">
    <link rel="stylesheet" href="/home/css/home.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <?php $__currentLoopData = $whitelabel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favicon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
    <link rel="icon" href="/image/<?php echo e($favicon->favicon); ?>" type="image/x-icon">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $whitelabel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <title><?php echo e($color->title); ?></title>
    <style>
         :root {
 	--warna-dasar: <?php echo e($color->color); ?>;
 	--warna-kedua: <?php echo e($color->hover); ?>;
 	--warna-ketiga: <?php echo e($color->active); ?>;
 	--warna-putih1: #fff;
 	--warna-putih2: #fafafa;
 	--font-dasar: 'Poppins', sans-serif;
 	--size-font-subtitle: 50px;
 }

 #cta {
    padding: 50px 0;
    background: var(--warna-ketiga) url(/image/<?php echo e($color->cta); ?>) center no-repeat;
    background-size: cover;
    position: relative;
}

 .poppins {
    font-family: var(--font-dasar);
 }
.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
    </style>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\laravel-real\coba\resources\views/master/head-css.blade.php ENDPATH**/ ?>