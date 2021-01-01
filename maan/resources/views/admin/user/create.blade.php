@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.users') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">{{ trans('backend.dashboard') }}</a></li>

                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">

                    @include('includes.messages')

                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">

                <form role="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="row clealfix">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.image') }}</h2>
                                </div>
                                <div class="body">
                                    <input type="file" class="dropify" data-default-file=""
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="image" required>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row clealfix">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.name') }}</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="name" name="name">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.email') }} </h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="email" name="email">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.password') }}</h2>
                                </div>
                                <div class="body">

                                    <input type="password" class="form-control" id="password" name="password">

                                </div>
                            </div>


                        </div>
<div class="col-sm-6">
                        <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.repassword') }}</h2>
                                </div>
                                <div class="body">

                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">

                                </div>
                            </div>
</div>
                    </div>



                    <div class="row clealfix">


                        <div class="col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.phone') }}</h2>
                                </div>
                                <div class="body">

                                    <input type="text" autocomplete="off" name="phone" class="form-control">

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.active') }}</h2>
                                </div>
                                <div class="body">
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="status" class="multiselect multiselect-custom">
                                            <option value="1">{{ trans('backend.yes') }}</option>
                                            <option value="0">{{ trans('backend.no') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>



                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                        <a type="button" class="btn btn-warning"
                            href="{{   route('user.index')   }}">{{ trans('backend.back') }}</a>
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


@endsection
