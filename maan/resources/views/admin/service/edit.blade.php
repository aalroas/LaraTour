@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.services') }}</h1>
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
<div class="col-lg-9 col-md-8 col-sm-12">
    <div class="row clearfix">

        @foreach ($service->service_images as $service_images)
        <div class="col-lg-4 col-md-2">
            <div class="card c_grid c_yellow">
                <div id="{{ $service_images->id }}" class="body text-center">
                    <img width="200" height="100" class="user-photo"
                        src="{{ URL::to('uploads/services',$service_images->service_image_path) }}" alt="">
                    <button class="deleteimage" data-id="{{ $service_images->id }}"
                        data-token="{{ csrf_token() }}">{{ trans('backend.delete') }}</button>
                </div>
            </div>
        </div>
        @endforeach
        <script>
            $(".deleteimage").click(function(){
var id = $(this).data("id");
var token = $(this).data("token");
$.ajax(
{
url: "<?php echo url('cpanel/serviceimages') ?>/"+id,
type: 'DELETE',
dataType: "JSON",
data: {
"id": id,
"_method": 'DELETE',
"_token": token,
},
success: function ()
{

console.log("it Work");
$('#'+id).hide();
}
});

});

        </script>
    </div>
</div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">

            <form role="form" action="{{ route('service.update',$service->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.image') }}</h2>
            </div>
            <div class="body">
                <input type="file" class="form-control dropify" id="image" data-default-file="{{ URL::to('uploads/services', $service->image) }}"
                    data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="image">
            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card main-sectionx">
            <div class="header">
                <h2>{{ trans('backend.image') }}</h2>
            </div>
            <div class="body">

                <div class="file-loading">
                    <input id="file-1" type="file" name="service_images[]" multiple class="file"
                        data-overwrite-initial="false" data-min-file-count="2">
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    $("#file-1").fileinput({
              rtl: true,

            showUpload: false,
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],

            maxFileSize:2000,
            maxFilesNum: 20,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });


</script>


<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.title') }} AR</h2>
            </div>
            <div class="body">

                <input  value="@if (old('title_ar')){{ old('title_ar') }}@else{{ $service->title_ar }}@endif" type="text" class="form-control" id="title_ar" name="title_ar">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.title') }} EN</h2>
            </div>
            <div class="body">

                <input value="@if (old('title_en')){{ old('title_en') }}@else{{ $service->title_en }}@endif" type="text" class="form-control" id="title_en" name="title_en">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.title') }} TR</h2>
            </div>
            <div class="body">

                <input value="@if (old('title_tr')){{ old('title_tr') }}@else{{ $service->title_tr }}@endif" type="text" class="form-control" id="title_tr" name="title_tr">

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


                <textarea id="ckeditor1" type="text" class="form-control" name="text_ar">{{ $service->text_ar }}</textarea>

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} EN</h2>
            </div>
            <div class="body">
                <textarea id="ckeditor2" type="text" class="form-control" name="text_en">{{ $service->text_en }}</textarea>


            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} TR</h2>
            </div>
            <div class="body">

                <textarea id="ckeditor3" type="text" class="form-control" name="text_tr">{{ $service->text_tr }}</textarea>


            </div>
        </div>
    </div>

</div>


<div class="row clealfix">


    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.price') }}</h2>
            </div>
            <div class="body">

                <input value="@if (old('price')){{ old('price') }}@else{{ $service->price }}@endif" type="text" autocomplete="off" name="price" class="form-control">

            </div>
        </div>
    </div>

</div>




<div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
    <a type="button" class="btn btn-warning" href="{{   route('service.index')   }}">{{ trans('backend.back') }}</a>
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
