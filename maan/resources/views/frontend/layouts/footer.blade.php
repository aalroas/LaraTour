<!-- start Footer Wrapper -->
<footer class="footer-wrapper scrollspy-stopper">

    <div class="container">
        <div class="row gap-40 gap-md-50">
            <div class="col-12 col-lg-6">
                <div class="col-inner">
                    <h4 class="footer-title">{{ GeneralSiteSettings("site_title_" . trans('frontend.boxCode')) }}</h4>
                    <p class="font-lg line-145">{{ GeneralSiteSettings("site_meta_description_" . trans('frontend.boxCode'))}}</p>
                    <p class="footer-address mt-20">{{ GeneralSiteSettings("site_address_" .trans('frontend.boxCode'))}}</p>
                 {{ trans('frontend.phone') }} :
                    <a href="tel:{{ GeneralSiteSettings("site_phone")}}">{{ GeneralSiteSettings("site_phone")}}</a>
<br>
            {{ trans('frontend.mobile') }} :
                        <a href="tel:{{ GeneralSiteSettings("site_mobile")}}">{{ GeneralSiteSettings("site_mobile")}}</a>
<br>

   <a href="tel:{{ GeneralSiteSettings("site_fax")}}">{{ trans('frontend.fax') }} :
                        {{ GeneralSiteSettings("site_fax")}}</a>
                        <br>
<a href="mailto:{{ GeneralSiteSettings("site_email")}}">{{ trans('frontend.email') }} :
                    {{ GeneralSiteSettings("site_email")}}</a>
                    <br>
                    <a href="#">{{ trans('frontend.website') }} :
                                        {{ GeneralSiteSettings("site_url")}}</a>

                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="col-inner">
                    <div class="row gap-40 gap-md-20">
                        <div class="col-12 col-md-5">
                            <div class="col-inner mt-15-sm">
                                <h5 class="footer-title">{{ trans('frontend.quick_menu') }} </h5>

                                <ul class="footer-menu">
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
                            </div>

                        </div>
                        <div class="col-12 col-md-7">
                            <div class="col-inner mt-25-sm">


                                <h5 class="footer-title">{{ trans('frontend.socials_account') }}</h5>

                                 <div class="footer-socials">
                                 <a href="{{ GeneralSiteSettings("site_facebook_url")}}" target="_blank"><i class="fab fa-facebook-f"></i></a>

                                <a href="{{ GeneralSiteSettings("site_instagram_url")}}" target="_blank"><i class="fab fa-instagram"></i></a>

                                <a href="{{ GeneralSiteSettings("site_twitter_url")}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="{{ GeneralSiteSettings("site_linkedin_url")}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="{{ GeneralSiteSettings("site_whatsapp_url")}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="post-footer">

        <div class="container">

            <p class="footer-copy-right"> {{ GeneralSiteSettings("copy_right_" .trans('frontend.boxCode'))}}</p>
            <a href="https://www.kodatik.com"> <span style="color:#fff;"> {{ trans('frontend.Developedby:') }} &nbsp; </span> </a>
                <a href="https://www.kodatik.com"><img style="width:80px;height:20px;" src="https://www.kodatik.com/images/logo.png"
                        alt="kodatik.com<" data-no-retina="">
                </a>

        </div>

    </div>

</footer>
<!-- start Footer Wrapper -->
