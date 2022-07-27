@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Jobs</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-photo-album"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Upload Image</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
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
					<div class="col-xl-6 mx-auto">


						<h6 class="mb-0 text-uppercase">Upload New Images to Job</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">


                                        @foreach ($News_listData as $item)
                                        <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{ url('admin/jobs-image-upload') }}/{{ $hash_id}}" >
                                            @csrf
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Job Title</label>
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="validationCustom03" value="{{ $item->title }}" readonly>

                                            </div>

										<div class="mb-3">
											<label for="validationCustom02" class="form-label">Upload Image</label>
                                            <input name="hash_id" value="{{ $hash_id }}" type="hidden">

											<input name="image_name" type="file"  class="form-control  @error('phone_four') is-invalid @enderror" aria-label="file example" required>
                                            @error('image_name')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
										</div>
										<div class="mb-3">
											<button class="btn btn-primary" type="submit">Upload</button>
										</div>
									</form>
                                    @endforeach
								</div>
							</div>
						</div>

					</div>
				</div>
				<!--end row-->
			</div>
		</div>





@endsection
