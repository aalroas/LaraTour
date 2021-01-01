<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="<?php echo e(URL('admin/dashboard')); ?>"><img
                src="<?php echo e(URL('uploads/settings/'.GeneralSiteSettings('site_logo_'.trans('backend.boxCode')))); ?>"
                alt="<?php echo e(GeneralSiteSettings('site_title_'.trans('backend.boxCode'))); ?>"
                class="img-fluid logo"><span><?php echo e(trans('backend.cpanel')); ?></span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i
                class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="<?php echo e(URL('uploads/users/'.Auth::user()->image)); ?>"
                alt="<?php echo e(GeneralSiteSettings('site_title_'.trans('backend.boxCode'))); ?>"
                    class="user-photo">
            </div>
            <div class="dropdown">
                <span><?php echo e(trans('backend.welcome')); ?>,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>
                        <?php echo e(Auth::user()->name); ?></strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">

                    <li><a href="<?php echo e(route('user.edit',Auth::user()->id)); ?>"><i class="icon-user"></i><?php echo e(trans('backend.profile')); ?></a></li>




                    <li><a href="<?php echo e(route('setting.edit')); ?>"><i
                                class="icon-settings"></i><?php echo e(trans('backend.settings')); ?></a></li>




                    <li><a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                                                                                 document.getElementById('logout-form').submit();" class="icon-menu"><i
                            class="icon-power"></i>
                        <?php echo e(trans('backend.logout')); ?> </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">

                <li class="active">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="active"><i
                            class="icon-home"></i><span><?php echo e(trans('backend.dashboard')); ?></span></a>

                </li>
                <li>
                    <a href="<?php echo e(route('slider.index')); ?>"><i
                            class="icon-screen-desktop"></i><span><?php echo e(trans('backend.sliders')); ?></span></a>

                </li>

                <li class="has-arrow">
                    <a href="#">
                        <i class="icon-briefcase"></i> <span><?php echo e(trans('backend.Rooms')); ?></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('room.index')); ?>"><span><?php echo e(trans('backend.Rooms')); ?></span></a>
                        </li>

                        <li><a href="<?php echo e(route('roocats.index')); ?>"> <?php echo e(trans('backend.category')); ?></a></li>
                    </ul>
                </li>




<li>
    <a href="<?php echo e(route('tour.index')); ?>"><i
            class="icon-star"></i><span><?php echo e(trans('backend.tours')); ?></span></a>

</li>


                <li class="has-arrow">
                    <a href="#">
                        <i class="icon-pencil"></i> <span><?php echo e(trans('backend.blog')); ?></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('post.index')); ?>"><?php echo e(trans('backend.posts')); ?></a></li>

                        <li><a href="<?php echo e(route('category.index')); ?>"> <?php echo e(trans('backend.category')); ?></a></li>



                    </ul>
                </li>


<li>
        <a href="<?php echo e(route('testimonial.index')); ?>"><i class="icon-user-following"></i><span><?php echo e(trans('backend.testimonials')); ?></span></a>

    </li>


    


        <li>
                <a href="<?php echo e(route('about.edit')); ?>"><i class="icon-emoticon-smile"></i><span><?php echo e(trans('backend.about')); ?></span></a>

            </li>



                <li>
                    <a href="<?php echo e(route('service.index')); ?>"><i
                            class="icon-plane"></i><span><?php echo e(trans('backend.services')); ?></span></a>

                </li>




                <li>
                    <a href="<?php echo e(route('contact.edit')); ?>"><i
                            class="icon-call-in"></i><span><?php echo e(trans('backend.contact')); ?></span></a>

                </li>


                <li>
                    <a href="<?php echo e(URL('/contact_forms')); ?>"><i class="icon-bubbles"></i><span><?php echo e(trans('backend.contact_forms')); ?></span></a>

                </li>

<li>
    <a href="<?php echo e(URL('/translations')); ?>"><i class="icon-globe"></i><span><?php echo e(trans('backend.translations')); ?></span></a>

</li>


<li>
    <a href="<?php echo e(route('user.index')); ?>"><i class="icon-user"></i><span><?php echo e(trans('backend.users')); ?></span></a>

</li>



                <li>
                    <a href="<?php echo e(route('setting.edit')); ?>"><i
                            class="icon-settings"></i><span><?php echo e(trans('backend.settings')); ?></span></a>

                </li>

            </ul>
        </nav>
    </div>
</div>
