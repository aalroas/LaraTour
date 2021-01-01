<!-- start Footer Wrapper -->
<footer class="footer-wrapper scrollspy-stopper">

    <div class="container">
        <div class="row gap-40 gap-md-50">
            <div class="col-12 col-lg-6">
                <div class="col-inner">
                    <h4 class="footer-title"><?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode'))); ?></h4>
                    <p class="font-lg line-145"><?php echo e(GeneralSiteSettings("site_meta_description_" . trans('frontend.boxCode'))); ?></p>
                    <p class="footer-address mt-20"><?php echo e(GeneralSiteSettings("site_address_" .trans('frontend.boxCode'))); ?></p>
                 <?php echo e(trans('frontend.phone')); ?> :
                    <a href="tel:<?php echo e(GeneralSiteSettings("site_phone")); ?>"><?php echo e(GeneralSiteSettings("site_phone")); ?></a>
<br>
            <?php echo e(trans('frontend.mobile')); ?> :
                        <a href="tel:<?php echo e(GeneralSiteSettings("site_mobile")); ?>"><?php echo e(GeneralSiteSettings("site_mobile")); ?></a>
<br>

   <a href="tel:<?php echo e(GeneralSiteSettings("site_fax")); ?>"><?php echo e(trans('frontend.fax')); ?> :
                        <?php echo e(GeneralSiteSettings("site_fax")); ?></a>
                        <br>
<a href="mailto:<?php echo e(GeneralSiteSettings("site_email")); ?>"><?php echo e(trans('frontend.email')); ?> :
                    <?php echo e(GeneralSiteSettings("site_email")); ?></a>
                    <br>
                    <a href="#"><?php echo e(trans('frontend.website')); ?> :
                                        <?php echo e(GeneralSiteSettings("site_url")); ?></a>

                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="col-inner">
                    <div class="row gap-40 gap-md-20">
                        <div class="col-12 col-md-5">
                            <div class="col-inner mt-15-sm">
                                <h5 class="footer-title"><?php echo e(trans('frontend.quick_menu')); ?> </h5>

                                <ul class="footer-menu">
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
                            </div>

                        </div>
                        <div class="col-12 col-md-7">
                            <div class="col-inner mt-25-sm">


                                <h5 class="footer-title"><?php echo e(trans('frontend.socials_account')); ?></h5>

                                 <div class="footer-socials">
                                 <a href="<?php echo e(GeneralSiteSettings("site_facebook_url")); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>

                                <a href="<?php echo e(GeneralSiteSettings("site_instagram_url")); ?>" target="_blank"><i class="fab fa-instagram"></i></a>

                                <a href="<?php echo e(GeneralSiteSettings("site_twitter_url")); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo e(GeneralSiteSettings("site_linkedin_url")); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="<?php echo e(GeneralSiteSettings("site_whatsapp_url")); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
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

            <p class="footer-copy-right"> <?php echo e(GeneralSiteSettings("copy_right_" .trans('frontend.boxCode'))); ?></p>
            <a href="https://www.kodatik.com"> <span style="color:#fff;"> <?php echo e(trans('frontend.Developedby:')); ?> &nbsp; </span> </a>
                <a href="https://www.kodatik.com"><img style="width:80px;height:20px;" src="https://www.kodatik.com/images/logo.png"
                        alt="kodatik.com<" data-no-retina="">
                </a>

        </div>

    </div>

</footer>
<!-- start Footer Wrapper -->
