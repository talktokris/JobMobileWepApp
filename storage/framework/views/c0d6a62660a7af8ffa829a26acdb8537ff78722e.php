<ul class="nav navbar-nav navbar-right navbar-login">
    <li>
        <a class="page-scroll" href="#contact">iOS <i class="fa fa-apple"></i></a>
        </a>
    </li>
    <li style="margin-left:5px;">
        <a class="page-scroll" href="#contact">Android <i class="fa fa-android"></i></a>
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">
  <?php $CurrentRoute = Route::currentRouteName();

  if($CurrentRoute=="landing-page"){ ?>
    <li class="dropdown mm-menu">
        <a class="page-scroll" href="#home">Home</a>
    </li>



    <li class="dropdown mm-menu">
        <a class="page-scroll" href="#intro">About</a>
    </li>

    <li class="dropdown mm-menu">
        <a class="page-scroll" href="#services">Features</a>
    </li>


    <li class="dropdown mm-menu">
        <a class="page-scroll" href="#contact">Contact</a>
    </li>

<?php } else { ?>

    <li class="dropdown mm-menu">
        <a class="page-scroll" href="<?php echo e(url('/')); ?>#home">Home</a>
    </li>



    <li class="dropdown mm-menu">
        <a class="page-scroll" href="<?php echo e(url('/')); ?>#intro">About</a>
    </li>

    <li class="dropdown mm-menu">
        <a class="page-scroll" href="<?php echo e(url('/')); ?>#services">Features</a>
    </li>


    <li class="dropdown mm-menu">
        <a class="page-scroll" href="<?php echo e(url('/')); ?>#contact">Contact</a>
    </li>

<?php } ?>
</ul>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/prabhu_jobs/web-app/job-web-app/resources/views/public/layouts/menu.blade.php ENDPATH**/ ?>