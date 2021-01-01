@extends('frontend/app')

@section('main-content')



<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">

   <div class="page-title-02 bg-image overlay-relative"
            style="background-image:url('{{asset('frontend/images/image-bg/01.jpg')}}');">
            <div class="overlay-holder opacity-5"></div>
            <div class="container">
                <h2>{{ trans('frontend.contact_us') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ URL('/')}}">{{ trans('frontend.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('frontend.contact') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    <div class="map-contact-wrapper">

        <div id="map" data-lat="{{ $contact->lat }}" data-lon="{{ $contact->long }}"
            style="width: 100%; height: 500px;"></div>

        <div class="infobox-wrapper contact-infobox">
            <div id="infobox">
                <div class="infobox-address">
                    <h6>{{ trans('frontend.we_are_here') }}</h6>
                </div>
            </div>
        </div>

    </div>

    <div class="page-wrapper bg-light pv-80">

        <div class="container">

            <div class="row gap-40">

                <div class="col-12 col-lg-8">

                    <div class="section-title">
                        <h3>{{ trans('frontend.get_in_touch') }}</h3>
                    </div>
                    <div class="alert alert-success d-none" id="msg_div">
                        <span id="res_message"></span>
                    </div>

                    <form action="javascript:void(0)" id="contact_form" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="form_type" value="Contact Us Form">



                        <div class="contact-successful-messages"></div>

                        <div class="contact-inner">

                            <div class="row gap-20 gap-lg-30 mb-20">
                                <div class="col-6">
                                    <div class="form-group mb-0">
                                        <label for="form_name">{{ trans('frontend.name') }} *</label>
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="{{ trans('frontend.name') }}" required="required"
                                            data-error="Name is required.">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-0">
                                        <label for="form_email">{{ trans('frontend.email') }} *</label>
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="{{ trans('frontend.email') }}" required="required"
                                            data-error="Valid email is required.">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-0">
                                        <label for="form_phone">{{ trans('frontend.phone') }}</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control"
                                            placeholder="{{ trans('frontend.phone') }}">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-0">
                                        <label for="form_subject">{{ trans('frontend.subject') }} *</label>
                                        <input id="form_subject" type="text" name="subject" class="form-control"
                                            placeholder="{{ trans('frontend.subject') }}" required="required"
                                            data-error="Subject is required.">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <label for="form_message">{{ trans('frontend.message') }} *</label>
                                        <textarea id="form_message" name="message" class="form-control"
                                            placeholder="{{ trans('frontend.message') }}" rows="6" required="required"
                                            data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-12">

                                    <button type="submit" id="send_form"
                                        class="btn btn-primary btn-send">{{ trans('frontend.send') }}</button>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>

                <div class="col-12 col-lg-4">

                    <div class="section-title">
                        <h3>{{ trans('frontend.contact_us') }} </h3>
                    </div>

                    <ul class="contact-list">

                        <li class="clearfix">
                            <div class="icon-font"><i class="bx bx-map-pin"></i></div>
                            <div class="content">
                                <h6>{{ trans('frontend.location') }}:</h6>
                                <a href="#">{{ GeneralSiteSettings("site_address_" .trans('frontend.boxCode'))}}</a></a>
                            </div>
                        </li>

                        <li class="clearfix">
                            <div class="icon-font"><i class="bx bx-phone-call"></i></div>
                            <div class="content">
                                <h6>{{ trans('frontend.phone') }}:</h6>
                                <a
                                    href="tel:{{ GeneralSiteSettings("site_phone")}}">{{ GeneralSiteSettings("site_phone")}}</a>
                            </div>
                        </li>

                        <li class="clearfix">
                            <div class="icon-font"><i class="bx bx-mobile"></i></div>
                            <div class="content">
                                <h6> {{ trans('frontend.mobile') }}:</h6>
                                <a
                                    href="tel:{{ GeneralSiteSettings("site_mobile")}}">{{ GeneralSiteSettings("site_mobile")}}</a>
                            </div>

                        </li>

                        <li class="clearfix">
                            <div class="icon-font"><i class="bx bx-envelope"></i></div>
                            <div class="content">
                                <h6>{{ trans('frontend.email') }}:</h6>
                                <a
                                    href="mailto:{{ GeneralSiteSettings("site_email")}}">{{ GeneralSiteSettings("site_email")}}</a>





                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- end Main Wrapper -->


<script>
    if ($("#contact_form").length > 0) {
                    $("#contact_form").validate({

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
                    $('#send_form').html('Sending..');
                    $.ajax({
                    url: '{{ url('contact/send_message') }}' ,
                    type: "POST",
                    data: $('#contact_form').serialize(),
                    success: function( response ) {
                    $('#send_form').html('Submit');
                    $('#res_message').show();
                    $('#res_message').html(response.msg);
                    $('#msg_div').removeClass('d-none');

                    document.getElementById("contact_form").reset();
                    setTimeout(function(){
                    $('#res_message').hide();
                    $('#msg_div').hide();
                    },1000);
                    }
                    });
                    }
                    })
                    }

</script>



@endsection
