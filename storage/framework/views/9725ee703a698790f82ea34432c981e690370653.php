<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Job Agency - Your Search End Here </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/front/images/favicon.png')); ?>">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/bootstrap.min.css')); ?>">

    <!-- ICONS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/ilmosys-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/icons/fontawesome/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/icons/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/icons/icon2/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/js/vendors/swipebox/css/swipebox.min.css')); ?>">

    <!-- THEME / PLUGIN CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/js/vendors/slick/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/style.css')); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
<style>
    .contact-items-kris{ color: wheat !important;
padding: 0.7em;
font-size: 1.4em !important;
font-weight: 500 !important;}
    .contact-items-kris a{  color: wheat;}
    .copyright li {  padding: 0.5em;}
    .copyright li a{ color: #e62d48; }
    .copyright li a:hover{ color: #cccccc; }
    .privacy-statement ul li{ padding: 1em;  font-weight: 500; font-size: 0.8em;}
</style>
</head>

<body id="home">
    <!-- PRELOADER -->
    <div id="aman-preloader">
        <div class="area-preloader">
            <div class="loader-logo"><img src="<?php echo e(asset('assets/front/images/logo-white.png')); ?>" class="logo-img" alt=""></div>
            <span>loading...</span>
        </div>
        <div class="area-left"></div>
        <div class="area-right"></div>
    </div>
    <div class="page-overlay">
        <div class="page-transition"></div>
    </div>
    <div class="bt"></div>
    <div class="body">
        <!-- HEADER -->
        <header>
            <nav class="navbar-inverse navbar-lg navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="<?php echo e(url("/")); ?>" class="navbar-brand brand"><img src="<?php echo e(asset('assets/front/images/logo.png')); ?>" alt="logo"></a>
                    </div>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <?php echo $__env->make('public.layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>
                </div>
            </nav>
        </header>



<?php echo $__env->yieldContent('contents'); ?>




    <!-- Copyright -->
    <div class="footer-copy">

        <?php echo $__env->make('public.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <!-- JAVASCRIPT =============================-->
    <script src="<?php echo e(asset('assets/front/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/vendors/slick/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/vendors/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/vendors/stellar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/vendors/isotope/isotope.pkgd.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/vendors/swipebox/js/jquery.swipebox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/vendors/mc/jquery.ketchup.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/vendors/mc/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/vendors/gmap.js')); ?>"></script>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/prabhu_jobs/web-app/job-web-app/resources/views/public/layouts/master.blade.php ENDPATH**/ ?>