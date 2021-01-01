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

                            <li class="breadcrumb-item active" aria-current="page">{{ trans('backend.services') }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                    <a href="{{   route('service.create')   }}" class="btn btn-sm btn-primary" title="">
                        {{ trans('backend.new') }}</a>
                    @include('includes.messages')
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">

                        <ul class="header-dropdown dropdown">

                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>

                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                                    <tr>
                                        <th>S. NO</th>
                                        <th> {{ trans('backend.image') }}</th>
                                            <th>{{ trans('backend.title') }}</th>
                                            <th>{{ trans('backend.text') }}</th>
                                            <th>{{ trans('backend.price') }}</th>


                                            <th>{{ trans('backend.edit') }}</th>


                                            <th>{{ trans('backend.delete') }}</th>



                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td align="center" > <img style="height: 50px;width: 50px;" class="img-circle" src="{{  URL::to('uploads/services/')}}/{{ $service->image }}"></td>


                             <td>{{ $service->title_ar }}</td>


                            <td>{{ $service->text_ar }}</td>
 <td>{{ $service->price }}</td>

                            <td> <a href="{{   route('service.edit',$service->id) }}"> <i class="icon-pencil"></i>  </a></td>
                            <td>
                              <form id="delete-form-{{ $service->id }}" method="post" action="{{ route('service.destroy',$service->id) }}"  >
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                               <a href=""  onclick="if(confirm('Are You sure you want to delete this')){event.preventDefault();document.getElementById('delete-form-{{ $service->id }}').submit();}else{event.preventDefault();}">
                                <i class="icon-trash"> </i></a>
                               </td>
                          </tr>
                        @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
         <th>S. NO</th>

                    <th> {{ trans('backend.image') }}</th>
                    <th>{{ trans('backend.title') }}</th>
                    <th>{{ trans('backend.text') }}</th>
                    <th>{{ trans('backend.price') }}</th>

                    <th>{{ trans('backend.edit') }}</th>
                    <th>{{ trans('backend.delete') }}</th>
                  </tr>
                  </tfoot>
                </table>



                                </table>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>

                                </div>
                                </div>



@endsection
