@extends('frontend/app')

@section('main-content')
<!-- start Main Wrapper -->
    <div class="main-wrapper scrollspy-action">

       <div class="page-title-02 bg-image overlay-relative"
                style="background-image:url('{{asset('frontend/images/image-bg/01.jpg')}}');">
                <div class="overlay-holder opacity-5"></div>
                <div class="container">
                    <h2>{{ trans('frontend.our_services') }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL('/')}}">{{ trans('frontend.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('frontend.services') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

        <div class="page-wrapper zero">

            <section>

                <div class="container">

                    <div class="row equal-height cols-1 cols-sm-2 cols-lg-3 gap-10 gap-md-30">

@foreach ($services as $service)
    @php
    $title = "";
    $text = "";
    if (trans('frontend.code') =="en") {
    $title= $service->title_en;
    $text= $service->text_en;
    }elseif (trans('frontend.code') == "tr") {
    $title= $service->title_tr;
    $text= $service->text_tr;
    }else {
    $title= $service->title_ar;
    $text= $service->text_ar;

    }
    @endphp





                        <div class="col">

                            <div class="product-grid-item">

                                <a href="{{ URL("/services/service/".$service->slug) }}">

                                    <div class="image">
                                        <img src="{{ URL("uploads/services/".$service->image)}}" alt="{{ $title }}" alt="{{ $title }}">
                                    </div>

                                    <div class="content clearfix">

                                        <div class="rating-item rating-sm rating-inline clearfix">

                                        </div>

                                        <div class="short-info">

                                            <h6>{{ $title }}</h6>

                                        </div>
                                        <div class="price">
                                            <div class="float-right">
                                                <span class="text-secondary">{{$service->price}}</span>
                                            </div>
                                        </div>


                                    </div>

                                </a>

                            </div>

                        </div>


                        @endforeach



                    </div>

                </div>

            </section>



        </div>

    </div>
    <!-- end Main Wrapper -->

@endsection
