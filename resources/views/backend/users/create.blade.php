
@extends('backend.layouts.layout')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

    {{-- for bootstrap tags input --}}
    <link href="{{URL::asset('backend\css\bootstrap.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>New User Details </h3>
              </div>
               <div class="title_right">
                <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                      <a href="{{route('users.index')}}"><button type="button" class="btn btn-primary">View Users</button></a>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add User Details<small>fill user's details to create new one</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />

                    <form id="demo-form2" class="form-horizontal form-label-left" data-parsley-validate  method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
                        <div class="col-md-8">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('name') is-invalid @enderror" for="full-name">name <span class="required">*</span>
                                    </label>
                                    <input type="text" id="name" required="required"  name="name" class="form-control col-md-7 col-xs-12" placeholder="Name">
                                </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('email') is-invalid @enderror" for="full-name">Email <span class="required">*</span>
                                    </label>
                                    <input type="email" id="email" required="required"  name="email" class="form-control col-md-7 col-xs-12" placeholder="district">
                                </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('password') is-invalid @enderror" for="full-name">City <span class="required">*</span>
                                    </label>
                                    <input type="password" id="password" required="required"  name="password" class="form-control col-md-7 col-xs-12" placeholder="city">
                                </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('confirm_password') is-invalid @enderror" for="confirm_passworrd">Confirm Password <span class="required">*</span>
                                    </label>
                                    <input type="password" id="confirm_password" required="required"  name="confirm_password" class="form-control col-md-7 col-xs-12" placeholder="Confirm Your Password">
                                </div>
                                    @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('role') is-invalid @enderror" for="role">Role<span class="required">*</span>
                                    </label>
                                    {{-- <input type="text" id="blash" required="required"  name="feature_image" class="form-control col-md-7 col-xs-12" placeholder="feature Image link" onchange="readURL(this);"> --}}
                                    <select name="role" class="form-control col-md-7 col-xs-12">
                                        <option value="guide">Guide</option>
                                        <option value="tourist">Tourist</option>
                                    </select>
                                </div>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                             <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('dob') is-invalid @enderror" for="full-name">Date Of Birth <span class="required">*</span>
                                    </label>
                                    <input type="date" id="dob" required="required"  name="dob" class="form-control col-md-7 col-xs-12" placeholder="Date of Birth">
                                </div>
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            {{-- </div> --}}

                                <div class="col-md-12">
                                    <div id="preview" > </div>
                            </div>
                        </div>

                        {{-- for image preview --}}
                        <div class="col-md-4 col-sm-12">
                            <div style="text-align: center;">
                                <h4 class="titleFontFormat"> Preview Image</h4>
                                <hr>
                                    <img id="blah" src="http://placehold.it/200x80?text=Featured Image" alt="your image" class="img-responsive" style="padding: 5px;width:100%;"/>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('image') is-invalid @enderror" for="full-name">Profile Image <span class="required">*</span>
                                    </label>
                                    <input type="text" id="image" required="required"  name="image" class="form-control col-md-7 col-xs-12" placeholder="Profile Image">
                                </div>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                             <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('location') is-invalid @enderror" for="full-name">Location <span class="required">*</span>
                                    </label>
                                    <input type="text" id="location" required="required"  name="location" class="form-control col-md-7 col-xs-12" placeholder="Your Location">
                                </div>
                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0" for="description">Languages<span class="required">*</span></label>
                                </div>
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <select class="form-control col-md-7 js-example-basic-multiple" name="languages[]" multiple>
                                        <option value="nepali">Nepali</option>
                                        <option value="english">English</option>
                                        <option value="japanese">Japanese</option>
                                        <option value="korean">Korean</option>
                                        <option value="spanish">Spanish</option>
                                        <option value="portuglist">Portuglist</option>
                                    </select>
                                </div>


                                @error('rel_events')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0" for="description">Your Bio<span class="required">*</span></label>
                                </div>
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <textarea type="text" id="bio" name="bio" class="form-control WigTextarea col-md-7 col-xs-12 @error('description') is-invalid @enderror" placeholder="Description of category" style="height:200px;"></textarea>
                                </div>

                                @error('bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>

                </div>
                </div>
              </div>
            </div>
          </div>
        {{-- </div> --}}
        <!-- /page content -->
@endsection

@section('scripts')
{{-- for bootstarp tags input --}}

<script src="{{URL::asset('backend/js/custom bootstrap-tagsinput.min.js')}}"></script>
{{-- for select2 tags --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
   {{--  toogle Status --}}
    <script>
    $('.status').click(function() {
        $(this).find('.btn').toggleClass('active');
        if ($(this).find('.btn-primary').length >   0) {
            $(this).find('.btn').toggleClass('btn-primary');
        }
        $(this).find('.btn').toggleClass('btn-default');
    });
    </script>
     {{--image preview--}}
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                console.log('here is file')
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    {{--tinymac --}}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.WigTextarea",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern",
                "powerpaste"
            ],
            powerpaste_word_import: "clean",
            powerpaste_html_import: "merge",
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init({
            path_absolute : "{{URL::to('gallery/media')}}", //it works
            selector: "textarea.WigTextarea",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }

        });
    </script>
@include('backend.layouts.select2')
@endsection
