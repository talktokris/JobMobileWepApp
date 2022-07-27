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
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-news"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">New Job</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">

						<h6 class="mb-0 text-uppercase">Create Job Ad</h6>
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


									<form class="row needs-validation" method="post" action="{{ url('/admin/jobs/create-job') }}" >
                                    @csrf
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03" class="form-label">Title :</label>
                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="validationCustom03" value="{{ old('title') }}" required="">

                                            @error('title')
                                            <div class="invalid-feedback">
                                        {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">

											<label for="validationCustom03" class="form-label">Sub Title :</label>
											<input type="text" name="subTitle" class="form-control @error('subTitle') is-invalid @enderror" id="validationCustom03" value="{{ old('subTitle') }}" required="">

                                            @error('subTitle')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
                                        </div>

										<div class="col-md-3 mb-3">
											<label for="validationTextarea" class="form-label">Vacancies : </label>
											<input type="text" name="vacancies" class="form-control @error('vacancies') is-invalid @enderror" id="validationCustom03" value="{{ old('vacancies') }}" required="">

                                            @error('vacancies')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>

                                        <div class="col-md-3 mb-3">
											<label for="validationTextarea" class="form-label">Currency : </label>
											<input type="text" name="currency" class="form-control @error('currency') is-invalid @enderror" id="validationCustom03" value="{{ old('currency') }}" required="">

                                            @error('currency')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>

                                        <div class="col-md-3 mb-3">
											<label for="validationTextarea" class="form-label">Sallery Min : </label>
											<input type="text" name="salleryMin" class="form-control @error('salleryMin') is-invalid @enderror" id="validationCustom03" value="{{ old('salleryMin') }}" required="">

                                            @error('salleryMin')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>




                                        <div class="col-md-3 mb-3">
											<label for="validationTextarea" class="form-label">Sallery Max : </label>
											<input type="text" name="salleryMax" class="form-control @error('salleryMax') is-invalid @enderror" id="validationCustom03" value="{{ old('salleryMax') }}" required="">
                                            @error('salleryMax')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>

                                        <div class="col-md-4 mb-3">
											<label for="validationTextarea" class="form-label">Job Category : </label>
											<input type="text" name="jobCategory" class="form-control @error('jobCategory') is-invalid @enderror" id="validationCustom03" value="{{ old('jobCategory') }}" required="">
                                            @error('jobCategory')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>

                                        <div class="col-md-4 mb-3">
											<label for="validationTextarea" class="form-label">Education Required : </label>
											<input type="text" name="education" class="form-control @error('education') is-invalid @enderror" id="validationCustom03" value="{{ old('education') }}" required="">
                                            @error('education')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>

                                        <div class="col-md-4 mb-3">
											<label for="validationTextarea" class="form-label">Skill Required : </label>
											<input type="text" name="skillRequire" class="form-control @error('skillRequire') is-invalid @enderror" id="validationCustom03" value="{{ old('skillRequire') }}" required="">
                                            @error('salleryMax')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>

                                        <div class="col-md-4 mb-3">
											<label for="validationTextarea" class="form-label">Job Location : </label>
											<input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="validationCustom03" value="{{ old('location') }}" required="">
                                            @error('location')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>


                                        <div class="col-md-4 mb-3">
											<label for="validationTextarea" class="form-label">Expire After : </label>
                                            <select name="date_expire" class="form-select" id="validationCustom04" required="">
                                                <?php /* if(old('date_expire')){
                                                   $status_string = old('date_expire');
                                                    ?>
                                                     <option value="<?php echo old('date_expire') ?>"><?php echo $date_expire ?></option>
                                                    <?php  }  */ ?>
                                            <option value="1"> After 1 Week</option>
											<option value="2">After 2 Weeks</option>
                                            <option value="3">After 3 Weeks</option>
                                            <option value="4">After 4 Weeks</option>
                                            <option value="5">After 5 Weeks</option>
                                            <option value="6">After 6 Weeks</option>
                                            <option value="7">After 7 Weeks</option>
                                            <option value="8">After 8 Weeks</option>
                                            <option value="9">After 9 Weeks</option>
                                            <option value="10">After 10 Weeks</option>
                                            <option value="11">After 11 Weeks</option>
                                            <option value="12">After 12 Weeks</option>
	                                        </select>

                                            @error('date_expire')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                             @enderror
										</div>

										<div class="col-md-4 mb-3">
											<label for="validationTextarea" class="form-label">Post Status : </label>
                                            <select name="status" class="form-select" id="validationCustom04" required="">
                                                <?php if(old('status')){
                                                    if(old('status')==0){ $status_string='Draft';}
                                                    elseif(old('status')==1){ $status_string='Publish';}
                                                    else { $status_string='';}
                                                    ?>
                                                     <option value="<?php echo old('status') ?>"><?php echo $status_string ?></option>
                                                    <?php  }  ?>
                                            <option value="0">Draft</option>
												<option value="1">Publish</option>


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
