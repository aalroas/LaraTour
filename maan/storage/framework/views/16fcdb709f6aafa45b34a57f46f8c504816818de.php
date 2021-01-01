<?php $__env->startSection('main-content'); ?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.Contact_forms')); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><?php echo e(trans('backend.dashboard')); ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">

                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
<div class="col-md-6 col-sm-12 text-center">

      <h4><?php echo e($contact->form_type); ?>   </h4>
      <br>
      <h6> <?php echo e(trans('backend.only_fields_for_the_booking_type_will_contain_a_value')); ?> </h6>

    </div><br>
                <form role="form" action="" method="post"
                    enctype="multipart/form-data">
                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.name')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="<?php if(old('name')): ?><?php echo e(old('name')); ?><?php else: ?><?php echo e($contact->name); ?><?php endif; ?>"
                                        type="text" class="form-control" id="name" name="name">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.subject')); ?> </h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="<?php if(old('subject')): ?><?php echo e(old('subject')); ?><?php else: ?><?php echo e($contact->subject); ?><?php endif; ?>"
                                        type="text" class="form-control" id="subject" name="subject">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.phone')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="<?php if(old('phone')): ?><?php echo e(old('phone')); ?><?php else: ?><?php echo e($contact->phone); ?><?php endif; ?>"
                                        type="text" class="form-control" id="phone" name="phone">

                                </div>
                            </div>
                        </div>



<div class="col-sm-4">
    <div class="card">
        <div class="header">
            <h2><?php echo e(trans('backend.email')); ?></h2>
        </div>
        <div class="body">

            <input readonly value="<?php if(old('email')): ?><?php echo e(old('email')); ?><?php else: ?><?php echo e($contact->email); ?><?php endif; ?>" type="text"
                class="form-control" id="email" name="email">

        </div>
    </div>
</div>



                    </div>

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><?php echo e(trans('backend.message')); ?></h2>
                            </div>
                            <div class="body">

                                <textarea  style="width: 100%;"   name="message"  readonly>
                                    <?php echo e($contact->message); ?>

                                </textarea>

                            </div>
                        </div>
                    </div>






                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.check_in')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="<?php if(old('check_in')): ?><?php echo e(old('check_in')); ?><?php else: ?><?php echo e($contact->check_in); ?><?php endif; ?>"
                                        type="text" class="form-control" id="check_in" name="check_in">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.check_out')); ?> </h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="<?php if(old('check_out')): ?><?php echo e(old('check_out')); ?><?php else: ?><?php echo e($contact->check_out); ?><?php endif; ?>"
                                        type="text" class="form-control" id="check_out" name="check_out">

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.flight_type')); ?> </h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('flight_type')): ?><?php echo e(old('flight_type')); ?><?php else: ?><?php echo e($contact->flight_type); ?><?php endif; ?>"
                                        type="text" class="form-control" id="flight_type" name="flight_type">

                                </div>
                            </div>
                        </div>



                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.rooms')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="<?php if(old('rooms')): ?><?php echo e(old('rooms')); ?><?php else: ?><?php echo e($contact->rooms); ?><?php endif; ?>"
                                        type="text" class="form-control" id="rooms" name="rooms">

                                </div>
                            </div>
                        </div>
                    </div>








                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.children')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('children')): ?><?php echo e(old('children')); ?><?php else: ?><?php echo e($contact->children); ?><?php endif; ?>"
                                        type="text" class="form-control" id="children" name="children">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.adults')); ?> </h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('adults')): ?><?php echo e(old('adults')); ?><?php else: ?><?php echo e($contact->adults); ?><?php endif; ?>"
                                        type="text" class="form-control" id="adults" name="adults">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.tour_name')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('tour_name')): ?><?php echo e(old('tour_name')); ?><?php else: ?><?php echo e($contact->tour_name); ?><?php endif; ?>" type="text"
                                        class="form-control" id="tour_name" name="tour_name">

                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.f_from')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('f_from')): ?><?php echo e(old('f_from')); ?><?php else: ?><?php echo e($contact->f_from); ?><?php endif; ?>"
                                        type="text" class="form-control" id="f_from" name="f_from">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.f_to')); ?> </h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('f_to')): ?><?php echo e(old('f_to')); ?><?php else: ?><?php echo e($contact->f_to); ?><?php endif; ?>"
                                        type="text" class="form-control" id="f_to" name="f_to">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.tour_date')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('tour_date')): ?><?php echo e(old('tour_date')); ?><?php else: ?><?php echo e($contact->tour_date); ?><?php endif; ?>"
                                        type="text" class="form-control" id="tour_date" name="tour_date">

                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.p_up_location')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('p_up_location')): ?><?php echo e(old('p_up_location')); ?><?php else: ?><?php echo e($contact->p_up_location); ?><?php endif; ?>"
                                        type="text" class="form-control" id="p_up_location" name="p_up_location">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.p_up_date')); ?> </h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('p_up_date')): ?><?php echo e(old('p_up_date')); ?><?php else: ?><?php echo e($contact->p_up_date); ?><?php endif; ?>" type="text"
                                        class="form-control" id="p_up_date" name="p_up_date">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.d_off_date')); ?></h2>
                                </div>
                                <div class="body">

                                    <input readonly value="<?php if(old('d_off_date')): ?><?php echo e(old('d_off_date')); ?><?php else: ?><?php echo e($contact->d_off_date); ?><?php endif; ?>"
                                        type="text" class="form-control" id="d_off_date" name="d_off_date">

                                </div>
                            </div>
                        </div>
                    </div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.days_count')); ?></h2>
            </div>
            <div class="body">

                <input readonly
                    value="<?php if(old('days_count')): ?><?php echo e(old('days_count')); ?><?php else: ?><?php echo e($contact->days_count); ?><?php endif; ?>"
                    type="text" class="form-control" id="days_count" name="days_count">

            </div>
        </div>
    </div>




    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.guests')); ?> </h2>
            </div>
            <div class="body">

                <input readonly value="<?php if(old('guests')): ?><?php echo e(old('guests')); ?><?php else: ?><?php echo e($contact->guests); ?><?php endif; ?>"
                    type="text" class="form-control" id="guests" name="guests">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.destination')); ?></h2>
            </div>
            <div class="body">

                <input readonly
                    value="<?php if(old('destination')): ?><?php echo e(old('destination')); ?><?php else: ?><?php echo e($contact->destination); ?><?php endif; ?>"
                    type="text" class="form-control" id="destination" name="destination">

            </div>
        </div>
    </div>



    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.speak')); ?></h2>
            </div>
            <div class="body">

                <input readonly
                    value="<?php if(old('speak')): ?><?php echo e(old('speak')); ?><?php else: ?><?php echo e($contact->speak); ?><?php endif; ?>"
                    type="text" class="form-control" id="speak" name="speak">

            </div>
        </div>
    </div>


</div>




            </div>


            <div class="box-footer">

                <a type="button" class="btn btn-warning"
                    href="<?php echo e(route('contact_forms.index')); ?>"><?php echo e(trans('backend.back')); ?></a>
            </div>

            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>