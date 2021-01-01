<?php $__env->startSection('main-content'); ?>
<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">


    <?php

    $title = "";
    $text = "";


    if (trans('frontend.code') =="en") {
    $title= $room->title_en;
    $text= $room->text_en;


    }elseif (trans('frontend.code') == "tr") {
    $title= $room->title_tr;
    $text= $room->text_tr;

    }else {
    $title= $room->title_ar;
    $text= $room->text_ar;

    }
    ?>

    <div class="page-wrapper page-detail bg-light">

        <div class="detail-header">

            <div class="container">

                <div class="d-flex flex-column flex-lg-row">

                    <div>
                        <h2 id="detail-content-sticky-nav-00" class="name"><?php echo e($title); ?></h2>




                        <div class="clear"></div>

                        <?php $__currentLoopData = $room->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php

                        $cat = "";



                        if (trans('frontend.code') =="en") {

                        $cat = $room->categories[$category]->name_en;


                        }elseif (trans('frontend.code') == "tr") {

                        $cat = $room->categories[$category]->name_tr;


                        }else {
                        $cat = $room->categories[$category]->name_ar;
                        }
                        ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <h5> <?php echo e($cat); ?> </h5>



                    </div>
<div class="ml-lg-auto text-left text-lg-right mt-20 mt-lg-0">

    <div class="price"> <span> <span><?php echo e($room->price); ?></span></span></div>

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

                            <div    class="slider gallery-slideshow">

                               <?php $__currentLoopData = $room->room_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div>
                                    <div    class="image"><img   style="height:620px !important;" src="<?php echo e(URL::to('uploads/room',$room->room_images[$image]->room_image_path)); ?>"
                                            alt="<?php echo e($title); ?>" /></div>
                                </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                            </div>
                            <div    class="slider gallery-nav">


<?php $__currentLoopData = $room->room_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div>
                                    <div class="image"><img  style="height: 100px;width: 100px;" src="<?php echo e(URL::to('uploads/room',$room->room_images[$image]->room_image_path)); ?>"
                                            alt="<?php echo e($title); ?>" /></div>
                                </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>

                        </div>

                        <div id="detail-content-sticky-nav-01" class="fullwidth-horizon-sticky-section">

                            <h3 class="heading-title"><span><?php echo e(trans('frontend.overview')); ?></span></h3>




                            <?php echo $text; ?>



                        </div>

                        <div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

                            <h3 class="heading-title"><span><?php echo e(trans('frontend.book_now')); ?></span></h3>

                            <div class="change-search-wrapper">
                                <div class="alert alert-success d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                                <div class="row gap-10 gap-xl-20 align-items-end">
                                    <form id="contact_form" action="javascript:void(0)" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="form_type" value="Room Reservation">
                                        
                                        <div class="form-inner">

                                            <div class="row gap-10 mb-15 align-items-end">

                                                <div class="col-12">
                                                    <div class="col-inner">
                                                        <div class="row gap-10 mb-15">

                                                            <div class="col-12 col-md-6">
                                                                <label><?php echo e(trans('frontend.name')); ?></label>
                                                                <div class="form-icon-left typeahead__container">
                                                                    <input type="text" name="name" id="name"
                                                                        class="form-control">
                                                                </div>


                                                            </div>




                                                            <div class="col-12 col-md-6">


                                                                <label><?php echo e(trans('frontend.phone')); ?></label>
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
                                                        <label><?php echo e(trans('frontend.email')); ?></label>
                                                        <div class="form-icon-left typeahead__container">
                                                            <span class="icon-font text-muted"><i
                                                                    class="bx bx-map"></i></span>
                                                            <input class="  form-control" name="email" type="text"
                                                                placeholder="" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="col-inner">
                                                        <div id="airDatepickerRange-hotel" class="row gap-10 mb-15">



                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label><?php echo e(trans('frontend.check_in')); ?></label>
                                                                    <div class="form-icon-left">
                                                                        <span class="icon-font text-muted"><i
                                                                                class="bx bx-calendar"></i></span>
                                                                        <input type="text" id="dateStart-hotel"
                                                                            name="check_in"
                                                                            class="form-control form-readonly-control"
                                                                            placeholder="dd/mm/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label><?php echo e(trans('frontend.check_out')); ?></label>
                                                                    <div class="form-icon-left">
                                                                        <span class="icon-font text-muted"><i
                                                                                class="bx bx-calendar"></i></span>
                                                                        <input type="text" id="dateEnd-hotel"
                                                                            name="check_out"
                                                                            class="form-control form-readonly-control"
                                                                            placeholder="dd/mm/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 ">

                                                    <div class="col-inner">

                                                        <div class="row gap-10 mb-15">




                                                            <div class="col-4 col-sm-6 col-md-4">
                                                                <div class="form-group form-spin-group">
                                                                    <label
                                                                        for="room-amount"><?php echo e(trans('frontend.rooms')); ?></label>
                                                                    <div class="form-icon-left">
                                                                        <span class="icon-font text-muted"><i
                                                                                class="bx bx-home-alt"></i></span>
                                                                        <input type="text"
                                                                            class="form-control touch-spin-03 form-readonly-control"
                                                                            name="rooms" placeholder="0" readonly />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-8 col-sm-6 col-md-8">
                                                                <div class="col-inner">
                                                                    <div class="form-people-thread">
                                                                        <div class="row gap-5 align-items-center">
                                                                            <div class="col">
                                                                                <div class="form-group form-spin-group">
                                                                                    <label
                                                                                        for="room-amount"><?php echo e(trans('frontend.adults')); ?>

                                                                                        <small
                                                                                            class=" text-muted font10 line-1">(12-75)</small></label>
                                                                                    <div class="form-icon-left">
                                                                                        <span
                                                                                            class="icon-font text-muted"><i
                                                                                                class="bx bx-user"></i></span>
                                                                                        <input type="text"
                                                                                            class="form-control touch-spin-03 form-readonly-control"
                                                                                            name="adults"
                                                                                            placeholder="0" readonly />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="form-group form-spin-group">
                                                                                    <label
                                                                                        for="room-amount"><?php echo e(trans('frontend.children')); ?>

                                                                                        <small
                                                                                            class="text-muted font10 line-1">(2-12)</small></label>
                                                                                    <div class="form-icon-left">
                                                                                        <span
                                                                                            class="icon-font text-muted"><i
                                                                                                class="bx bx-user"></i></span>
                                                                                        <input type="text"
                                                                                            class="form-control touch-spin-03 form-readonly-control"
                                                                                            name="children"
                                                                                            placeholder="0" readonly />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="col-12">
                                                        <button class="btn btn-primary btn-block" type="submit"
                                                            id="send_form"><?php echo e(trans('frontend.reserve_now')); ?> </button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </form>




                                </div>

                            </div>


                        </div>


<div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

    <h3 class="heading-title"><span><?php echo e(trans('frontend.comments')); ?></span></h3>

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
                    },5000);
                    }
                    });
                    }
                    })
                    }

</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>