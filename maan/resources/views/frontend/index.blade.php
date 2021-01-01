@extends('frontend/app')



@section('main-content')



			<!-- start slick hero slider -->
			<div class="slick-hero-slider-02-wrapper bg-light">

				<div class="slider slick-hero-slider-02 slick-slider-center-mode slick-animation mb-0">

                    @foreach ($sliders as $slider)
@php
    $text = "";
    $title = "";
    if (trans('frontend.code') =="en") {
    $text= $slider->text_en;
    $title= $slider->title_en;
    }elseif (trans('frontend.code') == "tr") {
    $text= $slider->text_tr;
    $title= $slider->title_tr;
    }else {
    $title= $slider->title_ar;
    $text= $slider->text_ar;
    }
    @endphp


					<div class="slick-item">

						<div class="bg-image"  data-dark-overlay="4" style="background-image:url('{{ URL::to('uploads/sliders/')}}/{{ $slider->image }}');">

							<div class="caption-outer">

								<div class="container">

									<div class="caption-inner">

										<div class="row">

											<div class="col-12 col-lg-6 col-xl-7">

												<div class="hero-text">

													<h2 class="animation fromBottom transitionDelay2 transitionDuration4">{{ $title }}</h2>

<p class="animation fromBottom transitionDelay6 transitionDuration8 hero-price d-block">
    {{ $text }}
    </p>

													<!--<div class="animation fromBottom transitionDelay8 transitionDuration10 d-block">-->
													<!--	<a href="{{ $slider->url }}" class="btn btn-secondary btn-wide">{{ trans('frontend.read_more') }}</a>-->
													<!-- </div>-->

												</div>

											</div>

										</div>
									</div>

								</div>

							</div>

						</div>

					</div>


@endforeach
				</div>

				<div class="hero-form-absolute">

					<div class="container">

						<div class="row gap-40 gap-lg-60 align-items-center justify-content-lg-end">

							<div class="col-12 col-lg-6 col-xl-5">

								<div class="hero-form-inner text-white">

									<div class="menu-horizontal-wrapper-02">

										<nav class="menu-horizontal-02">

                                            <div class="alert alert-success d-none" id="msg_div">
                                                <span id="res_message"></span>
                                            </div>

											<ul class="nav">
												<li>
													<a class="active" data-toggle="tab" href="#formSearchMain-01">{{ trans('frontend.hotel') }}</a>
												</li>
												<li>
													<a data-toggle="tab" href="#formSearchMain-02">{{ trans('frontend.flight') }}</a>
												</li>
												<li>
													<a data-toggle="tab" href="#formSearchMain-03">{{ trans('frontend.car') }}</a>
												</li>
												<li>
													<a data-toggle="tab" href="#formSearchMain-04">{{ trans('frontend.tour') }}</a>
												</li>
												<li>
													<a data-toggle="tab" href="#formSearchMain-05">{{ trans('frontend.guide') }}</a>
												</li>
                                            </ul>

										</nav>

										<div class="tab-content">

											<div role="tabpanel" class="tab-pane active" id="formSearchMain-01">

												<div class="tab-inner menu-horizontal-content">

													<div class="form-search-main-01">


                                                    <form id="contact_form" action="javascript:void(0)" method="post">
              {{ csrf_field() }}
<input type="hidden" name="form_type" value="Room Reservation">
{{-- hotel --}}
															<div class="form-inner">

																<div class="row gap-10 mb-15 align-items-end">

																	<div class="col-12">
                                                                        <div class="col-inner">
                                                                                <div   class="row gap-10 mb-15">

                                                                                    <div class="col-12 col-md-6">
                                                                                   <label>{{ trans('frontend.name') }}</label>
                                                                                    <div class="form-icon-left typeahead__container">
                                                                                        <input type="text" name="name" id="name"    class="form-control">
                                                                                    </div>


                                                                                    </div>




                                                                                    <div class="col-12 col-md-6">


                                                                                        <label>{{ trans('frontend.phone') }}</label>
                                                                                        <div class="form-icon-left typeahead__container">
                                                                                            <input type="text" name="phone" id="phone"   class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                    </div>
