<!-- start Header -->
<header id="header-waypoint-sticky" class="header-main header-mobile-menu with-absolute-navbar">

    <div class="header-top">

        <div class="container">
            <div class="row align-items-center ">
                <div class="col-4">
                    <div class="header-logo">
                        <a href="{{URL('/')}}"><img
                                src="{{URL::to('uploads/settings/')}}/{{GeneralSiteSettings("site_logo_" .trans('frontend.boxCode'))}}"
                                alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="mini-menu">
                        <ul>
                            <li class="d-block d-md-none">
                                <div class="dropdown dropdown-currency">
                                    <a href="#" class="btn btn-text-inherit btn-interactive" id="dropdownMobileSetting"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-language" aria-hidden="true" ></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMobileSetting">
                                        <div class="dropdown-menu-inner">

                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item @if (trans('frontend.code')=="en" )  active @endif "  href="{{ URL::to('lang/en') }}"  ><span class="image"><img src="{{ asset('frontend/font-icons/img-flaticon-flags-4/png/en.png') }}" alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></span> {{ trans('frontend.english') }}</a>
   <a class="dropdown-item @if (trans('frontend.code')=="tr" )  active @endif "  href="{{ URL::to('lang/tr') }}"  ><span class="image"><img src="{{ asset('frontend/font-icons/img-flaticon-flags-4/png/tr.png') }}" alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></span> {{ trans('frontend.turkish') }}</a>
   <a class="dropdown-item @if (trans('frontend.code')=="ar" )  active @endif "  href="{{ URL::to('lang/ar') }}"  ><span class="image"><img src="{{ asset('frontend/font-icons/img-flaticon-flags-4/png/ar.png') }}" alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></span> {{ trans('frontend.arabic') }}</a>

                                        </div>
                                    </div>
                                </div>
                            </li>





                            <li class="d-none d-md-block">
                                        <div class="dropdown dropdown-language">
                                          <a href="#" class="btn btn-text-inherit btn-interactive" id="dropdownLangauge" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    <span class="image">

                                                                        <img src="{{ asset('frontend/font-icons/img-flaticon-flags-4/png/')}}/{{trans('frontend.boxCode') }}.png"
                                                                            alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></span>{{trans('frontend.site_language')}}
                                                                </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLangauge">
                                                <div class="dropdown-menu-inner">
                                                  <a class="dropdown-item @if (trans('frontend.code')==" en" ) active @endif "  href=" {{ URL::to('lang/en') }}"><span
                                                                class="image"><img src="{{ asset('frontend/font-icons/img-flaticon-flags-4/png/en.png') }}"
                                                                    alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></span>
                                                            {{ trans('frontend.english') }}</a>
                                                        <a class="dropdown-item @if (trans('frontend.code')==" tr" ) active @endif "  href=" {{ URL::to('lang/tr') }}"><span
                                                                class="image"><img src="{{ asset('frontend/font-icons/img-flaticon-flags-4/png/tr.png') }}"
                                                                    alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></span>
                                                            {{ trans('frontend.turkish') }}</a>
                                                        <a class="dropdown-item @if (trans('frontend.code')==" ar" ) active @endif "  href=" {{ URL::to('lang/ar') }}"><span
                                                                class="image"><img src="{{ asset('frontend/font-icons/img-flaticon-flags-4/png/ar.png') }}"
                                                                    alt="{{ GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))}}" /></span>
                                                            {{ trans('frontend.arabic') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>



                            <li class="d-lg-none">
                                <button class="btn btn-toggle collapsed" data-toggle="collapse"
                                    data-target="#mobileMenuMain"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="header-nav">

        <div class="container">

            <div class="navbar-wrapper">

                <div class="navbar navbar-expand-lg">

                    <div id="mobileMenuMain" class="collapse navbar-collapse">

                        <nav class="main-nav-menu main-menu-nav navbar-arrow">

                            <ul class="main-nav">
                                <li><a href="{{ URL('/')}}">{{ trans('frontend.home') }}</a>

                                </li>

                                <li><a href="{{ URL('/tours')}}">{{ trans('frontend.tours') }}</a>

                                </li>


                                <li><a href="{{ URL('/rooms')}}">{{ trans('frontend.rooms') }}</a>

                                </li>

                                <li><a href="{{ URL('/services')}}">{{ trans('frontend.services') }}</a>

                                </li>

                                <li><a href="{{ URL('/testimonials')}}">{{ trans('frontend.testimonials') }}</a>

                                </li>

                                <li><a href="{{ URL('/blog')}}">{{ trans('frontend.blog') }}</a>

                                </li>


                                <li><a href="{{ URL('/about')}}">{{ trans('frontend.about_us') }}</a>

                                </li>

                                <li><a href="{{ URL('contact')}}">{{ trans('frontend.contact_us') }}</a>

                                </li>





                            </ul>





                        </nav>
                        <!--/.nav-collapse -->

                    </div>

                    <div class="navbar-phone d-none d-lg-block">
                        {{ trans('frontend.hotline') }}: <a href="tel:{{ GeneralSiteSettings("site_mobile")}}">{{ GeneralSiteSettings("site_mobile")}}</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</header>
<!-- end Header -->
