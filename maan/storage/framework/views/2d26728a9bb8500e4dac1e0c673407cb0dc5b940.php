<?php $__env->startSection('main-content'); ?>



<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">

   <div class="page-title-02 bg-image overlay-relative"
            style="background-image:url('<?php echo e(asset('frontend/images/image-bg/01.jpg')); ?>');">
            <div class="overlay-holder opacity-5"></div>
            <div class="container">
                <h2><?php echo e(trans('frontend.contact_us')); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(URL('/')); ?>"><?php echo e(trans('frontend.home')); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('frontend.contact')); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    <div class="map-contact-wrapper">

        <div id="map" data-lat="<?php echo e($contact->lat); ?>" data-lon="<?php echo e($contact->long); ?>"
            style="width: 100%; height: 500px;"></div>

        <div class="infobox-wrapper contact-infobox">
            <div id="infobox">
                <div class="infobox-address">
                    <h6><?php echo e(trans('frontend.we_are_here')); ?></h6>
                </div>
            </div>
        </div>

    </div>

    <div class="page-wrapper bg-light pv-80">

        <div class="container">

            <div class="row gap-40">

                <div class="col-12 col-lg-8">

                    <div class="section-title">
                        <h3><?php echo e(trans('frontend.get_in_touch')); ?></h3>
                    </div>
                    <div class="alert alert-success d-none" id="msg_div">
                        <span id="res_message"></span>
                    </div>

                    <form action="javascript:void(0)" id="contact_form" method="post">
                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="form_type" value="Contact Us Form">



                        <div class="contact-successful-messages"></div>

                        <div class="contact-inner">

                            <div class="row gap-20 gap-lg-30 mb-20">
                                <div class="col-6">
                                    <div class="form-group mb-0">
                                        <label for="form_name"><?php echo e(trans('frontend.name')); ?> *</label>
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="<?php echo e(trans('frontend.name')); ?>" required="required"
                                            data-error="Name is required.">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-0">
                                        <label for="form_email"><?php echo e(trans('frontend.email')); ?> *</label>
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="<?php echo e(trans('frontend.email')); ?>" required="required"
                                            data-error="Valid email is required.">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-0">
                                        <label for="form_phone"><?php echo e(trans('frontend.phone')); ?></label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control"
                                            placeholder="<?php echo e(trans('frontend.phone')); ?>">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-0">
                                        <label for="form_subject"><?php echo e(trans('frontend.subject')); ?> *</label>
                                        <input id="form_subject" type="text" name="subject" class="form-control"
                                            placeholder="<?php echo e(trans('frontend.subject')); ?>" required="required"
                                            data-error="Subject is required.">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <label for="form_message"><?php echo e(trans('frontend.message')); ?> *</label>
                                        <textarea id="form_message" name="message" class="form-control"
                                            placeholder="<?php echo e(trans('frontend.message')); ?>" rows="6" required="required"
                                            data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                </div>
                                <div class="col-12">

                                    <button type="submit" id="send_form"
                                        class="btn btn-primary btn-send"><?php echo e(trans('frontend.send')); ?></button>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>

                <div class="col-12 col-lg-4">

                    <div class="section-title">
                        <h3><?php echo e(trans('frontend.contact_us')); ?> </h3>
                    </div>

                    <ul class="contact-list">

                        <li class="clearfix">
                            <div class="icon-font"><i class="bx bx-map-pin"></i></div>
                            <div class="content">
                                <h6><?php echo e(trans('frontend.location')); ?>:</h6>
                                <a href="#"><?php echo e(GeneralSiteSettings("site_address_" .trans('frontend.boxCode'))); ?></a></a>
                            </div>
                        </li>

                        <li class="clearfix">
                            <div class="icon-font"><i class="bx bx-phone-call"></i></div>
                            <div class="content">
                                <h6><?php echo e(trans('frontend.phone')); ?>:</h6>
                                <a
                                    href="tel:<?php echo e(GeneralSiteSettings("site_phone")); ?>"><?php echo e(GeneralSiteSettings("site_phone")); ?></a>
                            </div>
                        </li>

                        <li class="clearfix">
                            <div class="icon-font"><i class="bx bx-mobile"></i></div>
                            <div class="content">
                                <h6> <?php echo e(trans('frontend.mobile')); ?>:</h6>
                                <a
                                    href="tel:<?php echo e(GeneralSiteSettings("site_mobile")); ?>"><?php echo e(GeneralSiteSettings("site_mobile")); ?></a>
                            </div>

                        </li>

                        <li class="clearfix">
                            <div class="icon-font"><i class="bx bx-envelope"></i></div>
                            <div class="content">
                                <h6><?php echo e(trans('frontend.email')); ?>:</h6>
                                <a
                                    href="mailto:<?php echo e(GeneralSiteSettings("site_email")); ?>"><?php echo e(GeneralSiteSettings("site_email")); ?></a>





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
                    url: '<?php echo e(url('contact/send_message')); ?>' ,
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



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>