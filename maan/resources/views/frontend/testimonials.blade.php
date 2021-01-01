@extends('frontend/app')

@section('main-content')

<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">

 <div class="page-title-02 bg-image overlay-relative"
            style="background-image:url('{{asset('frontend/images/image-bg/01.jpg')}}');">
            <div class="overlay-holder opacity-5"></div>
            <div class="container">
                <h2>{{ trans('frontend.testimonials') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ URL('/')}}">{{ trans('frontend.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('frontend.testimonials') }}</li>
                    </ol>
                </nav>
            </div>
        </div>

    <section>






<section class="page-wrapper bg-light-primary">

                <div class="container">

                    <div class="row gap-20 gap-md-30 gap-xl-40">



                        <div class="col-12 col-lg-12">

                            <div class="content-wrapper">



                                <div class="row equal-height cols-1 cols-md-2 cols-lg-3 gap-10 gap-lg-20">




            @foreach ($testimonials as $testimonial)


            @php

            $testimonials_tilte = "";
            $testimonials_text="";
            if (trans('frontend.code') =="en") {

            $testimonials_tilte =$testimonial->title_en;
            $testimonials_text =$testimonial->text_en;

            }elseif (trans('frontend.code') == "tr") {

            $testimonials_tilte =$testimonial->title_tr;
            $testimonials_text =$testimonial->text_tr;
            }else {

            $testimonials_tilte =$testimonial->title_ar;
            $testimonials_text =$testimonial->text_ar;

            }
            @endphp





                                    <div class="col">

                                        <div class="product-grid-item">

                                        <a  onclick="changeVideo('{{$testimonial->url}}')" >


                                                <div class="image">
                                                    <img src="{{ URL::to('uploads/testimonials',$testimonial->image) }}" alt="{{ $testimonials_tilte }}">
                                                </div>

                                                <div class="content clearfix">

                                                    <div class="rating-item rating-sm rating-inline clearfix">

                                                    </div>
                                                   <p> <a onclick="changeVideo('{{ $testimonial->url }}')">{{ trans('frontend.play_video') }}</a> </p>
                                                    <div class="short-info">

                                                        <h6>{{ $testimonials_tilte }}</h6>

                                                        {{  $testimonials_text  }}

                                                        <p> <a onclick="changeVideo('{{ $testimonial->url }}')">{{ trans('frontend.play_video') }}</a> </p>



                                                    </div>
                                                </div>

                                            </a>

                                        </div>

                                    </div>

                                    <script>
                                                function changeVideo(vId){
                                                    var iframe=document.getElementById("iframeYoutube");
                                                    iframe.src=vId;
                                                    $("#myModal").modal("show");
                                                    }
                                            </script>

                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">

                                                            <iframe id="iframeYoutube" class="testvideo" src="" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">{{ trans('frontend.close') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    @endforeach




                                </div>

                                <div class="pager-wrappper mt-40">

                                    <div class="pager-innner">

                                        <div class="row align-items-center text-center text-md-left">



                                            <div class="col-12 col-md-7">
                                                {{-- <nav class="float-lg-right mt-10 mt-md-0">
            													<ul class="pagination justify-content-center justify-content-lg-left">
            														<li>
            															<a href="#" aria-label="Previous">
            																<span aria-hidden="true">&laquo;</span>
            															</a>
            														</li>


            														<li>
            															<a href="#" aria-label="Next">
            																<span aria-hidden="true">&raquo;</span>
            															</a>
            														</li>
            													</ul>
            												</nav> --}}
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
@endsection
