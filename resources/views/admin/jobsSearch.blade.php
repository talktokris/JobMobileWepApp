@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Users</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-Language"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Search Users</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Users List</h6>
				<hr/>
				<div class="card">

                     <!---- allert message Start -->
                    @if(Session::has('flash_message_success'))
                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Success Alerts</h6>
                                <div class="text-white">{!! session('flash_message_success') !!} </div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Error Alerts</h6>
                                <div class="text-white">{!! session('flash_message_error') !!}</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <!---- allert message End -->

					<div class="card-body">



						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered dataTable" style="width:100%">

								<thead>
									<tr>
										<th>ID</th>
										<th>Info</th>
                                        <th>Type</th>

                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

									</tr>
								</thead>
								<tbody>

                                @foreach ($data as $item)

                                <?php $imageFindName=$item->image;
                                if($imageFindName==""){   $news_image= url('assets/images/jobs/av.png'); }
                                else {   $news_image= url('assets/images/jobs').'/'.$item->id.'/'.$item->image; } ?>

                                <?php  $homeStatus=$item->role;
                                        if($homeStatus==1){ $roleSting='<span class="badge bg-warning">Super Admin</span>';}
                                        elseif($homeStatus==2){ $roleSting='<span class="badge bg-danger">Admin</span>';}
                                        elseif($homeStatus==3){ $roleSting='<span class="badge bg-primay">Staff</span>';}
                                        elseif($homeStatus==4){ $roleSting='<span class="badge bg-secondary">Employer</span>';}

                                         $statusValue=$item->status;
                                        if($statusValue==1){ $statusSting='<span class="badge bg-success">Active</span>';}
                                        elseif($statusValue==0){ $statusSting='<span class="badge bg-secondary">Not Active</span>';} ?>
                                <tr>
                                    <td style="text-align: center;"><a href="<?php echo url('/admin/jobs/jobs-view/').'/'. base64_encode($item->id) ;?>"><img src="<?php echo $news_image ;?>"  style="width: 200px;" ></a><br/>
                                        <a href="{{ url('/admin/jobs-image-upload')}}/{{ base64_encode($item->id) }}" class="btn btn-warning" style="margin: 1em;">Change Image</a></td>
                                    <td style=""><h5>{{ $item->title}}</h5>
                                        {{ $item->subTitle}}<br>
                                       <strong> Type : </strong>{{ $item->jobCategory}}<br>
                                       <strong> Requirement : </strong>{{ $item->skillRequire}}<br>
                                       <strong> Location : </strong>{{ $item->location}}<br>
                                       <strong> Created Date : </strong>{{ $item->created_at->diffForHumans()}}<br>
                                       <strong> Expire Data : </strong>{{ $item->date_expire }}<br>
                                    </td>

                                    <td><?php echo $statusSting;?></td>

                                 <td><a href="<?php echo url('/admin/jobs/jobs-view').'/'. base64_encode($item->id) ;?>" class="btn btn-success"><i class="bx bx-show"></i></a></td>
                                 <td><a href="<?php echo url('/admin/jobs/edit').'/'. base64_encode($item->id) ;?>" class="btn btn-warning"><i class="bx bx-pencil"></i></a></td>
                                 <td><a href="<?php echo url('/admin/jobs/delete').'/'. base64_encode($item->id) ;?>" class="btn btn-danger"><i class="bx bx-trash"></i></a></td>
                                 <?php /*    <td style="">{{ $item->updated_at->diffForHumans()  }}</td> */?>

                                </tr>
                                @endforeach

								</tbody>
								<tfoot>
									<tr>
                                        <th>ID</th>
										<th>Info</th>
                                        <th>Type</th>

                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>




			</div>
		</div>





@endsection