<div class="col-12">
        <div class="form-group">
            <label>{{ trans('frontend.email') }}</label>
            <div class="form-icon-left typeahead__container">
                <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
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
																						<label>{{ trans('frontend.check_in') }}</label>
																						<div class="form-icon-left">
																							<span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
																							<input type="text" id="dateStart-hotel" name="check_in" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
																						</div>
																					</div>
																				</div>

																				<div class="col-6">
																					<div class="form-group">
																						<label>{{ trans('frontend.check_out') }}</label>
																						<div class="form-icon-left">
																							<span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
																							<input type="text" id="dateEnd-hotel" name="check_out" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
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
																						<label for="room-amount">{{ trans('frontend.rooms') }}</label>
																						<div class="form-icon-left">
																							<span class="icon-font text-muted"><i class="bx bx-home-alt"></i></span>
																							<input type="text" class="form-control touch-spin-03 form-readonly-control" name="rooms" placeholder="0" readonly />
																						</div>
																					</div>
																				</div>

																				<div class="col-8 col-sm-6 col-md-8">
																					<div class="col-inner">
																						<div class="form-people-thread">
																							<div class="row gap-5 align-items-center">
																								<div class="col">
																									<div class="form-group form-spin-group">
																										<label for="room-amount">{{ trans('frontend.adults') }} <small class=" text-muted font10 line-1">(12-75)</small></label>
																										<div class="form-icon-left">
																											<span class="icon-font text-muted"><i class="bx bx-user"></i></span>
																											<input type="text" class="form-control touch-spin-03 form-readonly-control"  name="adults" placeholder="0" readonly />
																										</div>
																									</div>
																								</div>
																								<div class="col">
																									<div class="form-group form-spin-group">
																										<label for="room-amount">{{ trans('frontend.children') }} <small class="text-muted font10 line-1">(2-12)</small></label>
																										<div class="form-icon-left">
																											<span class="icon-font text-muted"><i class="bx bx-user"></i></span>
																											<input type="text" class="form-control touch-spin-03 form-readonly-control" name="children" placeholder="0" readonly />
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
																	<button class="btn btn-primary btn-block"    type="submit" id="send_form"   >{{ trans('frontend.reserve_now') }} </button>
																	</div>

																</div>

															</div>
</div>
														</form>

													</div>

												</div>

											</div>

											<div role="tabpanel" class="tab-pane fade in" id="formSearchMain-02">

												<div class="tab-inner menu-horizontal-content">

													<div class="form-search-main-01">


                                                        <form id="contact_form1" action="javascript:void(0)" method="post"  >
              {{ csrf_field() }}

              <input type="hidden" name="form_type" value="Flight Reservation">
                                                            {{-- flight --}}

															<div class="form-inner">


                                                                    <div class="col-inner">
                                                                        <div class="row gap-10 mb-15">

                                                                          <div class="col-12 col-md-6">
                                                                                <label>{{ trans('frontend.name') }}</label>
                                                                                <div class="form-icon-left typeahead__container">
                                                                                    <input type="text" name="name" id="name"    class="form-control">
                                                                                </div>


                                                                            </div>




                                                                       <div class="col-12 col-md-6">


                                                                                <label>{{ trans('frontend.phone') }}</label>
                                                                                <div class="form-icon-left typeahead__container">
                                                                                    <input type="text" name="phone" id="phone"   class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>



<br>
                                                                    <div class="form-group">
                                                                        <label>{{ trans('frontend.email') }}</label>
                                                                        <div class="form-icon-left typeahead__container">
                                                                            <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                            <input class="  form-control" name="email" type="text" placeholder="" autocomplete="off">
                                                                        </div>
                                                                    </div>



																<div class="mb-12">

