@extends('frontend/app')

@section('main-content')

		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-action">

			<div class="page-title-02 bg-image overlay-relative" style="background-image:url('{{asset('frontend/images/image-bg/01.jpg')}}');">
				<div class="overlay-holder opacity-5"></div>
				<div class="container">
					<h2>{{ trans('frontend.blog') }}</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ URL('/')}}">{{ trans('frontend.home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ trans('frontend.blog') }}</li>
						</ol>
					</nav>
				</div>
			</div>

			<section>

				<div class="container">

					<div class="row gap-40">

				<div class="col-12 col-lg-9">

                    <div class="content-wrapper">

                        <div class="post-horizon-wrapper-02">

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






<article class="post-horizon-item">

            <div class="image">
                <img src="{{ URL("uploads/posts/".$post->f_image)}}" alt="{{$title}}" />
            </div>
            <div class="content">
               <h4><a href="{{ route('post',$post->slug) }}">{{ $title}}</a></h4>
                <div class="meta text-muted">
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
                <a href="#" class="text-dark">{{ $cat }}</a> | <span>{{$post->date}}</span>
                    @endforeach
                </div>
                <div class="blog-entry">



                    <a href="{{ route('post',$post->slug) }}" class="btn-read-more">{{ trans('frontend.read_more') }} <i class="dripicons-arrow-thin-right"></i></a>

                </div>

            </div>

        </article>





@endforeach





								</div>
@if ($posts->lastPage() > 1)
<nav aria-label="Page navigation">
    <ul class="pagination">
        @if($posts->currentPage() != 1 && $posts->lastPage() >= 5)
        <li>
            <a href="{{ $posts->url($posts->url(1)) }}" aria-label="Previous">
                <span aria-hidden="true">First</span>
            </a>
        </li>
        @endif
        @if($posts->currentPage() != 1)
        <li>
            <a href="{{ $posts->url($posts->currentPage()-1) }}" aria-label="Previous">
                <span aria-hidden="true">&#x3C;</span>
            </a>
        </li>
        @endif
        @for($i = max($posts->currentPage()-2, 1); $i <= min(max($posts->currentPage()-2, 1)+4,$posts->lastPage());
            $i++)
            @if($posts->currentPage() == $i)
            <li class="active">
                @else
            <li>
                @endif
                <a href="{{ $posts->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            @if ($posts->currentPage() != $posts->lastPage())
            <li>
                <a href="{{ $posts->url($posts->currentPage()+1) }}" aria-label="Next">
                    <span aria-hidden="true">&#x3E;</span>
                </a>
            </li>
            @endif
            @if ($posts->currentPage() != $posts->lastPage() && $posts->lastPage() >= 5)
            <li>
                <a href="{{ $posts->url($posts->lastPage()) }}" aria-label="Next">
                    <span aria-hidden="true">Last</span>
                </a>
            </li>
            @endif
    </ul>
</nav>
@endif

							</div>

						</div>

						<div class="col-12 col-lg-3">

							<aside class="sidebar-wrapper style-02">



								<div class="sidebar-box">

									<div class="box-title"><h5><span>{{ trans('frontend.categories') }}</span></h5></div>

									<div class="box-content">

										<ul class="category-list">


                                            @foreach ($categories as $category)
@php

$cate = "";


if (trans('frontend.code') =="en") {

$cate = $category->name_en;


}elseif (trans('frontend.code') == "tr") {

$cate = $category->name_tr;


}else {
$cate = $category->name_ar;
}
@endphp





											<li><a href="#">{{ $cate }}</a></li>

@endforeach
										</ul>

									</div>

								</div>

								<div class="sidebar-box">

									<div class="box-title"><h5><span>  {{ trans('frontend.recent_posts') }}</span></h5></div>

									<div class="box-content">

										<ul class="post-small-list">

                                            @foreach ($reposts as $repost)

@php

        $rtitle = "";



        if (trans('frontend.code') =="en") {
        $rtitle= $repost->title_en;


        }elseif (trans('frontend.code') == "tr") {
        $rtitle= $repost->title_tr;


        }else {
        $rtitle= $repost->title_ar;


        }
        @endphp


											<li class="clearfix">
												<a href="{{ route('post',$repost->slug) }}">
													<div class="image">
														<img src="{{ URL("uploads/posts/".$repost->f_image)}}" alt="{{ $rtitle}}" />
													</div>
													<div class="content">
														<h6>{{ $rtitle}}</h6>
                                                    <p class="recent-post-sm-meta text-muted"><i class="dripicons-calendar mr-5"></i>{{ $repost->date }}</p>
													</div>
												</a>
											</li>
@endforeach

										</ul>

									</div>

								</div>


							</aside>

						</div>

					</div>

				</div>

			</section>

		</div>
		<!-- end Main Wrapper -->







@endsection
