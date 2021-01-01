@extends('admin.layouts.app')
@section('main-content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.dashboard') }}</h1>

                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body ">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i>
                            </div>
                            <div class="ml-4">
                            <a href="{{route('post.index')}}"><span>{{ trans('backend.posts')}}</span></a>
                                <h4 class="mb-0 font-weight-medium">{{ $posts }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-azura text-white rounded-circle"><i class="fa fa-credit-card"></i>
                            </div>
                            <div class="ml-4">

                                <a href="{{route('room.index')}}"><span>{{ trans('backend.room')}}</span></a>
                                <h4 class="mb-0 font-weight-medium">{{ $rooms }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i>
                            </div>
                            <div class="ml-4">

                                <a href="{{route('testimonial.index')}}"><span>{{ trans('backend.testimonials')}}</span></a>
                                <h4 class="mb-0 font-weight-medium">{{ $testimonials }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-pink text-white rounded-circle"><i class="fa fa-life-ring"></i>
                            </div>
                            <div class="ml-4">

                                <a href="{{route('tour.index')}}"><span>{{ trans('backend.tours')}}</span></a>
                            <h4 class="mb-0 font-weight-medium">{{ $tours }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body ">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg  bg-info text-white rounded-circle"><i class="fa fa-envelope"></i>
                            </div>
                            <div class="ml-4">
                           <a href="{{route('contact_forms.index')}}"><span>{{ trans('backend.contact_forms')}}</span></a>
                                <h4 class="mb-0 font-weight-medium">{{ $contact_forms }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-danger text-white rounded-circle"><i class="icon-screen-desktop"></i>
                            </div>
                            <div class="ml-4">

                                <a href="{{route('slider.index')}}"><span>{{ trans('backend.sliders')}}</span></a>
                                <h4 class="mb-0 font-weight-medium">{{ $sliders }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-warning text-white rounded-circle"><i class="fa fa-user"></i>
                            </div>
                            <div class="ml-4">

                                <a href="{{route('user.index')}}"><span>{{ trans('backend.users')}}</span></a>
                                <h4 class="mb-0 font-weight-medium">{{ $users }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-success text-white rounded-circle"><i class="fa fa-plane"></i>
                            </div>
                            <div class="ml-4">

                                <a href="{{route('service.index')}}"><span>{{ trans('backend.services')}}</span></a>
                                <h4 class="mb-0 font-weight-medium">{{ $services }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
