@extends('admin.layouts.master')
@section('title','Home')
@section('contents')


<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Send Message</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-news"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Message</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">

						<h6 class="mb-0 text-uppercase">Send New Message</h6>
						<hr/>
                        @foreach ($userData as $item)


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


									<form class="row needs-validation" method="post" action="{{ url('admin/message/send') }}/<?php echo base64_encode($item->id) ;?>" >
                                    @csrf
                                        <div class="col-md-12 mb-3">
                                            <label for="name" class="form-label">Name :</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $item->name }}" readonly>
                                            <input type="hidden" name="id" id="id" value="{{ $item->id }}">
                                            <input type="hidden" name="device_id"  id="device_id" value="{{ $item->device_id }}">

                                            @error('name')
                                            <div class="invalid-feedback">
                                        {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="name" class="form-label">Email :</label>
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $item->email }}" readonly>

                                            @error('email')
                                            <div class="invalid-feedback">
                                        {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">

											<label for="title" class="form-label">Title :</label>
											<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}">

                                            @error('title')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">

											<label for="password" class="form-label">Sub Title (Optional) :</label>
											<input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title" value="{{ old('sub_title') }}">

                                            @error('sub_title')
                                            <div class="invalid-feedback">
                                           {{ $message }}
                                            </div>
                                             @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">

											<label for="message" class="form-label">Message :</label>
                                            <textarea  name="message" class="form-control @error('message') is-invalid @enderror" id="message">{{ old('message') }}</textarea>
                                            @error('message')
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
                        @endforeach
					</div>

                    <div class="col-xl-6 mx-auto">

						<h6 class="mb-0 text-uppercase">Send New Message</h6>
						<hr/>
                        @foreach ($userData as $item)


						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">



                                    <?php
                                    $titleOne='New Job vacancy';
                                    $subTitleOne='New Job vacancy is posted ';
                                    $messageOne='Dear user,  New Job vacancy is posted on Job Agency Mobile Application. Please login and explore new jobs.';

                                    $titleTwo='Complete your profile';
                                    $subTitleTwo='Please complete your profile';
                                    $messageTwo='Dear user,  Please complete your resume to match your dream jobs. We are here to help archive your goal.';

                                    $titleThree='You are shortlisted';
                                    $subTitleThree='You are shortlisted for Job';
                                    $messageThree='Congratulations,  You are shortlisted for job. We will get in touch with you. Please update your latest contact information.';

                                    $titleFour='You are seleted';
                                    $subTitleFour='You are seleted for new job vacancy';
                                    $messageFour='Congratulations,  You are selected for job. We will get in touch with you. Please update your latest contact information.';


                                    ?>



                                        <div class="col-md-12 mb-3">
                                            <div style="border: 1px solid #eee; border-radius:10px; padding:10px">
                                                <h6><?php echo $titleOne ;?></h6>
                                                <p><?php echo $subTitleOne ;?></p>
                                                <strong><?php echo $messageOne ;?></strong>
                                                <div class="mt-3">
                                                    <button class="btn btn-primary" onclick="copyText('<?php echo $titleOne;?>', '<?php echo $subTitleOne;?>', '<?php echo $messageOne;?>')"><i class="bx bx-copy"></i> Copy</button>
                                                </div>
                                            </div>
                                        <hr>


                                            <div style="border: 1px solid #eee; border-radius:10px; padding:10px">
                                                <h6><?php echo $titleTwo ;?></h6>
                                                <p><?php echo $subTitleTwo ;?></p>
                                                <strong><?php echo $messageTwo ;?></strong>
                                                <div class="mt-3">
                                                    <button class="btn btn-primary" onclick="copyText('<?php echo $titleTwo;?>', '<?php echo $subTitleTwo;?>', '<?php echo $messageTwo;?>')"><i class="bx bx-copy"></i> Copy</button>
                                                </div>
                                            </div>


                                        </div>

                                        <hr>


                                            <div style="border: 1px solid #eee; border-radius:10px; padding:10px">
                                                <h6><?php echo $titleThree ;?></h6>
                                                <p><?php echo $subTitleThree ;?></p>
                                                <strong><?php echo $messageThree ;?></strong>
                                                <div class="mt-3">
                                                    <button class="btn btn-primary" onclick="copyText('<?php echo $titleThree;?>', '<?php echo $subTitleThree;?>', '<?php echo $messageThree;?>')"><i class="bx bx-copy"></i> Copy</button>
                                                </div>
                                            </div>


                                        </div>

                                        <hr>


                                            <div style="border: 1px solid #eee; border-radius:10px; padding:10px">
                                                <h6><?php echo $titleFour ;?></h6>
                                                <p><?php echo $subTitleFour ;?></p>
                                                <strong><?php echo $messageFour ;?></strong>
                                                <div class="mt-3">
                                                    <button class="btn btn-primary" onclick="copyText('<?php echo $titleFour;?>', '<?php echo $subTitleFour;?>', '<?php echo $messageFour;?>')"><i class="bx bx-copy"></i> Copy</button>
                                                </div>
                                            </div>


                                        </div>



									</form>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
				<!--end row-->
			</div>
		</div>





@endsection
