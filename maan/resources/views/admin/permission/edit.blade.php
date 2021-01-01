@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <h1>
      Text Editors
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">


        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
</div>
  @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
              <form  action="{{ route('permission.update',$permission->id) }}" method="post">
                  {{ csrf_field() }}
              {{ method_field('PATCH') }}
            <div class="box-body">

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="name">permission Title</label>
                  <input type="text" class="form-control" id="name"  name="name" placeholder="permission title" value="{{ $permission->name }}">
                </div>
               <div class="form-group">
                 <label for="name">Permission For</label>
                 <select type="text" class="form-control" id="for"  name="for">
                    @if ($permission->for == 'user')
                        <option   selected  value="user">User</option>
                      @elseif ($permission->for == 'post')
                      <option  selected   value="post">Post</option>
                      @else
                        <option  selected   value="other">Other</option>
                    @endif
           </select>
               </div>

             </div>

            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a  type="button"  class="btn btn-warning" href="{{   route('permission.index')   }}">Back</a>

            </div>
          </form>
        </div>

        <!-- /.box -->


      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
@endsection
