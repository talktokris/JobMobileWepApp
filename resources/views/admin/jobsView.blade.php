@extends('admin.layouts.master')
@section('title','Home')
@section('contents')

<div class="page-wrapper">
    <div class="page-content">
        @foreach ($data as $item)
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Jobs</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Job Ads Details</li>

                    </ol>

                </nav>
            </div>

        </div>

        <!--end breadcrumb-->

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
            <div class="row g-0">

                <div class="col-md-4 border-end" style="text-align: center; padding:2em;">

                <img src="<?php echo $news_image;?>" class="img-fluid" alt="...">
                <hr/>
                <a href="{{ url('/admin/jobs-image-upload')}}/{{ base64_encode($item->id) }}" class="btn btn-warning" style="margin: 1em;">Change Image</a>
                <hr/>
                <dl class="row">

                    <dt class="col-sm-5">Posted Date :</dt>
                    <dd class="col-sm-7">{{$item->created_at->diffForHumans()}} </dd>

                    <dt class="col-sm-5">Expired Date :</dt>
                    <dd class="col-sm-7">{{$item->date_expire}} </dd>
                  </dl>

              </div>
              <div class="col-md-8">
            <a href="<?php echo url('/admin/jobs/edit/').'/'. base64_encode($item->id) ;?>" class="btn btn-warning" style="float: right; width:100px; "><i class="bx bx-pencil"></i></a>

                <div class="card-body">
                  <h4 class="card-title">{{ $item->title }}</h4>
                  <p class="card-text fs-6">{{$item->subTitle}}</p>
                  <div class="d-flex gap-3 py-3">

                    <div class="text-success"><i class='bx bxs-check-users align-middle'></i> {{ $item->vacancies}} Vacancies</div> <div class="text-danger"><i class='bx bxs-heart align-middle'></i> {{$item->getFavInfo->count()}} Favorites listed</div>
                      <div class="text-success"><i class='bx bxs-check-square align-middle'></i> {{ $item->getJobApplyUsers->count()}} Job Applied</div>
                  </div>
                  <div class="mb-3">
                    <span class="price h4">Max : {{$item->currency}} {{$item->salleryMax}}</span>
                    <span class="text-muted">/Month </span>
                </div>
                <div class="mb-3">
                    <span class="price h4">Min : {{$item->currency}} {{$item->salleryMin}}</span>
                    <span class="text-muted">/Month </span>
                </div>

                  <dl class="row">
                    <dt class="col-sm-3">Job Category :</dt>
                    <dd class="col-sm-9">{{$item->jobCategory}}</dd>

                    <dt class="col-sm-3">Education :</dt>
                    <dd class="col-sm-9">{{$item->education}}</dd>

                    <dt class="col-sm-3">Skill Require :</dt>
                    <dd class="col-sm-9">{{$item->skillRequire}} </dd>

                    <dt class="col-sm-3">Location :</dt>
                    <dd class="col-sm-9">{{$item->location}} </dd>


                  </dl>



                </div>
              </div>
            </div>
            <hr/>
            <div class="card-body">


                <h4 class="card-title">Job Description    </h4>
                <div class="col-md-9" style="height: 50px;">
                    <a href="<?php echo url('/admin/jobs/jobs-description').'/'. base64_encode($item->id) ;?>" class="btn btn-warning" style="float: right; width:100px; "><i class="bx bx-plus"></i> Add</a>
                </div>
                <div class="col-md-9">
                <div class="tab-pane">
                    @foreach ($item->getJobDescription as $pro)
                    <ul class="list-group">
                    <li class="list-group-item">{{ $pro->title}}
                    <a href="<?php echo url('/admin/jobs-description/delete').'/'. base64_encode($item->id).'/'.base64_encode($pro->id) ;?>" class="btn btn-danger" style="float: right; width:50px; "><i class="bx bx-trash"></i></a>


                    </ul>
                    @endforeach
                </div>
            </div>


                <hr/>

                <h4 class="card-title">Job Specification   </h4>

                <div class="col-md-9" style="height: 50px;">
                    <a href="<?php echo url('/admin/jobs/jobs-specification').'/'. base64_encode($item->id) ;?>" class="btn btn-warning" style="float: right; width:100px; "><i class="bx bx-plus"></i> Add</a>
                </div>
                <div class="col-md-9">
                    <div class="tab-pane"  style="margin-bottom: 5em;">
                    <ul class="list-group">
                        @foreach ($item->getJobSpecification as $pro)
                        <li class="list-group-item">{{ $pro->title}}
                    <a href="<?php echo url('/admin/jobs-specification/delete').'/'. base64_encode($item->id).'/'.base64_encode($pro->id) ;?>" class="btn btn-danger" style="float: right; width:50px; "><i class="bx bx-trash"></i></a>

                        @endforeach
                    </ul>
             </div>
            </div>
             <hr/>

                <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-check-square font-18 me-1'></i>
                                </div>
                                <div class="tab-title">{{ $Applydata->count()}} Job Applied  Users </div>


                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-heart font-18 me-1'></i>
                                </div>
                                <div class="tab-title">{{ $Favdata->count()}} Favorites  Listed Users</div>
                            </div>
                        </a>
                    </li>

                </ul>
                <div class="tab-content pt-3">
                    <div  class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                        @foreach($Applydata as $apData)



                    <?php  $id = $apData->getApplyIdInfo->id;

                    $imageFindNameOne=$apData->getApplyIdInfo->image;


                    if($imageFindNameOne==""){   $news_image_one= url('assets/images/members/av.png'); }
                    else {   $news_image_one= url('assets/images/members').'/'.$apData->getApplyIdInfo->id.'/'.$apData->getApplyIdInfo->image; } ?>

                        <a href="{{ url ('admin/resumes/view') }}/<?php echo base64_encode($id);?>"  target="_blank" >
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo $news_image_one ;?>" class="rounded-circle p-1 border" alt="..." width="90" height="90">
                                <div class="flex-grow-1 ms-3">

                                    <h5 class="mt-0">{{ $apData->getApplyIdInfo->name}}</h5>
                                    <p class="mb-0"><strong>Sex: </strong> {{ $apData->getApplyIdInfo->sex}}</p>
                                    <p class="mb-0"><strong>Country: </strong> {{ $apData->getApplyIdInfo->country}}</p>

                                </div>
                            </div>
                        </div>
                    </a>
                        <hr/>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                        @foreach($Favdata as $fbData)

                        <?php  $id = $fbData->getMemberInfo->id;

                       $imageFindName=$fbData->getMemberInfo->image;


                        if($imageFindName==""){   $news_image= url('assets/images/members/av.png'); }
                        else {   $news_image= url('assets/images/members').'/'.$fbData->getMemberInfo->id.'/'.$fbData->getMemberInfo->image; } ?>
                        <a href="{{ url ('admin/resumes/view') }}/<?php echo base64_encode($id);?>" target="_blank">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo $news_image ;?>" class="rounded-circle p-1 border" alt="..." width="90" height="90">
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mt-0">{{ $fbData->getMemberInfo->name}}</h5>
                                    <p class="mb-0"><strong>Sex: </strong> {{ $fbData->getMemberInfo->sex}}</p>
                                    <p class="mb-0"><strong>Country: </strong> {{ $fbData->getMemberInfo->country}}</p>

                                </div>
                            </div>
                        </div>
                    </a>
                        <hr/>

                        @endforeach
                    </div>

                </div>
            </div>

          </div>




               @endforeach
    </div>
</div>


@endsection
