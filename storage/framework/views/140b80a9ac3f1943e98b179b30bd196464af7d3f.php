<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('contents'); ?>


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Message</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-Language"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Search Messages</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Message List</h6>
				<hr/>
				<div class="card">

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

					<div class="card-body">



						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered dataTable" style="overflow-x: scroll; overflow-y: scroll; max-width: 90%; display: block; white-space: word-wrap: break-word;" >

								<thead>
									<tr>
										<th>ID</th>
										<th>User Info</th>
                                        <th>Message Info</th>
                                        <th>Date</th>
									</tr>
								</thead>
								<tbody>

                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                <tr>
                                    <td style=""><?php echo e($item->id); ?> </td>


                                    <td style="">



                                        <h5><?php echo e($item->Title); ?></h5>
                                       <br>
                                       <strong> Title : </strong><?php echo e($item->title); ?><br>
                                       <strong> Sub Title : </strong><?php echo e($item->sub_title); ?><br>
                                       <strong> Device ID : </strong><?php echo e($item->device_id); ?><br>




                                       <strong> Name : </strong><?php echo e($item->geMessageIdInfo->name); ?><br>
                                       <strong> Email : </strong><?php echo e($item->geMessageIdInfo->email); ?><br>

                                    </td>

                                    <td style="">  <?php echo wordwrap($item->message,70,"<br>"); ?>  </td>
                                    <td style=""><?php echo e($item->created_at->diffForHumans()); ?> </td>


                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</tbody>
								<tfoot>
									<tr>
                                        <th>ID</th>
										<th>User Info</th>
                                        <th>Message Info</th>
                                        <th>Date</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>




			</div>
		</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/prabhu_jobs/web-app/job-web-app/resources/views/admin/messageSearch.blade.php ENDPATH**/ ?>