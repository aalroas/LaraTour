<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="{{URL('admin/dashboard')}}"><img
                src="{{ URL('uploads/settings/'.GeneralSiteSettings('site_logo_'.trans('backend.boxCode')))}}"
                alt="{{ GeneralSiteSettings('site_title_'.trans('backend.boxCode'))}}"
                class="img-fluid logo"><span>{{ trans('backend.cpanel') }}</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i
                class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{ URL('uploads/users/'.Auth::user()->image) }}"
                alt="{{ GeneralSiteSettings('site_title_'.trans('backend.boxCode'))}}"
                    class="user-photo">
            </div>
            <div class="dropdown">
                <span>{{ trans('backend.welcome') }},</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>
                        {{ Auth::user()->name }}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">

                    <li><a href="{{ route('user.edit',Auth::user()->id)}}"><i class="icon-user"></i>{{ trans('backend.profile') }}</a></li>




                    <li><a href="{{ route('setting.edit')}}"><i
                                class="icon-settings"></i>{{ trans('backend.settings') }}</a></li>


{{-- // updatedx --}}

                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                                                                 document.getElementById('logout-form').submit();" class="icon-menu"><i
                            class="icon-power"></i>
                        {{ trans('backend.logout') }} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">

                <li class="active">
                    <a href="{{ route('admin.dashboard')}}" class="active"><i
                            class="icon-home"></i><span>{{ trans('backend.dashboard') }}</span></a>

                </li>
                <li>
                    <a href="{{ route('slider.index')}}"><i
                            class="icon-screen-desktop"></i><span>{{ trans('backend.sliders') }}</span></a>

                </li>

                <li class="has-arrow">
                    <a href="#">
                        <i class="icon-briefcase"></i> <span>{{ trans('backend.Rooms') }}</span>
                    </a>
                    <ul>
                        <li><a href="{{ route('room.index')}}"><span>{{ trans('backend.Rooms') }}</span></a>
                        </li>

                        <li><a href="{{ route('roocats.index') }}"> {{ trans('backend.category') }}</a></li>
                    </ul>
                </li>




<li>
    <a href="{{ route('tour.index')}}"><i
            class="icon-star"></i><span>{{ trans('backend.tours') }}</span></a>

</li>


                <li class="has-arrow">
                    <a href="#">
                        <i class="icon-pencil"></i> <span>{{ trans('backend.blog') }}</span>
                    </a>
                    <ul>
                        <li><a href="{{ route('post.index') }}">{{ trans('backend.posts') }}</a></li>

                        <li><a href="{{ route('category.index') }}"> {{ trans('backend.category') }}</a></li>



                    </ul>
                </li>


<li>
        <a href="{{ route('testimonial.index')}}"><i class="icon-user-following"></i><span>{{ trans('backend.testimonials') }}</span></a>

    </li>


    {{-- <li>
            <a href="{{ route('team.index')}}"><i class="icon-star"></i><span>{{ trans('backend.teams') }}</span></a>

        </li> --}}


        <li>
                <a href="{{ route('about.edit')}}"><i class="icon-emoticon-smile"></i><span>{{ trans('backend.about') }}</span></a>

            </li>



                <li>
                    <a href="{{ route('service.index')}}"><i
                            class="icon-plane"></i><span>{{ trans('backend.services') }}</span></a>

                </li>




                <li>
                    <a href="{{ route('contact.edit')}}"><i
                            class="icon-call-in"></i><span>{{ trans('backend.contact') }}</span></a>

                </li>


                <li>
                    <a href="{{ URL('/contact_forms')}}"><i class="icon-bubbles"></i><span>{{ trans('backend.contact_forms') }}</span></a>

                </li>

<li>
    <a href="{{ URL('/translations')}}"><i class="icon-globe"></i><span>{{ trans('backend.translations') }}</span></a>

</li>


<li>
    <a href="{{ route('user.index')}}"><i class="icon-user"></i><span>{{ trans('backend.users') }}</span></a>

</li>



                <li>
                    <a href="{{ route('setting.edit')}}"><i
                            class="icon-settings"></i><span>{{ trans('backend.settings') }}</span></a>

                </li>

            </ul>
        </nav>
    </div>
</div>