<br>

                                                                    <select name="flight_type" data-placeholder="Please select" class="chosen-no-search form-control" tabindex="2">
                                                                            <option></option>
                                                                    <option value="{{ trans('frontend.return') }}">{{ trans('frontend.return') }}</option>
                                                                            <option  value="{{ trans('frontend.one_way') }}">{{ trans('frontend.one_way') }}</option>

                                                                        </select>





																</div>

																<div class="row gap-10 mb-15">

																	<div class="col-6">
																		<div class="form-group">
																			<label>{{ trans('frontend.from') }}</label>
																			<div class="form-icon-left typeahead__container">
																				<span class="icon-font text-muted"><i class="bx bx-map"></i></span>
																				 <input class="js-typeahead-country_v1 form-control" name="f_from" type="search" placeholder="{{trans('frontend.country_or_city')}}" autocomplete="off">
																			</div>
																		</div>
																	</div>

																	<div class="col-6">
																		<div class="form-group">
																			<label>{{ trans('frontend.to') }}</label>
																			<div class="form-icon-left typeahead__container">
																				<span class="icon-font text-muted"><i class="bx bx-map"></i></span>
																				 <input class="js-typeahead-country_v1 form-control" name="f_to" type="search" placeholder="{{trans('frontend.country_or_city')}}" autocomplete="off">
																			</div>
																		</div>
																	</div>

																	<div class="col-12">
																		<div class="col-inner">
																			<div id="airDatepickerRange-flight" class="row gap-10 mb-15">

																				<div class="col-6">
																					<div class="form-group">
																						<label>{{ trans('frontend.check_in') }}</label>
																						<div class="form-icon-left">
																							<span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
																							<input type="text" id="dateStart-flight"  name="check_in" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
																						</div>
																					</div>
																				</div>

																				<div class="col-6">
																					<div class="form-group">
																						<label>{{ trans('frontend.check_out') }}</label>
																						<div class="form-icon-left">
																							<span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
																							<input type="text" id="dateEnd-flight" name="check_out" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="col-12">
																		<div class="col-inner">
																			<div class="row gap-5">
																				<div class="col-6">
																					<div class="form-group form-spin-group">
																						<label for="room-amount">{{ trans('frontend.adults') }} <small class="text-muted font10 line-1">(12-75)</small></label>
																						<div class="form-icon-left">
																							<span class="icon-font text-muted"><i class="bx bx-user"></i></span>
																							<input  name="adults" type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
																						</div>
																					</div>
																				</div>
																				<div class="col-6">
																					<div class="form-group form-spin-group">
																						<label for="room-amount">{{ trans('frontend.children') }} <small class="text-muted font10 line-1">(2-12)</small></label>
																						<div class="form-icon-left">
																							<span class="icon-font text-muted"><i class="bx bx-user"></i></span>
																							<input type="text" name="children" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
																						</div>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>

																</div>






																<div class="d-flex flex-row align-items-center mt-20">

                            <div class="col-12">
                                <button class="btn btn-primary btn-block" type="submit" id="send_form1">{{ trans('frontend.reserve_now') }} </button>
                            </div>
																</div>

															</div>

														</form>

													</div>

												</div>

											</div>

											<div role="tabpanel" class="tab-pane fade in" id="formSearchMain-03">

												<div class="tab-inner menu-horizontal-content">

													<div class="form-search-main-01">

										 <form id="contact_form2" action="javascript:void(0)" method="post"  >
              {{ csrf_field() }}

              <input type="hidden" name="form_type" value="Car Reservation">

                                            {{-- car --}}
															<div class="form-inner">

																<div class="row gap-10 mb-15 align-items-center">
<div class="col-12">
    <div class="col-inner">
        <div class="row gap-10 mb-15">

          <div class="col-12 col-md-6">
                <label>{{ trans('frontend.name') }}</label>
                <div class="form-icon-left typeahead__container">
                    <input type="text" name="name" id="name"    class="form-control">
                </div>


            </div>




       <div class="col-12 col-md-6">


                <label>{{ trans('frontend.phone') }}</label>
                <div class="form-icon-left typeahead__container">
                    <input type="text" name="phone" id="phone"   class="form-control">
                </div>
            </div>
        </div>
    </div>


</div>
<div class="col-12">
    <div class="form-group">
        <label>{{ trans('frontend.email') }}</label>
        <div class="form-icon-left typeahead__container">
            <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
            <input class="  form-control" name="email" type="text" placeholder="" autocomplete="off">
        </div>
    </div>
