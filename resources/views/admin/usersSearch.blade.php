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
										<th>Name</th>

                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Created</th>

									</tr>
								</thead>
								<tbody>

                                @foreach ($data as $item)

                                <?php $imageFindName=$item->thumbnail_img;
                                if($imageFindName==""){   $Language_image= url('assets/images/Language/no-Language.png'); }
                                else {   $Language_image= url('assets/images/Language').'/'.$item->id.'/'.$item->thumbnail_img; } ?>

                                <?php  $homeStatus=$item->role;
                                        if($homeStatus==1){ $roleSting='<span class="badge bg-warning">Super Admin</span>';}
                                        elseif($homeStatus==2){ $roleSting='<span class="badge bg-danger">Admin</span>';}
                                        elseif($homeStatus==3){ $roleSting='<span class="badge bg-primay">Staff</span>';}
                                        elseif($homeStatus==4){ $roleSting='<span class="badge bg-secondary">Employer</span>';}

                                         $statusValue=$item->status;
                                        if($statusValue==1){ $statusSting='<span class="badge bg-success">Active</span>';}
                                        elseif($statusValue==0){ $statusSting='<span class="badge bg-secondary">Not Active</span>';}?>
                                <tr>
                                    <td style="text-align: center;">{{ $item->id}}</td>
                                    <td style="">{{ $item->name}}</td>
                                    <td style="">{{ $item->email}}</td>
                                    <td style=""><?php echo $roleSting;?></td>
                                    <td><?php echo $statusSting;?></td>
                                 <td><a href="<?php echo url('/admin/user/edit').'/'. base64_encode($item->id) ;?>" class="btn btn-warning"><i class="bx bx-pencil"></i></a></td>
                                 <td style="">{{ $item->created_at->diffForHumans()  }}</td>
                                 <?php /*    <td style="">{{ $item->updated_at->diffForHumans()  }}</td> */?>

                                </tr>
                                @endforeach

								</tbody>
								<tfoot>
									<tr>
                                        <th>ID</th>
										<th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Created</th>

									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>




			</div>
		</div>





@endsection
