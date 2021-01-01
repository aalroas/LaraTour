@extends('admin.layouts.app')


@section('main-content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        @include('admin.layouts.pageHead')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Examples</a></li>
          <li class="active">Blank page</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tags</h3>
            @can ('posts.create', Auth::user())
              <a class="col-lg-offset-5 btn btn-success" href="{{   route('tag.create')   }}">Add new Tag</a>

             @endcan

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="box">
              <div class="box-header">
                @include('includes.messages')
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S. NO</th>
                    <th>Tag Name</th>
                    <th>Slug</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>{{  $tag->slug }}</td>
                            <td> <a href="{{   route('tag.edit',$tag->id) }}" <span class="glyphicon glyphicon-edit"> </span></a></td>
                            <td>
                              <form id="delete-form-{{ $tag->id }}" method="post" action="{{ route('tag.destroy',$tag->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                               <a href=""  onclick="if(confirm('Are You sure you want to delete this')){event.preventDefault();document.getElementById('delete-form-{{ $tag->id }}').submit();}else{event.preventDefault();}" <span class="glyphicon glyphicon-trash">


                                </span></a>
                               </td>
                          </tr>
                        @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S. NO</th>
                    <th>Tag Name</th>
                    <th>Slug</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.box-body -->
          {{-- <div class="box-footer">
            Footer
          </div> --}}
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
