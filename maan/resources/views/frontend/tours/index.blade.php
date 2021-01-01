@extends('frontend/app')

@section('main-content')




		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
<div class="page-title-02 bg-image overlay-relative"
            style="background-image:url('{{asset('frontend/images/image-bg/01.jpg')}}');">
            <div class="overlay-holder opacity-5"></div>
            <div class="container">
                <h2>{{ trans('frontend.our_tours') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ URL('/')}}">{{ trans('frontend.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('frontend.tours') }}</li>
                    </ol>
                </nav>
            </div>
        </div>

			<section class="page-wrapper bg-light-primary">

				<div class="container">

					<div class="row gap-20 gap-md-30 gap-xl-40">



						<div class="col-12 col-lg-12">

							<div class="content-wrapper">



								<div class="row equal-height cols-1 cols-md-2 cols-lg-3 gap-10 gap-lg-20">













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

    <div class="product-grid-item">

        <a href="{{ URL("/tours/tour/".$tour->slug) }}">

            <div class="image">
                <img src="{{ URL::to('uploads/tour',$tour->f_image) }}" alt="{{ $title }}">
            </div>

            <div class="content clearfix">

                <div class="rating-item rating-sm rating-inline clearfix">

                </div>

                <div class="short-info">

                <h6>{{ $title }}</h6>

                </div>
                <div class="price">
                    <div class="float-right">
                        <span class="text-secondary">{{$tour->price}}</span>
                    </div>
                </div>


            </div>

        </a>

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

		</div>
		<!-- end Main Wrapper -->










@endsection

