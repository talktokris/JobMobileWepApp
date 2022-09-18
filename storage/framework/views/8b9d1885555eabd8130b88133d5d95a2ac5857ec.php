<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('contents'); ?>

<div class="page-wrapper">
    <div class="page-content">

         <!---- allert message Start -->
         <?php if(Session::has('flash_message_success')): ?>
         <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
             <div class="d-flex align-items-center">
                 <div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
                 </div>
                 <div class="ms-3">
                     <h6 class="mb-0 text-white">Success Alerts</h6>
                     <div class="text-white"><?php echo session('flash_message_success'); ?> </div>
                 </div>
             </div>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <?php endif; ?>

         <?php if(Session::has('flash_message_error')): ?>
         <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
             <div class="d-flex align-items-center">
                 <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                 </div>
                 <div class="ms-3">
                     <h6 class="mb-0 text-white">Error Alerts</h6>
                     <div class="text-white"><?php echo session('flash_message_error'); ?></div>
                 </div>
             </div>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         <?php endif; ?>
         <!---- allert message End -->
        <!--breadcrumb-->
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Resumes</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Resume Profile</li>
                    </ol>
                </nav>
            </div>



        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <?php $imageFindName=$item->image;
                                if($imageFindName==""){   $news_image= url('assets/images/members/av.png'); }
                                else {   $news_image= url('assets/images/members').'/'.$item->id.'/'.$item->image; } ?>

                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="<?php echo $news_image;?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                    <div class="mt-3">
                                        <h4><?php echo e($item->name); ?></h4>

                                        <p class="text-secondary mb-1"><?php echo e($item->email); ?></p>

                                        <p class="text-muted font-size-sm"><?php echo e($item->nationality); ?></p>
                                        <h6><?php echo e($item->profile_type); ?></h6>
                                        <p class="text-secondary mb-1">HP: <?php echo e($item->mobileNo); ?></p>

                                        <?php /*
                                        <button class="btn btn-primary">Send Email</button>
                                        <button class="btn btn-outline-primary">Send Notification</button>
                                        */?>

                                    </div>
                                </div>
                                <hr class="my-4" />
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Country</h6>
                                        <span class="text-secondary"><?php echo e($item->nationality); ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Gender</h6>
                                        <span class="text-secondary"><?php echo e($item->sex); ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Marital Status</h6>
                                        <span class="text-secondary"><?php echo e($item->maritalStatus); ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Date of Birth</h6>
                                        <span class="text-secondary"><?php echo e($item->dob); ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Height</h6>
                                        <span class="text-secondary"><?php echo e($item->height); ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Weight</h6>
                                        <span class="text-secondary"><?php if($item->weight>=1){ echo $item->weight . " Kg";} ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Country Live In</h6>
                                        <span class="text-secondary"><?php echo e($item->countryLiveIn); ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Device ID</h6>
                                        <span class="text-secondary"><?php echo e($item->device_id); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?php echo e(url('/admin/message/send')); ?>/<?php echo base64_encode($item->id);?>" class="btn btn-primary" style="float: right; margin:2em; width:200px;"><i class='bx bx-message-rounded'></i> Send Message </a>

                        </div>

                    </div>
                    <div class="col-lg-8">

                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Job Preferences</h5>
                                <?php //print_r($item); ?>
                              <?php $__currentLoopData = $item->getJobPreferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Job Industry</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($pre->industry); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Job Function</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($pre->function); ?></p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Country</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($pre->country); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">City</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($pre->city); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Type</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($pre->type); ?></p>
                                    </div>
                                </div>



                                <hr class="my-4">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Skill</h5>
                                <?php //print_r($item); ?>
                              <?php $__currentLoopData = $item->getSkill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Skill Name</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($skl->skillName); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Level</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($skl->skill_level); ?></p>
                                    </div>
                                </div>

                                <hr class="my-4">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Work Experience</h5>
                                <?php //print_r($item); ?>
                              <?php $__currentLoopData = $item->getExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"  style="font-weight: 600;">Post</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($exp->post); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"  style="font-weight: 600;">Company</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($exp->company); ?></p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3" >
                                        <p class="mb-0"  style="font-weight: 600;">Country</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($exp->country); ?></p>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"  style="font-weight: 600;">Duration</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($exp->startDate); ?> -- <?php echo e($exp->endDate); ?></p>
                                    </div>
                                </div>

                                <hr class="my-4">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </div>
                        </div>


                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Educations Information</h5>
                                <?php //print_r($item); ?>
                              <?php $__currentLoopData = $item->getEducation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Education Type </p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($edu->level); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">School/College</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($edu->school); ?></p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Country</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($edu->country); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Subject</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($edu->subject); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Duration</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($edu->startDate); ?> -- <?php echo e($edu->endDate); ?></p>
                                    </div>
                                </div>

                                <hr class="my-4">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </div>
                        </div>



                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Training & Certificate</h5>
                                <?php //print_r($item); ?>
                              <?php $__currentLoopData = $item->getTranings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Training Name </p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($trn->name); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Organization Name </p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($trn->org); ?></p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Country</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($trn->country); ?></p>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Duration</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($trn->startDate); ?> -- <?php echo e($trn->endDate); ?></p>
                                    </div>
                                </div>

                                <hr class="my-4">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </div>
                        </div>


                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Langueges</h5>
                                <?php //print_r($item); ?>
                              <?php $__currentLoopData = $item->getLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Language Name </p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($edu->language_name); ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Level</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p><?php echo e($edu->language_level); ?></p>
                                    </div>
                                </div>


                                <hr class="my-2">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </div>
                        </div>


                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Messages</h5>
                                <?php //print_r($item); ?>
                              <?php $__currentLoopData = $item->getPushMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Message </p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">

                                      <div class="alert alert-info border-0 bg-info alert-dismissible fade show py-2">
                                        <h6><?php echo e($msg->title); ?></h6>
                                        <p><?php echo e($msg->sub_title); ?></p>
                                        <strong><?php echo e($msg->message); ?></strong>
                                    </div>
                                    <p><?php echo e($msg->created_at->diffForHumans()); ?></p>
                                    </div>
                                </div>


                                <hr class="my-2">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/prabhu_jobs/web-app/job-web-app/resources/views/admin/resumeView.blade.php ENDPATH**/ ?>