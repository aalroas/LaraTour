@extends('frontend/app')

@section('main-content')

<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-action">

    <div class="page-title-02 bg-image overlay-relative"
        style="background-image:url('{{asset('frontend/images/image-bg/01.jpg')}}');">
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

								<div class="post-horizon-wrapper">

									<article class="post-horizon-item blog-single clearfix">

                                        @php

                                        $title = "";

                                        $text = "";

                                        if (trans('frontend.code') =="en") {
                                        $title= $post->title_en;
                                        $text= $post->text_en;



                                        }elseif (trans('frontend.code') == "tr") {
                                        $title= $post->title_tr;

                                        $text= $post->text_tr;


                                        }else {
                                        $title= $post->title_ar;
                                        $text= $post->text_ar;


                                        }
                                        @endphp


										<div class="blog-media">
                                        <img src="{{ URL("uploads/posts/".$post->f_image)}}" alt="{{ $title }}">
										</div>

										<div class="blog-content mt-30">
											<h3>{{ $title }}</h3>
											<ul class="blog-meta clearfix">

                                            <li>{{ $post->date }}</li>
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
                                         @endforeach
                                            <li>{{ trans('frontend.in') }} |  {{$cat }}</li>

											</ul>
											<div class="blog-entry">

                                         {!!  $text !!}
                                            </div>

										</div>

										<div class="blog-extra bg-light-primary">
											<div class="row gap-20 align-items-center">


												<div class="col-xs-12 col-lg-6">
													<ul class="social-share-sm float-left float-lg-left">

														<li><span><i class="fas fa-share-square"></i> {{ trans('frontend.share') }}</span></li>


                                                       	<li class="the-label"> <a href="mailto:?Subject={{ $title }}&amp;Body={{url()->current()}}">

                                                            <i class="fa fa-envelope  "></i> </a></li>

                                                       	<li class="the-label"> <a href="https://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank">

                                                            <i class="fab fa-facebook "></i> </a></li>

                                                      	<li class="the-label">  <a href="https://plus.google.com/share?url={{url()->current()}}" target="_blank">

                                                            <i class="fab fa-google-plus"></i> </a></li>




                                                      	<li class="the-label">  <a href="https://twitter.com/share?url={{url()->current()}}&amp;text={{ $title }}&amp;hashtags=maan_tours"
                                                            target="_blank">

                                                            <i class="fab fa-twitter "></i> </a></li>



                                                      	<li class="the-label">  <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share">


                                                            <i class="fab fa-whatsapp  "></i>


                                                        </a></li>


													</ul>
												</div>
											</div>
										</div>

									</article>

									<div class="mb-40"></div>


<div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

    <h3 class="heading-title"><span>{{ trans('frontend.comments') }}</span></h3>

    <div class="change-search-wrapper">

        <div class="alert alert-success d-none" id="msg_div">
            <span id="res_message"></span>
        </div>

        <div class="row gap-10 gap-xl-20 align-items-end">


 <div class="fb-comments" data-href="https://www.maantour61.com/" data-width="100%" data-numposts="10"></div>






        </div>

    </div>


</div>

								</div>

							</div>

                        </div>

                <div class="col-12 col-lg-3">

                    <aside class="sidebar-wrapper style-02">



                        <div class="sidebar-box">

                            <div class="box-title">
                                <h5><span>{{ trans('frontend.categories') }}</span></h5>
                            </div>

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

                            <div class="box-title">
                                <h5><span> {{ trans('frontend.recent_posts') }}</span></h5>
                            </div>

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
                                                <img src="{{ URL("uploads/posts/".$repost->f_image)}}"
                                                    alt="{{ $rtitle}}" />
                                            </div>
                                            <div class="content">
                                                <h6>{{ $rtitle}}</h6>
                                                <p class="recent-post-sm-meta text-muted"><i
                                                        class="dripicons-calendar mr-5"></i>{{ $repost->date }}</p>
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