</div>
																	<div class="col-12">
																		<div class="form-group">
																			<label>{{ trans('frontend.p_up_location') }}</label>
																			<div class="form-icon-left typeahead__container">
																				<span class="icon-font text-muted"><i class="bx bx-map"></i></span>
																				 <input class="js-typeahead-country_v1 form-control" name="p_up_location" type="search" placeholder="{{ trans('frontend.country_or_city') }}" autocomplete="off">
																			</div>
																		</div>
																	</div>




																	<div class="col-6">

																		<div class="form-group">
																			<label>{{ trans('frontend.p_up_date') }}</label>
																			<div class="form-icon-left">
																				<span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
                                                                            <input type="text"  name="p_up_date" class="form-control form-readonly-control air-datepicker" placeholder="{{trans('frontend.pick_a_date_and_time')}}" data-language="en" data-timepicker="true" readonly>
																			</div>
																		</div>

																	</div>

																	<div class="col-6">

																		<div class="form-group">
																			<label>{{ trans('frontend.d_off_date') }}</label>
																			<div class="form-icon-left">
																				<span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
																				<input type="text"  name="d_off_date" class="form-control form-readonly-control air-datepicker"  placeholder="{{trans('frontend.pick_a_date_and_time')}}"  data-language="en" data-timepicker="true" readonly>
																			</div>
																		</div>

																	</div>


<div class="col-12">
    <button class="btn btn-primary btn-block" id="send_form2" type="submit">{{ trans('frontend.reserve_now') }} </button>
</div>
																</div>

															</div>

														</form>

													</div>

												</div>

											</div>

											<div role="tabpanel" class="tab-pane fade in" id="formSearchMain-04">

												<div class="tab-inner menu-horizontal-content">

													<div class="form-search-main-01">

													 <form id="contact_form4" action="javascript:void(0)" method="post"  >
              {{ csrf_field() }}

              <input type="hidden" name="form_type" value="Tour Reservation">

                                                         {{-- tour --}}

															<div class="form-inner">

																<div class="row gap-10 mb-15 align-items-sm-center">

                                                                    <div class="col-12">
                                                                        <div class="col-inner">
                                                                            <div class="row gap-10 mb-15">

                                                                            <div class="col-12 col-md-6">
                                                                                    <label>{{ trans('frontend.name') }}</label>
                                                                                    <div class="form-icon-left typeahead__container">
                                                                                        <input type="text" name="name" id="name"    class="form-control">
                                                                                    </div>


                                                                                </div>




                                                                            <div class="col-12 col-md-6">


                                                                                    <label>{{ trans('frontend.phone') }}</label>
                                                                                    <div class="form-icon-left typeahead__container">
                                                                                        <input type="text" name="phone" id="phone"   class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>{{ trans('frontend.email') }}</label>
                                                                            <div class="form-icon-left typeahead__container">
                                                                                <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
                                                                                <input class="  form-control" name="email" type="text" placeholder="" autocomplete="off">
                                                                            </div>
                                                                        </div>
                                                                    </div>

																	<div class="col-12">
																		<div class="form-group">
																			<label>{{ trans('frontend.tours') }}</label>
																		 <select  name="tour_name" data-placeholder="Please select" class="chosen-no-search form-control" tabindex="2">
                                                                                    <option></option>

@foreach ($tours as $tour)

@php

