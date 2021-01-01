<!-- start Header -->
<header id="header-waypoint-sticky" class="header-main header-mobile-menu with-absolute-navbar">

    <div class="header-top">

        <div class="container">
            <div class="row align-items-center ">
                <div class="col-4">
                    <div class="header-logo">
                        <a href="<?php echo e(URL('/')); ?>"><img
                                src="<?php echo e(URL::to('uploads/settings/')); ?>/<?php echo e(GeneralSiteSettings("site_logo_" .trans('frontend.boxCode'))); ?>"
                                alt="<?php echo e(GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))); ?>" /></a>
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
                                            <a class="dropdown-item <?php if(trans('frontend.code')=="en" ): ?>  active <?php endif; ?> "  href="<?php echo e(URL::to('lang/en')); ?>"  ><span class="image"><img src="<?php echo e(asset('frontend/font-icons/img-flaticon-flags-4/png/en.png')); ?>" alt="<?php echo e(GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))); ?>" /></span> <?php echo e(trans('frontend.english')); ?></a>
   <a class="dropdown-item <?php if(trans('frontend.code')=="tr" ): ?>  active <?php endif; ?> "  href="<?php echo e(URL::to('lang/tr')); ?>"  ><span class="image"><img src="<?php echo e(asset('frontend/font-icons/img-flaticon-flags-4/png/tr.png')); ?>" alt="<?php echo e(GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))); ?>" /></span> <?php echo e(trans('frontend.turkish')); ?></a>
   <a class="dropdown-item <?php if(trans('frontend.code')=="ar" ): ?>  active <?php endif; ?> "  href="<?php echo e(URL::to('lang/ar')); ?>"  ><span class="image"><img src="<?php echo e(asset('frontend/font-icons/img-flaticon-flags-4/png/ar.png')); ?>" alt="<?php echo e(GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))); ?>" /></span> <?php echo e(trans('frontend.arabic')); ?></a>

                                        </div>
                                    </div>
                                </div>
                            </li>





                            <li class="d-none d-md-block">
                                        <div class="dropdown dropdown-language">
                                          <a href="#" class="btn btn-text-inherit btn-interactive" id="dropdownLangauge" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    <span class="image">

                                                                        <img src="<?php echo e(asset('frontend/font-icons/img-flaticon-flags-4/png/')); ?>/<?php echo e(trans('frontend.boxCode')); ?>.png"
                                                                            alt="<?php echo e(GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))); ?>" /></span><?php echo e(trans('frontend.site_language')); ?>

                                                                </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLangauge">
                                                <div class="dropdown-menu-inner">
                                                  <a class="dropdown-item <?php if(trans('frontend.code')==" en" ): ?> active <?php endif; ?> "  href=" <?php echo e(URL::to('lang/en')); ?>"><span
                                                                class="image"><img src="<?php echo e(asset('frontend/font-icons/img-flaticon-flags-4/png/en.png')); ?>"
                                                                    alt="<?php echo e(GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))); ?>" /></span>
                                                            <?php echo e(trans('frontend.english')); ?></a>
                                                        <a class="dropdown-item <?php if(trans('frontend.code')==" tr" ): ?> active <?php endif; ?> "  href=" <?php echo e(URL::to('lang/tr')); ?>"><span
                                                                class="image"><img src="<?php echo e(asset('frontend/font-icons/img-flaticon-flags-4/png/tr.png')); ?>"
                                                                    alt="<?php echo e(GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))); ?>" /></span>
                                                            <?php echo e(trans('frontend.turkish')); ?></a>
                                                        <a class="dropdown-item <?php if(trans('frontend.code')==" ar" ): ?> active <?php endif; ?> "  href=" <?php echo e(URL::to('lang/ar')); ?>"><span
                                                                class="image"><img src="<?php echo e(asset('frontend/font-icons/img-flaticon-flags-4/png/ar.png')); ?>"
                                                                    alt="<?php echo e(GeneralSiteSettings("site_title_" .trans('frontend.boxCode'))); ?>" /></span>
                                                            <?php echo e(trans('frontend.arabic')); ?></a>
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
                                <li><a href="<?php echo e(URL('/')); ?>"><?php echo e(trans('frontend.home')); ?></a>

                                </li>

                                <li><a href="<?php echo e(URL('/tours')); ?>"><?php echo e(trans('frontend.tours')); ?></a>

                                </li>


                                <li><a href="<?php echo e(URL('/rooms')); ?>"><?php echo e(trans('frontend.rooms')); ?></a>

                                </li>

                                <li><a href="<?php echo e(URL('/services')); ?>"><?php echo e(trans('frontend.services')); ?></a>

                                </li>

                                <li><a href="<?php echo e(URL('/testimonials')); ?>"><?php echo e(trans('frontend.testimonials')); ?></a>

                                </li>

                                <li><a href="<?php echo e(URL('/blog')); ?>"><?php echo e(trans('frontend.blog')); ?></a>

                                </li>


                                <li><a href="<?php echo e(URL('/about')); ?>"><?php echo e(trans('frontend.about_us')); ?></a>

                                </li>

                                <li><a href="<?php echo e(URL('contact')); ?>"><?php echo e(trans('frontend.contact_us')); ?></a>

                                </li>





                            </ul>





                        </nav>
                        <!--/.nav-collapse -->

                    </div>

                    <div class="navbar-phone d-none d-lg-block">
                        <?php echo e(trans('frontend.hotline')); ?>: <a href="tel:<?php echo e(GeneralSiteSettings("site_mobile")); ?>"><?php echo e(GeneralSiteSettings("site_mobile")); ?></a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</header>
<!-- end Header -->
