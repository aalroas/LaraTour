@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.Contact_forms') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">{{ trans('backend.dashboard') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">

                    @include('includes.messages')

                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
<div class="col-md-6 col-sm-12 text-center">

      <h4>{{ $contact->form_type }}   </h4>
      <br>
      <h6> {{ trans('backend.only_fields_for_the_booking_type_will_contain_a_value') }} </h6>

    </div><br>
                <form role="form" action="" method="post"
                    enctype="multipart/form-data">
                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.name') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('name')){{ old('name') }}@else{{ $contact->name }}@endif"
                                        type="text" class="form-control" id="name" name="name">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.subject') }} </h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('subject')){{ old('subject') }}@else{{ $contact->subject }}@endif"
                                        type="text" class="form-control" id="subject" name="subject">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.phone') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('phone')){{ old('phone') }}@else{{ $contact->phone }}@endif"
                                        type="text" class="form-control" id="phone" name="phone">

                                </div>
                            </div>
                        </div>



<div class="col-sm-4">
    <div class="card">
        <div class="header">
            <h2>{{ trans('backend.email') }}</h2>
        </div>
        <div class="body">

            <input readonly value="@if (old('email')){{ old('email') }}@else{{ $contact->email }}@endif" type="text"
                class="form-control" id="email" name="email">

        </div>
    </div>
</div>



                    </div>

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.message') }}</h2>
                            </div>
                            <div class="body">

                                <textarea  style="width: 100%;"   name="message"  readonly>
                                    {{ $contact->message }}
                                </textarea>

                            </div>
                        </div>
                    </div>






                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.check_in') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('check_in')){{ old('check_in') }}@else{{ $contact->check_in }}@endif"
                                        type="text" class="form-control" id="check_in" name="check_in">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.check_out') }} </h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('check_out')){{ old('check_out') }}@else{{ $contact->check_out }}@endif"
                                        type="text" class="form-control" id="check_out" name="check_out">

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.flight_type') }} </h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('flight_type')){{ old('flight_type') }}@else{{ $contact->flight_type }}@endif"
                                        type="text" class="form-control" id="flight_type" name="flight_type">

                                </div>
                            </div>
                        </div>



                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.rooms') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('rooms')){{ old('rooms') }}@else{{ $contact->rooms }}@endif"
                                        type="text" class="form-control" id="rooms" name="rooms">

                                </div>
                            </div>
                        </div>
                    </div>








                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.children') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('children')){{ old('children') }}@else{{ $contact->children }}@endif"
                                        type="text" class="form-control" id="children" name="children">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.adults') }} </h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('adults')){{ old('adults') }}@else{{ $contact->adults }}@endif"
                                        type="text" class="form-control" id="adults" name="adults">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.tour_name') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('tour_name')){{ old('tour_name') }}@else{{ $contact->tour_name }}@endif" type="text"
                                        class="form-control" id="tour_name" name="tour_name">

                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.f_from') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('f_from')){{ old('f_from') }}@else{{ $contact->f_from }}@endif"
                                        type="text" class="form-control" id="f_from" name="f_from">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.f_to') }} </h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('f_to')){{ old('f_to') }}@else{{ $contact->f_to }}@endif"
                                        type="text" class="form-control" id="f_to" name="f_to">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.tour_date') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('tour_date')){{ old('tour_date') }}@else{{ $contact->tour_date }}@endif"
                                        type="text" class="form-control" id="tour_date" name="tour_date">

                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.p_up_location') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('p_up_location')){{ old('p_up_location') }}@else{{ $contact->p_up_location }}@endif"
                                        type="text" class="form-control" id="p_up_location" name="p_up_location">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.p_up_date') }} </h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('p_up_date')){{ old('p_up_date') }}@else{{ $contact->p_up_date }}@endif" type="text"
                                        class="form-control" id="p_up_date" name="p_up_date">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.d_off_date') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly value="@if (old('d_off_date')){{ old('d_off_date') }}@else{{ $contact->d_off_date }}@endif"
                                        type="text" class="form-control" id="d_off_date" name="d_off_date">

                                </div>
                            </div>
                        </div>
                    </div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.days_count') }}</h2>
            </div>
            <div class="body">

                <input readonly
                    value="@if (old('days_count')){{ old('days_count') }}@else{{ $contact->days_count }}@endif"
                    type="text" class="form-control" id="days_count" name="days_count">

            </div>
        </div>
    </div>




    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.guests') }} </h2>
            </div>
            <div class="body">

                <input readonly value="@if (old('guests')){{ old('guests') }}@else{{ $contact->guests }}@endif"
                    type="text" class="form-control" id="guests" name="guests">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.destination') }}</h2>
            </div>
            <div class="body">

                <input readonly
                    value="@if (old('destination')){{ old('destination') }}@else{{ $contact->destination }}@endif"
                    type="text" class="form-control" id="destination" name="destination">

            </div>
        </div>
    </div>



    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.speak') }}</h2>
            </div>
            <div class="body">

                <input readonly
                    value="@if (old('speak')){{ old('speak') }}@else{{ $contact->speak }}@endif"
                    type="text" class="form-control" id="speak" name="speak">

            </div>
        </div>
    </div>


</div>




            </div>


            <div class="box-footer">

                <a type="button" class="btn btn-warning"
                    href="{{   route('contact_forms.index')   }}">{{ trans('backend.back') }}</a>
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
@endsection
