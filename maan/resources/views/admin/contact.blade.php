@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.contact') }}</h1>
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


                <form role="form" action="{{ route('contact.update') }}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- <div class="row clealfix">

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.contact_image') }}</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/contact', $contact->contact_image) }}"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="contact_image">
                                </div>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.contact_name') }} AR</h2>
                                </div>
                                <div class="body">
                             <input type="text" class="form-control" name="contact_name_ar" value="{{   $contact->contact_name_ar }}"   aria-required="true">
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.contact_name') }} EN</h2>
                                </div>
                                <div class="body">

                                <input type="text" class="form-control" name="contact_name_en"  value="{{   $contact->contact_name_en }}"  aria-required="true">
                                </div>
                            </div>
                        </div>

                       <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.contact_name') }} TR</h2>
                                </div>
                                <div class="body">
                         <input type="text" class="form-control" name="contact_name_tr"  value="{{   $contact->contact_name_tr }}"  aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.contact_text') }} AR</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="contact_text_ar">{{   $contact->contact_text_ar }}
                    </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.contact_text') }} EN</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="contact_text_en">{{   $contact->contact_text_en }}
                    </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.contact_text') }} TR</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="contact_text_tr">{{   $contact->contact_text_tr }}
                    </textarea>
            </div>
        </div>
    </div>
</div> --}}

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.lat') }} AR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="lat" value="{{   $contact->lat }}"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.long') }} EN</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="long" value="{{   $contact->long }}"
                    aria-required="true">
            </div>
        </div>
    </div>


</div>



<div class="col-sm-4">


        <div class="body">
        <button type="submit" class="btn btn-primary btn-round">{{ trans('backend.save') }}</button>
        <a type="button" class="btn btn-warning" href="{{   route('admin.dashboard')   }}">{{ trans('backend.back') }}</a>

    </div>
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
