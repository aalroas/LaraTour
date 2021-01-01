@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.user') }}</h1>
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

                <form role="form" action="{{ route('user.update',$user->id) }}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="row clealfix">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.image') }}</h2>
                                </div>
                                <div class="body">
                                    <input type="file" class="form-control dropify" id="image"
                                        data-default-file="{{ URL::to('uploads/users', $user->image) }}"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="image">
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

                                    <input
                                        value="@if (old('name')){{ old('name') }}@else{{ $user->name }}@endif"
                                        type="text" class="form-control" id="name" name="name">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.email') }}</h2>
                                </div>
                                <div class="body">

                                    <input
                                        value="@if (old('email')){{ old('email') }}@else{{ $user->email }}@endif"
                                        type="text" class="form-control" id="email" name="email">

                                </div>
                            </div>
                        </div>



                    </div>



                    <div class="row clealfix">
                   <div class="col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.password') }}</h2>
                                </div>
                                <div class="body">

                                    <input   type="password" autocomplete="off"
                                        name="password" class="form-control">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.repassword') }}</h2>
                                </div>
                                <div class="body">
                                    <input
                                        type="password" autocomplete="off" name="password_confirmation" class="form-control">
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

                                    <input value="@if (old('phone')){{ old('phone') }}@else{{ $user->phone }}@endif" type="text" autocomplete="off" name="phone" class="form-control">

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
                                            <option @if($user->status == 1) selected @endif value="1" >{{ trans('backend.yes') }}</option>
                                             <option @if($user->status == 0) selected @endif value="0">{{ trans('backend.no') }}</option>


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
