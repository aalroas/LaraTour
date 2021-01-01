@extends('frontend/app')

@section('main-content')

    @php
$page_name="";
$page_text = "";
$about_tilte = "";
$about_text="";
$award_tilte = "";
$award_text = "";
$team_tilte="";
$team_text = "";
$testimonials_tilte = "";
$testimonials_text="";
        if (trans('frontend.code') =="en") {
$page_name =$about->page_name_en;
$page_text =$about->page_text_en;
$about_tilte =$about->about_tilte_en;
$about_text =$about->about_text_en;
$award_tilte =$about->award_tilte_en;
$award_text =$about->award_text_en;
$team_tilte =$about->team_tilte_en;
$team_text =$about->team_text_en;
$testimonials_tilte =$about->testimonials_tilte_en;
$testimonials_text =$about->testimonials_text_en;

        }elseif (trans('frontend.code') == "tr") {
            $page_name =$about->page_name_tr;
            $page_text =$about->page_text_tr;
            $about_tilte =$about->about_tilte_tr;
            $about_text =$about->about_text_tr;
            $award_tilte =$about->award_tilte_tr;
            $award_text =$about->award_text_tr;
            $team_tilte =$about->team_tilte_tr;
            $team_text =$about->team_text_tr;
            $testimonials_tilte =$about->testimonials_tilte_tr;
            $testimonials_text =$about->testimonials_text_tr;
        }else {
            $page_name =$about->page_name_ar;
            $page_text =$about->page_text_ar;
            $about_tilte =$about->about_tilte_ar;
            $about_text =$about->about_text_ar;
            $award_tilte =$about->award_tilte_ar;
            $award_text =$about->award_text_ar;
            $team_tilte =$about->team_tilte_ar;
            $team_text =$about->team_text_ar;
            $testimonials_tilte =$about->testimonials_tilte_ar;
            $testimonials_text =$about->testimonials_text_ar;

         }
        @endphp

<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">

<div class="page-title-02 bg-image overlay-relative"
            style="background-image:url('{{asset('frontend/images/image-bg/01.jpg')}}');">
            <div class="overlay-holder opacity-5"></div>
            <div class="container">
                <h2>{{ trans('frontend.about_us') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ URL('/')}}">{{ trans('frontend.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('frontend.about_us') }}</li>
                    </ol>
                </nav>
            </div>
        </div>

    <div class="page-wrapper zero">

        <section>

            <div class="container">

                <div class="image mb-50"><img src="{{ URL::to('uploads/about/')}}/{{ $about->page_image }}" alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></div>

                <div class="row gap-30 gap-lg-40">

                    <div class="col-12 col-lg-8">

                        <div class="col-inner">

                            <h3>{{ $about_tilte }}</h3>
                            {!! $about_text !!}
                        </div>

                    </div>

                    <div class="col-12 col-lg-4">

                        <div class="col-inner">

                            <div class="image"><img src="{{ URL::to('uploads/about/')}}/{{ $about->about_image }}" alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></div>

                        </div>

                    </div>

                </div>

                <div class="mb-50"></div>



            </div>

        </section>

        <div class="ph-10 ph-md-30">

            <div class="counting-wrapper-02 bg-image text-white" data-dark-overlay="5"
                style="background-image:url('{{asset('frontend/images/image-bg/a-04.jpg')}}');">

                <div class="container">

                    <div class="row cols-1 cols-sm-1 cols-lg-2 gap-30">

                        <div class="col">

                            <div class="col-inner">

                                <h1 class="text-white font400 line-125 font-serif">{{ $award_tilte }}
                                </h1>

                            </div>

                        </div>

                        <div class="col">

                            <div class="col-inner">

                                <div class="row equal-height cols-1 gap-30 gap-lg-50">

                                    <div class="col">

                                        <div class="item-counting-02 clearfix">

                                            <div class="counting-inner">

                                                <div class="counting-number">
                                                    <span class="counter" data-decimal-delimiter=","
                                                        data-thousand-delimiter="," data-value="{{ $about->projects}}"></span>
                                                    <span class="counting-label">{{ $team_tilte}}</span>
                                                </div>
                                                <div class="counting-content">
                                                {!! $team_text !!}
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col">

                                        <div class="item-counting-02 clearfix">

                                            <div class="counting-inner">

                                                <div class="counting-number">
                                                    <span class="counter" data-decimal-delimiter=","
                                                        data-thousand-delimiter="," data-value="{{ $about->customers}}"></span>
                                                    <span class="counting-label">{{ $testimonials_tilte}}</span>
                                                </div>
                                                <div class="counting-content">
                                        {!! $testimonials_text !!}

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col">

                                        <div class="item-counting-02 clearfix">

                                            <div class="counting-inner">

                                                <div class="counting-number">
                                                    <span class="counter" data-decimal-delimiter=","
                                                        data-thousand-delimiter="," data-value="{{ $about->hours }}"></span>
                                                    <span class="counting-label">{{ $page_name }}</span>
                                                </div>
                                                <div class="counting-content">

                                                    {!! $page_text !!}
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>

</div>
<!-- end Main Wrapper -->

<br><br>

@endsection
