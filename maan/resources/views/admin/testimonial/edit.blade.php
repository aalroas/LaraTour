@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.testimonials') }}</h1>
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

            <form role="form" action="{{ route('testimonial.update',$testimonial->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.image') }}</h2>
            </div>
            <div class="body">
                <input type="file" class="form-control dropify" id="image" data-default-file="{{ URL::to('uploads/testimonials', $testimonial->image) }}"
                    data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="image">
            </div>
        </div>
    </div>
</div>



<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.title') }} AR</h2>
            </div>
            <div class="body">

                <input  value="@if (old('title_ar')){{ old('title_ar') }}@else{{ $testimonial->title_ar }}@endif" type="text" class="form-control" id="title_ar" name="title_ar">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.title') }} EN</h2>
            </div>
            <div class="body">

                <input value="@if (old('title_en')){{ old('title_en') }}@else{{ $testimonial->title_en }}@endif" type="text" class="form-control" id="title_en" name="title_en">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.title') }} TR</h2>
            </div>
            <div class="body">

                <input value="@if (old('title_tr')){{ old('title_tr') }}@else{{ $testimonial->title_tr }}@endif" type="text" class="form-control" id="title_tr" name="title_tr">

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


                <textarea  type="text" class="form-control" name="text_ar">{{ $testimonial->text_ar }}</textarea>

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} EN</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="text_en">{{ $testimonial->text_en }}</textarea>


            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} TR</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="text_tr">{{ $testimonial->text_tr }}</textarea>


            </div>
        </div>
    </div>

</div>

<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.url') }}</h2>
            </div>
            <div class="body">


                <input type="text" name="url" class="form-control" value="{{ $testimonial->url }}">


            </div>
        </div>
    </div>




</div>




<div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
    <a type="button" class="btn btn-warning" href="{{   route('testimonial.index')   }}">{{ trans('backend.back') }}</a>
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
