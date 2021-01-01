@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.sliders') }}</h1>
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

                <form role="form" action="{{ route('category.update',$category->id) }}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}




                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.name') }} AR</h2>
                                </div>
                                <div class="body">

                                    <input
                                        value="@if (old('name_ar')){{ old('name_ar') }}@else{{ $category->name_ar }}@endif"
                                        type="text" class="form-control" id="name_ar" name="name_ar">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.name') }} EN</h2>
                                </div>
                                <div class="body">

                                    <input
                                        value="@if (old('name_en')){{ old('name_en') }}@else{{ $category->name_en }}@endif"
                                        type="text" class="form-control" id="name_en" name="name_en">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.name') }} TR</h2>
                                </div>
                                <div class="body">

                                    <input
                                        value="@if (old('name_tr')){{ old('name_tr') }}@else{{ $category->name_tr }}@endif"
                                        type="text" class="form-control" id="name_tr" name="name_tr">

                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="col-sm-6">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.slug') }}</h2>
                            </div>
                            <div class="body">

                                <input value="@if (old('slug')){{ old('slug') }}@else{{ $category->slug }}@endif"
                                    type="text" autocomplete="off" name="slug" class="form-control">

                            </div>
                        </div>
                    </div>

            </div>


            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('category.index')   }}">{{ trans('backend.back') }}</a>
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
