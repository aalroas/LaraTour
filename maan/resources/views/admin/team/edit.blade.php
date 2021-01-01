@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.teams') }}</h1>
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

            <form role="form" action="{{ route('team.update',$team->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.image') }}</h2>
            </div>
            <div class="body">
                <input type="file" class="form-control dropify" id="image" data-default-file="{{ URL::to('uploads/teams', $team->image) }}"
                    data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="image">
            </div>
        </div>
    </div>
</div>



<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.name') }} AR</h2>
            </div>
            <div class="body">

                <input  value="@if (old('name_ar')){{ old('name_ar') }}@else{{ $team->name_ar }}@endif" type="text" class="form-control" id="name_ar" name="name_ar">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.name') }} EN</h2>
            </div>
            <div class="body">

                <input value="@if (old('name_en')){{ old('name_en') }}@else{{ $team->name_en }}@endif" type="text" class="form-control" id="name_en" name="name_en">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.name') }} TR</h2>
            </div>
            <div class="body">

                <input value="@if (old('name_tr')){{ old('name_tr') }}@else{{ $team->name_tr }}@endif" type="text" class="form-control" id="name_tr" name="name_tr">

            </div>
        </div>
    </div>

</div>




<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.position') }} AR</h2>
            </div>
            <div class="body">

                <input value="@if (old('name_ar')){{ old('position_ar') }}@else{{ $team->position_ar }}@endif" type="text"
                    class="form-control" id="position_ar" name="position_ar">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.position') }} EN</h2>
            </div>
            <div class="body">

                <input value="@if (old('position_en')){{ old('position_en') }}@else{{ $team->position_en }}@endif" type="text"
                    class="form-control" id="position_en" name="position_en">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.position') }} TR</h2>
            </div>
            <div class="body">

                <input value="@if (old('position_tr')){{ old('position_tr') }}@else{{ $team->position_tr }}@endif" type="text"
                    class="form-control" id="position_tr" name="position_tr">

            </div>
        </div>
    </div>

</div>




<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} AR</h2>
            </div>
            <div class="body">


                <textarea  type="text" class="form-control" name="text_ar">{{ $team->text_ar }}</textarea>

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} EN</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="text_en">{{ $team->text_en }}</textarea>


            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} TR</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="text_tr">{{ $team->text_tr }}</textarea>


            </div>
        </div>
    </div>

</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.e_mail') }} </h2>
            </div>
            <div class="body">

                <input value="@if (old('e_mail')){{ old('e_mail') }}@else{{ $team->e_mail }}@endif"
                    type="text" class="form-control" id="e_mail" name="e_mail">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.instagram') }} </h2>
            </div>
            <div class="body">

                <input value="@if (old('instagram')){{ old('instagram') }}@else{{ $team->instagram }}@endif"
                    type="text" class="form-control" id="instagram" name="instagram">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.facebook') }} </h2>
            </div>
            <div class="body">

                <input value="@if (old('facebook')){{ old('facebook') }}@else{{ $team->facebook }}@endif"
                    type="text" class="form-control" id="facebook" name="facebook">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.twitter') }} </h2>
            </div>
            <div class="body">

                <input value="@if (old('twitter')){{ old('twitter') }}@else{{ $team->twitter }}@endif" type="text"
                    class="form-control" id="twitter" name="twitter">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.linkedin') }} </h2>
            </div>
            <div class="body">

                <input value="@if (old('linkedin')){{ old('linkedin') }}@else{{ $team->linkedin }}@endif" type="text"
                    class="form-control" id="linkedin" name="linkedin">

            </div>
        </div>
    </div>



</div>





<div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
    <a type="button" class="btn btn-warning" href="{{   route('team.index')   }}">{{ trans('backend.back') }}</a>
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
