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
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-news"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">New Users</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">

						<h6 class="mb-0 text-uppercase">Create New User</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
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


									<form class="row needs-validation" method="post" action="{{ url('admin/user/edit') }}/<?php echo base64_encode($newsData[0]->id);?>" >
                                    @csrf
                                        <div class="col-md-12 mb-3">
                                            <label for="name" class="form-label">Name :</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') ?? $newsData[0]->name }}" required="">

                                            @error('name')
                                            <div class="invalid-feedback">
                                        {{ $message }}
                                            </div>
                                            @enderror
                                        </div>


                                        <div class="col-md-12 mb-3">

											<label for="password" class="form-label">Password :</label>
											<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}" required="">

                                            @error('password')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">

											<label for="password_confirmation" class="form-label">Confirm password :</label>
											<input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" value="{{ old('password_confirmation') }}" required="">

                                            @error('password_confirmation')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
                                        </div>

										<div class="col-md-12 mb-3">

                                            <label for="validationTextarea" class="form-label">Post Status : </label>
                                            <select name="status" class="form-select" id="validationCustom04" required="">
                                                <?php if(old('status')){
                                                    if(old('status')==0){ $status_string='Pending';}
                                                    elseif(old('status')==1){ $status_string='Active';}
                                                    elseif($newsData[0]->status==1){ $status_string='Active';}
                                                    elseif($newsData[0]->status==0){ $status_string='Pending';}
                                                    else { $status_string='';}
                                                    ?>
                                                     <option value="<?php echo old('status') ?>"><?php echo $status_string ?></option>
                                                    <?php  }  ?>
                                            <option value="1">Active</option>
												<option value="0">Pending</option>


											</select>
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror



										</div>




										<div class="mb-3">
											<button class="btn btn-primary" type="submit">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!--end row-->
			</div>
		</div>





@endsection
