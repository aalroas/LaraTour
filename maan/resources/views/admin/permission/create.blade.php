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
              <form permission="form" action="{{ route('permission.store') }}" method="post">
                  {{ csrf_field() }}
            <div class="box-body">

              <div class="col-lg-6">

                <div class="form-group">
                  <label for="name">Permission Title</label>
                  <input type="text" class="form-control" id="name"  name="name" placeholder="permission title">
                </div>



                <div class="form-group">
                  <label for="name">Permission For</label>
                  <select type="text" class="form-control" id="for"  name="for">

              <option   selected disabled value="">Select Permission For</option>
              <option     value="user">User</option>
              <option     value="post">Post</option>
                <option     value="other">Other</option>
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
