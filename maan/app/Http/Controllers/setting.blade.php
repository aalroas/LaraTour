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
              <form role="form" action="{{ route('setting.UpdateSiteInfo') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-6" >

                <div calss="form-group" >
                <div class="box-body box-profile" >
                <img style="display: inline-block;"  id="logo_ar" class="profile-user-img img-responsive img-circle" src="{{ URL::to('uploads/settings', $Setting->site_logo_ar) }}">
                <img  style="display: inline-block;"  id="logo_en" class="profile-user-img img-responsive img-circle" src="{{ URL::to('uploads/settings', $Setting->site_logo_en) }}">
                <img  style="display: inline-block;"   id="logo_tr" class="profile-user-img img-responsive img-circle" src="{{ URL::to('uploads/settings', $Setting->site_logo_tr) }}">
                </div>

                    <label style="display: inline-block;"    for="Profile Image">Select Arabic language logo</label>
                  <input   style="display: inline-block;"  onchange="PreviewImageAr();" type="file" name="site_logo_ar" id="site_logo_ar">

                    <label style="display: inline-block;"    for="Profile Image">Select English language logo</label>
                  <input  style="display: inline-block;"  onchange="PreviewImageEn();" type="file" name="site_logo_en" id="site_logo_en">

                    <label style="display: inline-block;"    for="Profile Image">Select Turkish language logo</label>
                  <input  style="display: inline-block;"   onchange="PreviewImageTr();" type="file" name="site_logo_tr" id="site_logo_tr">

                </div>

                {{-- this for PreviewImage befor setting it --}}
                <script type="text/javascript">
      function PreviewImageAr() {
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("site_logo_ar").files[0]);

          oFReader.onload = function (oFREvent) {
              document.getElementById("logo_ar").src = oFREvent.target.result;
          };
      };
  </script>
                  <script type="text/javascript">
      function PreviewImageEn() {
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("site_logo_en").files[0]);

          oFReader.onload = function (oFREvent) {
              document.getElementById("logo_en").src = oFREvent.target.result;
          };
      };
  </script>

                  <script type="text/javascript">
      function PreviewImageTr() {
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("site_logo_tr").files[0]);

          oFReader.onload = function (oFREvent) {
              document.getElementById("logo_tr").src = oFREvent.target.result;
          };
      };
  </script>


                <div calss="form-group" >
                <div class="box-body box-profile" >
                <img style="display: inline-block;"  id="icon_ar" class="profile-user-img img-responsive img-circle" src="{{ URL::to('uploads/settings', $Setting->site_icon_ar) }}">
                <img  style="display: inline-block;"  id="icon_en" class="profile-user-img img-responsive img-circle" src="{{ URL::to('uploads/settings', $Setting->site_icon_en) }}">
                <img  style="display: inline-block;"   id="icon_tr" class="profile-user-img img-responsive img-circle" src="{{ URL::to('uploads/settings', $Setting->site_icon_tr) }}">
                </div>

                    <label style="display: inline-block;"    for="Profile Image">Select Arabic language icon</label>
                  <input   style="display: inline-block;"  onchange="PreviewIiconAr();" type="file" name="site_icon_ar" id="site_icon_ar">

                    <label style="display: inline-block;"    for="Profile Image">Select English language icon</label>
                  <input  style="display: inline-block;"  onchange="PreviewIiconEn();" type="file" name="site_icon_en" id="site_icon_en">

                    <label style="display: inline-block;"    for="Profile Image">Select Turkish language icon</label>
                  <input  style="display: inline-block;"   onchange="PreviewIiconTr();" type="file" name="site_icon_tr" id="site_icon_tr">

                </div>

                {{-- this for PreviewImage befor setting it --}}
                <script type="text/javascript">
      function PreviewIiconAr() {
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("site_icon_ar").files[0]);

          oFReader.onload = function (oFREvent) {
              document.getElementById("icon_ar").src = oFREvent.target.result;
          };
      };
  </script>
                  <script type="text/javascript">
      function PreviewIiconEn() {
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("site_icon_en").files[0]);

          oFReader.onload = function (oFREvent) {
              document.getElementById("icon_en").src = oFREvent.target.result;
          };
      };
  </script>

                  <script type="text/javascript">
      function PreviewIiconTr() {
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("site_icon_tr").files[0]);

          oFReader.onload = function (oFREvent) {
              document.getElementById("icon_tr").src = oFREvent.target.result;
          };
      };
  </script>



      <div class="form-group">
                  <label for="name"> site title en </label>
                  <input type="text" class="form-control" id="site_title_en"  name="site_title_en" placeholder="  site_title_en" value="{{   $Setting->site_title_en }}" >
                </div>
                    <div class="form-group">
                  <label for="name"> site title tr </label>
                  <input type="text" class="form-control" id="site_title_en"  name="site_title_tr" placeholder="  site_title_tr" value="{{   $Setting->site_title_tr }}" >
                </div>
                    <div class="form-group">
                  <label for="name"> site title ar </label>
                  <input type="text" class="form-control" id="site_title_en"  name="site_title_ar" placeholder="  site_title_ar" value="{{   $Setting->site_title_ar }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> site_url </label>
                  <input type="text" class="form-control" id="site_url"  name="site_url" placeholder="site_url" value="{{   $Setting->site_url }}" >
                </div>

                      <div class="form-group">
                  <label for="name"> site_email</label>
                  <input type="text" class="form-control" id="site_email"  name="site_email" placeholder="  site_email" value="{{   $Setting->site_email }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> site_meta_description_en </label>
                  <textarea   id="site_meta_description_en"  name="site_meta_description_en"  rows="2" cols="75" >
                  {{   $Setting->site_meta_description_en }}
                  </textarea>
                </div>
                      <div class="form-group">
                  <label for="name"> site_meta_description_tr </label>

                      <textarea   id="site_meta_description_tr"  name="site_meta_description_tr"  rows="2" cols="75" >
                  {{   $Setting->site_meta_description_tr }}
                  </textarea>
                 </div>

                      <div class="form-group">
                  <label for="name"> site_meta_description_ar</label>

                          <textarea   id="site_meta_description_ar"  name="site_meta_description_ar"  rows="2" cols="75" >
                  {{   $Setting->site_meta_description_ar }}
                  </textarea>

                   </div>
                      <div class="form-group">
                  <label for="name"> site_meta_keywords_en </label>
                  <input type="text" class="form-control" id="site_meta_keywords_en"  name="site_meta_keywords_en" placeholder="  site_meta_keywords_en" value="{{   $Setting->site_meta_keywords_en }}" >
                </div>
                      <div class="form-group">
                  <label for="name"> site_meta_keywords_tr</label>
                  <input type="text" class="form-control" id="site_meta_keywords_tr"  name="site_meta_keywords_tr" placeholder="  site_meta_keywords_tr" value="{{   $Setting->site_meta_keywords_tr }}" >
                </div>


                      <div class="form-group">
                  <label for="name">site_meta_keywords_ar </label>
                  <input type="text" class="form-control" id="site_meta_keywords_ar"  name="site_meta_keywords_ar" placeholder="  site_meta_keywords_ar" value="{{   $Setting->site_meta_keywords_ar }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> copy_right_ar </label>
                  <input type="text" class="form-control" id="copy_right_ar"  name="copy_right_ar" placeholder="  copy_right_ar" value="{{   $Setting->copy_right_ar }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> copy_right_tr</label>
                  <input type="text" class="form-control" id="copy_right_tr"  name="copy_right_tr" placeholder="  copy_right_tr" value="{{   $Setting->copy_right_tr }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> copy_right_en</label>
                  <input type="text" class="form-control" id="copy_right_en"  name="copy_right_en" placeholder="  copy_right_en" value="{{   $Setting->copy_right_en }}" >
                </div>

                      <div class="form-group">
                  <label for="name"> site_address_en </label>
                  <input type="text" class="form-control" id="site_address_en"  name="site_address_en" placeholder="  site_address_en" value="{{   $Setting->site_address_en }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> site_address_tr</label>
                  <input type="text" class="form-control" id="site_address_tr"  name="site_address_tr" placeholder="  site_address_tr" value="{{   $Setting->site_address_tr }}" >
                </div>

                   <div class="form-group">
                  <label for="name"> site_address_ar</label>
                  <input type="text" class="form-control" id="site_address_ar"  name="site_address_ar" placeholder="  site_address_ar" value="{{   $Setting->site_address_ar }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> site_mobile </label>
                  <input type="text" class="form-control" id="site_mobile"  name="site_mobile" placeholder="  site_mobile" value="{{   $Setting->site_mobile }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> site_phone</label>
                  <input type="text" class="form-control" id="site_phone"  name="site_phone" placeholder="  site_phone" value="{{   $Setting->site_phone }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> site_fax</label>
                  <input type="text" class="form-control" id="site_fax"  name="site_fax" placeholder="  site_fax" value="{{   $Setting->site_fax }}" >
                </div>

                      <div class="form-group">
                  <label for="name"> site_whatsapp_url </label>
                  <input type="text" class="form-control" id="site_whatsapp_url"  name="site_whatsapp_url" placeholder="  site_whatsapp_url" value="{{   $Setting->site_whatsapp_url }}" >
                </div>

                      <div class="form-group">
                  <label for="name"> site_instagram_url </label>
                  <input type="text" class="form-control" id="site_instagram_url"  name="site_instagram_url" placeholder="  site_instagram_url" value="{{   $Setting->site_instagram_url }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> site_facebook_url </label>
                  <input type="text" class="form-control" id="site_facebook_url"  name="site_facebook_url" placeholder="  site_facebook_url" value="{{   $Setting->site_facebook_url }}" >
                </div>


                      <div class="form-group">
                  <label for="name"> site_twitter_url </label>
                  <input type="text" class="form-control" id="site_twitter_url"  name="site_twitter_url" placeholder="  site_twitter_url" value="{{   $Setting->site_twitter_url }}" >
                </div>

                      <div class="form-group">
                  <label for="name"> site_linkedin_url </label>
                  <input type="text" class="form-control" id="site_linkedin_url"  name="site_linkedin_url" placeholder="  site_linkedin_url" value="{{   $Setting->site_linkedin_url }}" >
                </div>

                      <div class="form-group">
                  <label for="name"> site_youtube_url </label>
                  <input type="text" class="form-control" id="site_youtube_url"  name="site_youtube_url" placeholder="  site_youtube_url" value="{{   $Setting->site_youtube_url }}" >
                </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a  type="button"  class="btn btn-warning" href="{{   route('admin.dashboard')   }}">Back</a>
            </div>
          </form>
        </div>
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