$title = "";
if (trans('frontend.code') =="en") {

$title= $tour->title_en;
}elseif (trans('frontend.code') == "tr") {

$title= $tour->title_tr;
}else {
$title= $tour->title_ar;

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
																							<span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
																							<input  name="tour_date" type="text" class="form-control form-readonly-control air-datepicker" placeholder="{{ trans('frontend.pick_a_month')}}" data-min-view="months" data-view="months" data-date-format="MM yyyy" data-language="en" data-auto-close="true" readonly>
																						</div>
																					</div>
																				</div>

																				<div class="col-6">
																					<div class="form-group">
														<label>{{ trans('frontend.guests') }}</label>
                                                            <div class="form-icon-left">
                                                                <span class="icon-font text-muted"><i class="bx bx-user"></i></span>
                                                                <input type="text" name="guests" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
                                                            </div>
																					</div>
																				</div>

																			</div>

																		</div>

																	</div>



                                                        <div class="col-12">
                                                            <button class="btn btn-primary btn-block" type="submit" id="send_form4">{{ trans('frontend.reserve_now') }} </button>
                                                        </div>

																</div>

															</div>

														</form>

													</div>

												</div>

											</div>

											<div role="tabpanel" class="tab-pane fade in" id="formSearchMain-05">

												<div class="tab-inner menu-horizontal-content">

													<div class="form-search-main-01">


                                                            <form id="contact_form3" action="javascript:void(0)" method="post" >
              {{ csrf_field() }}
<input type="hidden" name="form_type" value="Guide Reservation">

															<div class="form-inner">

																<div class="row gap-10 mb-15 align-items-end">
<div class="col-12">
    <div class="col-inner">
        <div class="row gap-10 mb-15">

         <div class="col-12 col-md-6">
                <label>{{ trans('frontend.name') }}</label>
                <div class="form-icon-left typeahead__container">
                    <input type="text" name="name" id="name"    class="form-control">
                </div>


            </div>




    <div class="col-12 col-md-6">


                <label>{{ trans('frontend.phone') }}</label>
                <div class="form-icon-left typeahead__container">
                    <input type="text" name="phone" id="phone"   class="form-control">
                </div>
            </div>
        </div>
    </div>


</div>
<div class="col-12">
    <div class="form-group">
        <label>{{ trans('frontend.email') }}</label>
        <div class="form-icon-left typeahead__container">
            <span class="icon-font text-muted"><i class="bx bx-map"></i></span>
            <input class="  form-control" name="email" type="text" placeholder="" autocomplete="off">
        </div>
    </div>
</div>
																	<div class="col-12">
																		<div class="form-group">
																			<label>{{ trans('frontend.destination') }}</label>
																			<div class="form-icon-left typeahead__container">
																				<span class="icon-font text-muted"><i class="bx bx-map"></i></span>
																				 <input class="js-typeahead-country_v1 form-control" name="destination" type="search" placeholder="{{ trans('frontend.country_or_city') }}" autocomplete="off">
																			</div>
																		</div>
																	</div>

																	<div class="col-12 col-sm-12 col-md-12">
																		<div class="col-inner">
																			<div id="airDatepickerRange-guide" class="row gap-10 mb-15">

																				<div class="col-6">
																					<div class="form-group">
																						<label>{{ trans('frontend.check_in') }}</label>
																						<div class="form-icon-left">
																							<span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
																							<input type="text"  name="check_in" id="dateStart-guide" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
																						</div>
																					</div>
																				</div>

																				<div class="col-6">
																					<div class="form-group">
																					<label>{{ trans('frontend.check_in') }}</label>
																						<div class="form-icon-left">
																							<span class="icon-font text-muted"><i class="bx bx-calendar"></i></span>
																							<input type="text"  name="check_out" id="dateEnd-guide" class="form-control form-readonly-control" placeholder="dd/mm/yyyy">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="col-8">
																		<div class="form-group">
																			<label>{{ trans('frontend.speak') }}</label>
																			<div class="form-icon-left">
																				<span class="icon-font text-muted"><span class="icon-inner"><i class="bx bx-globe"></i></span></span>
																				<select  data-placeholder="Please select" name="speak" class="chosen-no-search form-control" tabindex="2">
																					<option></option>
																					<option  value="{{ trans('frontend.english') }}">{{ trans('frontend.english') }}</option>
																					<option value="{{ trans('frontend.arabic') }}">{{ trans('frontend.arabic') }}</option>
																					<option value="{{ trans('frontend.turkish') }}">{{ trans('frontend.turkish') }}</option>

																				</select>
																			</div>
																		</div>
																	</div>

																	<div class="col-4">
																		<div class="form-group form-spin-group">
																			<label>{{ trans('frontend.how_many_days_?') }}</label>
																			<div class="form-icon-left">
																				<span class="icon-font text-muted"><i class="bx bx-user"></i></span>
																				<input  name="days_count" type="text" class="form-control touch-spin-03 form-readonly-control" placeholder="0" readonly />
																			</div>
																		</div>
																	</div>


                                                            <div class="col-12">
                                                                <button class="btn btn-primary btn-block" type="submit" id="send_form3">{{ trans('frontend.reserve_now') }} </button>
                                                            </div>

																</div>

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

					</div>

				</div>

			</div>
			<!-- end slick hero slider -->

<br>
<div class="cta-horizon bg-primary">
    <div class="container">
<div class="col">
<img  style="margin-bottom: -60px;margin-top: -88px;"
        src="{{asset('uploads/review-booking-com.png')}}"
            alt="{{ GeneralSiteSettings('site_title_ar') }}">
</div>

 <h3 class="text-uppercase">{{ GeneralSiteSettings("booking_text_".trans('frontend.boxCode')) }}</h3>
 </div>
 <br>
<div class="col">
    <a href="{{ GeneralSiteSettings('booking_url') }}" class="btn btn-border">{{ trans('frontend.book_now') }}</a>
</div>

    </div>
</div>



			<!-- start Site Content -->
			<section>

				<div class="container">

					<div class="section-title text-center">


                        <h2>{{ trans('frontend.our_top_destinations') }}</h2>


					</div>

                    <div class="row cols-2 cols-md-3 cols-lg-4 gap-10 gap-md-20">




@foreach ($tours as $tour)

@php

$title = "";
if (trans('frontend.code') =="en") {

$title= $tour->title_en;
}elseif (trans('frontend.code') == "tr") {

$title= $tour->title_tr;
}else {
$title= $tour->title_ar;

}
@endphp


						<div class="col">

							<figure class="image-caption-01">

								<a href="{{ URL("/tours/tour/".$tour->slug) }}">

									<div class="image overlay-relative caption-relative">
										<img src="{{ URL::to('uploads/tour/')}}/{{ $tour->f_image }}" alt="{{ $title}}" />
										<div class="overlay-holder opacity-2"></div>
										<figcaption class="caption-holder">


											<div class="caption-inner caption-middle text-center">
                                            <h5>{{ $title}}</h5>

											</div>
										</figcaption>
									</div>

								</a>

                            </figure>


						</div>




                    @endforeach

</div>







				</div>

            </section>



            <section class="bg-light">
            <div class="container">

                <div class="menu-horizontal-wrapper-03 alt-z-index">



                    <div class="tab-content mt-90">

                        <div role="tabpanel" class="tab-pane active" id="MenuHorizon06_01">

                            <div class="tab-inner">

                                <div class="row justify-content-center">

                                    <div class="col col-lg-8 col-xl-6">

                                        <div class="section-title text-center">

                                            <h2>{{ trans('frontend.our_rooms') }}</h2>

                                        </div>

                                    </div>

                                </div>

                                <div class="slick-carousel-wrapper">

                                    <div class="slick-carousel-inner">

                                        <div class="slick-product-item">



                                            @foreach ($rooms as $room)

                                            @php

                                            $title = "";
                                            if (trans('frontend.code') =="en") {

                                            $title= $room->title_en;
                                            }elseif (trans('frontend.code') == "tr") {

                                            $title= $room->title_tr;
                                            }else {
                                            $title= $room->title_ar;

                                            }
                                            @endphp


                                            <div class="slick-item">

                                                <div class="product-grid-item">



                                                        <div class="image">
                                                            <img src="{{ URL::to('uploads/room/')}}/{{ $room->f_image }}"
                                                                alt="{{ $title }}">
                                                        </div>



                                                        <div class="content clearfix">

                                                            <div class="rating-item rating-sm">
                                                                <div>
                                                                    @foreach ($room->categories as $category => $value)
                                                                    @php

                                                                    $cat = "";
                                                                    if (trans('frontend.code') =="en") {

                                                                    $cat = $room->categories[$category]->name_en;


                                                                    }elseif (trans('frontend.code') == "tr") {

                                                                    $cat = $room->categories[$category]->name_tr;


                                                                    }else {
                                                                    $cat = $room->categories[$category]->name_ar;
                                                                    }
                                                                    @endphp
                                                                    <span class="item-expire">{{ $cat }}</span>
                                                                    @endforeach
                                                                </div>

                                                            </div>

                                                            <div class="short-info">
                                                                <h5>{{ $title }}</h5>
                                                                <p class="location">
                                                                    <a
                                                                        href="{{ URL("/rooms/room/".$room->slug) }}">{{ trans('frontend.read_more') }}</a>
                                                                </p>
                                                            </div>
                                                            <div class="price">
                                                                <div class="float-right">

                                                                <span class="text-secondary">{{$room->price}}</span>

                                                                </div>
                                                            </div>


                                                        </div>



                                                </div>

                                            </div>

                                            @endforeach



                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                    </div>

                </div>

            </div>
            </section>






            <section>
                <div class="container">

                            <div class="menu-horizontal-wrapper-03 alt-z-index">



                                <div class="tab-content mt-90">

                                    <div role="tabpanel" class="tab-pane active" id="MenuHorizon06_01">

                                        <div class="tab-inner">

                                            <div class="row justify-content-center">

                                                <div class="col col-lg-8 col-xl-6">

                                                    <div class="section-title text-center">

                                                        <h2>{{ trans('frontend.our_top_tour') }}</h2>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="slick-carousel-wrapper">

                                                <div class="slick-carousel-inner">

                                                    <div class="slick-product-item">



                                                        @foreach ($tours as $tour)

                                                        @php

                                                        $title = "";
                                                        if (trans('frontend.code') =="en") {

                                                        $title= $tour->title_en;
                                                        }elseif (trans('frontend.code') == "tr") {

                                                        $title= $tour->title_tr;
                                                        }else {
                                                        $title= $tour->title_ar;

                                                        }
                                                        @endphp


                                                        <div class="slick-item">

                                                            <div class="product-grid-item">



                                                                    <div class="image">
                                                                        <img src="{{ URL::to('uploads/tour/')}}/{{ $tour->f_image }}" alt="{{ $title }}">
                                                                    </div>



                                                                    <div class="content clearfix">

                                                                        <div class="rating-item rating-sm">


                                                                        </div>

                                                                        <div class="short-info">

                                                                            <h5>{{ $title }}</h5>
                                                                            <p class="location">
                                                                                <a href="{{ URL("/tours/tour/".$tour->slug) }}">{{ trans('frontend.read_more') }}</a>
                                                                                </p>

                                                                        </div>
                                                <div class="price">
                                        <div class="float-right">
                                            <span class="text-secondary">{{$tour->price}}</span>
                                        </div>
                                    </div>

                                                                    </div>



                                                            </div>

                                                        </div>

                                                        @endforeach



                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
            </section>












            	<section class="bg-light">

				<div class="container">

					<div class="section-title text-center">

					<h2>{{ trans('frontend.what_people_say_about_us') }}</h2>

					</div>

					<div class="slick-gallery-slideshow-wrapper testimonial-horizontal">

						<div id="slick-testimonial-long-slideshow" class="slider slick-gallery-slideshow">

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

							<div class="slick-item testimonial-long-item-10">
								<div class="content">
                                <p class="saying">{{  $testimonials_text  }}</p>
								</div>
                            </div>




                            @endforeach




						</div>


						<div class="slick-testimonial-long-nav-wrapper">

							<div id="slick-testimonial-long-nav" class="slider slick-gallery-nav">

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

								<div class="slick-item">
									<div class="man clearfix">

										<div class="man-inner">

									<div class=" image">
                                       <img class="img-circle"
                                                src="{{ URL::to('uploads/testimonials/')}}/{{ $testimonial->image }}" alt="{{$testimonials_tilte }}">
                                    </div>

											<div class="texting">
                                            <h5>{{ $testimonials_tilte }}</h5>
<br>
                                            <span style="text-align:center;"> <a style="text-align:center;"
                                                    onclick="changeVideo('{{ $testimonial->url }}')">{{ trans('frontend.play_video') }}</a> </span>
                                            <br>

                                            <script>
                                                function changeVideo(vId){
                                                    var iframe=document.getElementById("iframeYoutube");
                                                    iframe.src=vId;
                                                    $("#myModal").modal("show");
                                                    }
                                            </script>

                                            <!-- Modal -->



											</div>

										</div>

									</div>
                                </div>


							 @endforeach





							</div>

						</div>

					</div>

				</div>

			</section>







            <section>

                            <div class="container">

                                <div class="section-title text-center">

                                    <h2> {{ trans('frontend.our_blog') }}</h2>


                                </div>

                                <div class="row equal-height cols-1 cols-sm-1 cols-md-2 cols-lg-3 gap-20 gap-lg-30 justify-content-center">


                                    @foreach ($posts as $post)

                                    @php

                                    $title = "";



                                    if (trans('frontend.code') =="en") {
                                    $title= $post->title_en;


                                    }elseif (trans('frontend.code') == "tr") {
                                    $title= $post->title_tr;


                                    }else {
                                    $title= $post->title_ar;


                                    }
                                    @endphp



                                    <div class="col">

                                        <div class="post-grid ">

                                            <div class="post-header clearfix">
                                            <div class="image"><img src="{{ URL("uploads/posts/".$post->f_image)}}" class="img-circle" alt="{{  $title }}" />
                                                </div>
                                                <h5><a href="{{ route('post',$post->slug) }}">{{  $title }}</a></h5>
                                            </div>


                                            <div class="post-content">


                                                <a href="{{ route('post',$post->slug) }}" class="btn-read-more">{{ trans('frontend.read_more') }} <i class="dripicons-arrow-thin-right"></i></a>

                                            </div>

                                            <div class="post-meta">

                                                @foreach ($post->categories as $category => $value)
                                                @php

                                                $cat = "";


                                                if (trans('frontend.code') =="en") {

                                                $cat = $post->categories[$category]->name_en;


                                                }elseif (trans('frontend.code') == "tr") {

                                                $cat = $post->categories[$category]->name_tr;


                                                }else {
                                                $cat = $post->categories[$category]->name_ar;
                                                }
                                                @endphp
                                                <span> <i class="dripicons-user"></i> <a href="#"> {{ $cat }}</a></span>


                                                @endforeach

                                                <span><i class="dripicons-calendar"></i> <a href="#">{{$post->date}}</a></span>

                                            </div>

                                        </div>

                                    </div>


                                    @endforeach





                                </div>

                            <p class="mt-60 text-center"><a href="{{ URL('/blog')}}" class="text-underline">{{ trans('frontend.read_all_news') }}</a> </p>

                            </div>

                        </section>

			<!-- end Site Content -->






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
                    },5000);
                    }
                    });
                    }
                    })
                    }

                </script>



