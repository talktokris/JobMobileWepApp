@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


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

                                @foreach ($data as $item)



                                <tr>
                                    <td style="">{{ $item->id}} </td>


                                    <td style="">



                                        <h5>{{ $item->Title}}</h5>
                                       <br>
                                       <strong> Title : </strong>{{ $item->title}}<br>
                                       <strong> Sub Title : </strong>{{ $item->sub_title}}<br>
                                       <strong> Device ID : </strong>{{ $item->device_id}}<br>




                                       <strong> Name : </strong>{{ $item->geMessageIdInfo->name}}<br>
                                       <strong> Email : </strong>{{ $item->geMessageIdInfo->email}}<br>

                                    </td>

                                    <td style="">  <?php echo wordwrap($item->message,70,"<br>"); ?>  </td>
                                    <td style="">{{ $item->created_at->diffForHumans()}} </td>


                                </tr>
                                @endforeach

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





@endsection
