@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.tour') }}</h1>
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
<form role="form" action="{{ route('tour.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
<div class="row ">
<div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.f_image') }}</h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" data-default-file=""
                                data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="f_image" required>
                        </div>
                    </div>
</div>
<div class="col-sm-8">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.image') }}</h2>
                            </div>
                            <div class="body">
              <div class="file-loading">
                    <input id="file-1" type="file" name="tour_images[]" multiple class="file" data-overwrite-initial="false"
                        data-min-file-count="2">
                </div>
                            </div>
                        </div>

                </div>







                </div>



<script type="text/javascript">
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
            overwriteInitial: false,

            maxFilesNum: 20,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });




</script>


<br>
<br>
                  <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.title') }} AR</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="title_ar" name="title_ar">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.title') }} EN</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="title_en" name="title_en">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.title') }} TR</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="title_tr" name="title_tr">

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


                                <textarea id="ckeditor1" type="text" class="form-control" name="text_ar"></textarea>

                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.text') }} EN</h2>
                            </div>
                            <div class="body">
<textarea id="ckeditor2" type="text" class="form-control" name="text_en"></textarea>


                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.text') }} TR</h2>
                            </div>
                            <div class="body">

                                <textarea id="ckeditor3" type="text" class="form-control" name="text_tr"></textarea>


                            </div>
                        </div>
                    </div>

                </div>


<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.featured') }} </h2>
            </div>
            <div class="body">


                <select name="featured" id="featured">
<option value="1">{{ trans('backend.yes') }}</option>
<option value="0">{{ trans('backend.no') }}</option>

                </select>


            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.price') }} TR</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" id="price" name="price">

            </div>
        </div>
    </div>


</div>








            <div class="box-footer">
              <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
              <a  type="button"  class="btn btn-warning" href="{{   route('tour.index')   }}">{{ trans('backend.back') }}</a>
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
