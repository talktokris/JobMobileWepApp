@extends('admin.layouts.master')
@section('title','Home')
@section('contents')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        @foreach ($data as $item)
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
                                        <h4>{{ $item->name}}</h4>

                                        <p class="text-secondary mb-1">{{ $item->email}}</p>

                                        <p class="text-muted font-size-sm">{{ $item->nationality}}</p>
                                        <h6>{{ $item->profile_type}}</h6>
                                        <p class="text-secondary mb-1">HP: {{ $item->mobileNo}}</p>

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
                                        <span class="text-secondary">{{ $item->nationality}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Gender</h6>
                                        <span class="text-secondary">{{ $item->sex}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Marital Status</h6>
                                        <span class="text-secondary">{{ $item->maritalStatus}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Date of Birth</h6>
                                        <span class="text-secondary">{{ $item->dob}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Height</h6>
                                        <span class="text-secondary">{{ $item->height}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Weight</h6>
                                        <span class="text-secondary"><?php if($item->weight>=1){ echo $item->weight . " Kg";} ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Country Live In</h6>
                                        <span class="text-secondary">{{ $item->countryLiveIn}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Device ID</h6>
                                        <span class="text-secondary">{{ $item->device_id}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Job Preferences</h5>
                                <?php //print_r($item); ?>
                              @foreach ($item->getJobPreferences as $pre)
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Job Industry</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $pre->industry}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Job Function</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $pre->function}}</p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Country</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $pre->country}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">City</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $pre->city}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Type</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $pre->type}}</p>
                                    </div>
                                </div>



                                <hr class="my-4">
                                @endforeach



                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Skill</h5>
                                <?php //print_r($item); ?>
                              @foreach ($item->getSkill as $skl)
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Skill Name</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $skl->skillName}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Level</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $skl->skill_level}}</p>
                                    </div>
                                </div>

                                <hr class="my-4">
                                @endforeach



                            </div>
                        </div>

                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Work Experience</h5>
                                <?php //print_r($item); ?>
                              @foreach ($item->getExperiences as $exp)
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"  style="font-weight: 600;">Post</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $exp->post}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"  style="font-weight: 600;">Company</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $exp->company}}</p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3" >
                                        <p class="mb-0"  style="font-weight: 600;">Country</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $exp->country}}</p>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"  style="font-weight: 600;">Duration</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $exp->startDate}} -- {{ $exp->endDate}}</p>
                                    </div>
                                </div>

                                <hr class="my-4">
                                @endforeach



                            </div>
                        </div>


                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Educations Information</h5>
                                <?php //print_r($item); ?>
                              @foreach ($item->getEducation as $edu)
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Education Type </p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $edu->level}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">School/College</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $edu->school}}</p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Country</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $edu->country}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Subject</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $edu->subject}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Duration</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $edu->startDate}} -- {{ $edu->endDate}}</p>
                                    </div>
                                </div>

                                <hr class="my-4">
                                @endforeach



                            </div>
                        </div>



                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Training & Certificate</h5>
                                <?php //print_r($item); ?>
                              @foreach ($item->getTranings as $trn)
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Training Name </p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $trn->name}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Organization Name </p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $trn->org}}</p>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Country</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $trn->country}}</p>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Duration</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $trn->startDate}} -- {{ $trn->endDate}}</p>
                                    </div>
                                </div>

                                <hr class="my-4">
                                @endforeach



                            </div>
                        </div>


                        <div class="card">

                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Langueges</h5>
                                <?php //print_r($item); ?>
                              @foreach ($item->getLanguages as $edu)
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Language Name </p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $edu->language_name}}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0" style="font-weight: 600;">Level</p>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <p>{{ $edu->language_level}}</p>
                                    </div>
                                </div>


                                <hr class="my-2">
                                @endforeach



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
