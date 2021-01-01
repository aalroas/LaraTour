@extends('admin.layouts.app')


@section('main-content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.contact_forms') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">{{ trans('backend.dashboard') }}</a></li>

                            <li class="breadcrumb-item active" aria-current="page">{{ trans('backend.contact_forms') }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">

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
                            <th> {{ trans('backend.Name') }} </th>

                            <th> {{ trans('backend.Subject') }}</th>
                            <th> {{ trans('backend.Email') }}</th>
                            <th> {{ trans('backend.Phone') }}</th>
                            <th> {{ trans('backend.form_type') }}</th>
                            <th>{{ trans('backend.Show') }}</th>
                            <th>{{ trans('backend.Delete') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>


                            <td>{{ $contact->name }}</td>

                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->form_type }}</td>
                            <td> <a href="{{   URL('contact_forms/show',$contact->id) }}"> <span class="fa fa-eye">
                                    </span></a></td>
                            <td>
                                <form id="delete-form-{{ $contact->id }}" method="post"
                                    action="{{ URL('contact_forms',$contact->id) }}" style="display: none">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href=""
                                    onclick="if(confirm('Are You sure you want to delete this')){event.preventDefault();document.getElementById('delete-form-{{ $contact->id }}').submit();}else{event.preventDefault();}"><span
                                        class="icon-trash">
                                    </span></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  <tfoot>
                    <tr>
                        <th>S. NO</th>
                        <th>{{ trans('backend.name') }} </th>
                        <th>{{ trans('backend.subject') }} </th>
                        <th>{{ trans('backend.email') }} </th>
                        <th>{{ trans('backend.phone') }}</th>
                        <th>{{ trans('backend.form_type') }}</th>
                        <th>{{ trans('backend.show') }}</th>
                        <th>{{ trans('backend.delete') }}</th>
                    </tr>
                </tfoot>
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
