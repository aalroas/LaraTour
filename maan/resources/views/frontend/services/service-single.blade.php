@extends('frontend/app')

@section('main-content')
<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">


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

    <div class="page-wrapper page-detail bg-light">

        <div class="detail-header">

            <div class="container">

                <div class="d-flex flex-column flex-lg-row">

                    <div>
                        <h2 id="detail-content-sticky-nav-00" class="name">{{ $title }}</h2>




                        <div class="clear"></div>






                    </div>
                    <div class="ml-lg-auto text-left text-lg-right mt-20 mt-lg-0">

                        <div class="price"> <span> <span>{{ $service->price}}</span></span></div>

                    </div>

                </div>

            </div>

        </div>

        <span id="detail-content-sticky-nav-00" class="d-block"></span>

        <div class="fullwidth-horizon-sticky d-none d-lg-block">

            <div class="fullwidth-horizon-sticky-inner">

                <div class="container">



                </div>
            </div>
        </div>



        <div class="container">

            <div class="row gap-30">

                <div class="col-12 col-lg-12 col-xl-12">

                    <div class="content-wrapper">

                        <div class="slick-gallery-slideshow detail-gallery">

                            <div class="slider gallery-slideshow">

                                @foreach($service->service_images as $image => $value)

                                <div>
                                    <div class="image"><img style="height: 620px !important;"
                                            src="{{ URL::to('uploads/services',$service->service_images[$image]->service_image_path) }}"
                                            alt="{{ $title }}" /></div>
                                </div>

                                @endforeach




                            </div>
                            <div class="slider gallery-nav">



                                @foreach($service->service_images as $image => $value)

                                <div>
                                    <div class="image"><img style="height: 100px;width: 100px;"
                                            src="{{ URL::to('uploads/services',$service->service_images[$image]->service_image_path) }}"
                                            alt="{{ $title }}" /></div>
                                </div>

                                @endforeach


                            </div>

                        </div>

                        <div id="detail-content-sticky-nav-01" class="fullwidth-horizon-sticky-section">

                            <h3 class="heading-title"><span>{{ trans('frontend.overview') }}</span></h3>




                            {!! $text !!}


                        </div>

                        <div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

                            <h3 class="heading-title"><span>{{ trans('frontend.book_now') }}</span></h3>

                            <div class="change-search-wrapper">

                                <div class="alert alert-success d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>

                                <div class="row gap-10 gap-xl-20 align-items-end">




                                    <form id="contact_form4" action="javascript:void(0)" method="post">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="form_type" value="service Reservation">

                                        {{-- service --}}

                                        <div class="form-inner">

                                            <div class="row gap-10 mb-15 align-items-sm-center">

                                                <div class="col-12">
                                                    <div class="col-inner">
                                                        <div class="row gap-10 mb-15">

                                                            <div class="col-12 col-md-6">
                                                                <label>{{ trans('frontend.name') }}</label>
                                                                <div class="form-icon-left typeahead__container">
                                                                    <input type="text" name="name" id="name"
                                                                        class="form-control">
                                                                </div>


                                                            </div>




                                                            <div class="col-12 col-md-6">


                                                                <label>{{ trans('frontend.phone') }}</label>
                                                                <div class="form-icon-left typeahead__container">
                                                                    <input type="text" name="phone" id="phone"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>{{ trans('frontend.email') }}</label>
                                                        <div class="form-icon-left typeahead__container">
                                                            <span class="icon-font text-muted"><i
                                                                    class="bx bx-map"></i></span>
                                                            <input class="  form-control" name="email" type="text"
                                                                placeholder="" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>{{ trans('frontend.services') }}</label>
                                                        <select name="service_name" data-placeholder="Please select"
                                                            class="chosen-no-search form-control" tabindex="2">
                                                            <option></option>

                                                            @foreach ($services as $service)

                                                            @php

                                                            $title = "";
                                                            if (trans('frontend.code') =="en") {

                                                            $title= $service->title_en;
                                                            }elseif (trans('frontend.code') == "tr") {

                                                            $title= $service->title_tr;
                                                            }else {
                                                            $title= $service->title_ar;

                                                            }
                                                            @endphp
                                                            <option value="{{ $title }}">{{ $title }}</option>



                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-8 col-md-12">
                                                    <div class="col-inner">
                                                        <div class="row gap-10 mb-15">

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label>{{ trans('frontend.when') }}</label>
                                                                    <div class="form-icon-left">
                                                                        <span class="icon-font text-muted"><i
                                                                                class="bx bx-calendar"></i></span>
                                                                        <input name="service_date" type="text"
                                                                            class="form-control form-readonly-control air-datepicker"
                                                                            placeholder="{{ trans('frontend.pick_a_month')}}"
                                                                            data-min-view=" months" data-view="months"
                                                                            data-date-format="MM yyyy"
                                                                            data-language="en" data-auto-close="true"
                                                                            readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label>{{ trans('frontend.guests') }}</label>
                                                                    <div class="form-icon-left">
                                                                        <span class="icon-font text-muted"><i
                                                                                class="bx bx-user"></i></span>
                                                                        <input type="text" name="guests"
                                                                            class="form-control touch-spin-03 form-readonly-control"
                                                                            placeholder="0" readonly />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>



                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block" type="submit"
                                                        id="send_form4">{{ trans('frontend.reserve_now') }}
                                                    </button>
                                                </div>

                                            </div>

                                        </div>

                                    </form>






                                </div>

                            </div>


                        </div>



<div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

    <h3 class="heading-title"><span>{{ trans('frontend.comments') }}</span></h3>

    <div class="change-search-wrapper">

        <div class="alert alert-success d-none" id="msg_div">
            <span id="res_message"></span>
        </div>

        <div class="row gap-10 gap-xl-20 align-items-end">


 <div class="fb-comments" data-href="https://www.maantour61.com/" data-width="100%" data-numposts="10">
 </div>






        </div>

    </div>


</div>


                    </div>

                </div>



            </div>

            <div class="fullwidth-horizon-sticky border-0">&#032;</div> <!-- is used to stop the above stick menu -->

        </div>

    </div>



</div>
<!-- end Main Wrapper -->


<script>
    if ($("#contact_form4").length > 0) {
    $("#contact_form4").validate({

    rules: {
    name: {
    required: true,
    maxlength: 50
    },




    email: {
    required: true,
    maxlength: 50,
    email: true,
    },
    },
    messages: {

    name: {
    required: "Please enter name",
    maxlength: "Your last name maxlength should be 50 characters long."
    },




    email: {
    required: "Please enter valid email",
    email: "Please enter valid email",
    maxlength: "The email name should less than or equal to 50 characters",
    },

    },
    submitHandler: function(form) {
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('#send_form4').html('Sending..');
    $.ajax({
    url: '{{ url('contact/send_message') }}' ,
    type: "POST",
    data: $('#contact_form4').serialize(),
    success: function( response ) {
    $('#send_form4').html('Submit');
    $('#res_message').show();
    $('#res_message').html(response.msg);
    $('#msg_div').removeClass('d-none');

    document.getElementById("contact_form4").reset();
    setTimeout(function(){
    $('#res_message').hide();
    $('#msg_div').hide();
    },5000);
    }
    });
    }
    })
    }
</script>



@endsection
