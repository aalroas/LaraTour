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

              <form role="form" action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}


                  <div class="row clealfix">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.image') }}</h2>
                                </div>
                                <div class="body">
                                    <input type="file" class="dropify"
                                        data-default-file=""
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="image" required>
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

                                    <input type="text" class="form-control" id="name_ar" name="name_ar">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.name') }} EN</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="name_en" name="name_en">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.name') }} TR</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="name_tr" name="name_tr">

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

                                <input type="text" class="form-control" id="position_ar" name="position_ar">

                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.position') }} EN</h2>
                            </div>
                            <div class="body">

                                <input type="text" class="form-control" id="position_en" name="position_en">

                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.position') }} TR</h2>
                            </div>
                            <div class="body">

                                <input type="text" class="form-control" id="position_tr" name="position_tr">

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


                                <textarea  type="text" class="form-control" name="text_ar"></textarea>

                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.text') }} EN</h2>
                            </div>
                            <div class="body">
<textarea  type="text" class="form-control" name="text_en"></textarea>


                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.text') }} TR</h2>
                            </div>
                            <div class="body">

                                <textarea  type="text" class="form-control" name="text_tr"></textarea>


                            </div>
                        </div>
                    </div>

                </div>


<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.e_mail') }}</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" id="e_mail" name="e_mail">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.instagram') }}</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" id="instagram" name="instagram">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.facebook') }} </h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" id="facebook" name="facebook">

            </div>
        </div>
    </div>





<div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.twitter') }} </h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" id="twitter" name="twitter">

            </div>
        </div>
    </div>

</div>


<div class="col-sm-4">
    <div class="card">
        <div class="header">
            <h2>{{ trans('backend.linkedin') }} </h2>
        </div>
        <div class="body">

            <input type="text" class="form-control" id="linkedin" name="linkedin">

        </div>
    </div>
</div>

</div>


            <div class="box-footer">
              <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
              <a  type="button"  class="btn btn-warning" href="{{   route('team.index')   }}">{{ trans('backend.back') }}</a>
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
