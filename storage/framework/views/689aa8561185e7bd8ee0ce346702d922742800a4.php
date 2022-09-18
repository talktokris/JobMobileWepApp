<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon-32x32.png')); ?>" type="image/png" />
    <!--plugins-->
    <link href="<?php echo e(asset('assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/highcharts/css/highcharts.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')); ?>" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo e(asset('assets/css/pace.min.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('assets/js/pace.min.js')); ?>"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dark-theme.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/semi-dark.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/header-colors.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>" />
    <title>Job Agency Admin Panel</title>


</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">

            <?php echo $__env->make('admin/layouts/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ;
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>

            <?php echo $__env->make('admin/layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ;

        </header>
        <!--end header -->
        <!--start page wrapper -->




        <?php echo $__env->yieldContent('contents'); ?>





        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">


            <?php echo $__env->make('admin/layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ;


        </footer>
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <!--plugins-->
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/highcharts/js/highcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/highcharts/js/exporting.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/highcharts/js/variable-pie.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/highcharts/js/export-data.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/highcharts/js/accessibility.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/index.js')); ?>"></script>
    <!--app JS-->
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script>
        new PerfectScrollbar('.customers-list');
        new PerfectScrollbar('.store-metrics');
        new PerfectScrollbar('.product-list');
    </script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/prabhu_jobs/web-app/job-web-app/resources/views/admin/layouts/master.blade.php ENDPATH**/ ?>