<script>

   if ($("#contact_form1").length > 0) {
$("#contact_form1").validate({

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
$('#send_form1').html('Sending..');
$.ajax({
url: '{{ url('contact/send_message') }}' ,
type: "POST",
data: $('#contact_form1').serialize(),
success: function( response ) {
$('#send_form1').html('Submit');
$('#res_message').show();
$('#res_message').html(response.msg);
$('#msg_div').removeClass('d-none');

document.getElementById("contact_form1").reset();
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


<script>

  if ($("#contact_form2").length > 0) {
$("#contact_form2").validate({

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
$('#send_form2').html('Sending..');
$.ajax({
url: '{{ url('contact/send_message') }}' ,
type: "POST",
data: $('#contact_form2').serialize(),
success: function( response ) {
$('#send_form2').html('Submit');
$('#res_message').show();
$('#res_message').html(response.msg);
$('#msg_div').removeClass('d-none');

document.getElementById("contact_form2").reset();
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

<script>
    if ($("#contact_form3").length > 0) {
    $("#contact_form3").validate({

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
    $('#send_form3').html('Sending..');
    $.ajax({
    url: '{{ url('contact/send_message') }}' ,
    type: "POST",
    data: $('#contact_form3').serialize(),
    success: function( response ) {
    $('#send_form3').html('Submit');
    $('#res_message').show();
    $('#res_message').html(response.msg);
    $('#msg_div').removeClass('d-none');

    document.getElementById("contact_form3").reset();
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



@endsection

