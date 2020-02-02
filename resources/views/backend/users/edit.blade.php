
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
                <h3>New Place Details </h3>
              </div>
               <div class="title_right">
                <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                      <a href="{{route('place.index')}}"><button type="button" class="btn btn-primary">View Places</button></a>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Place Details<small>fill place's details to create new one</small></h2>
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

                    <form id="demo-form2" class="form-horizontal form-label-left" data-parsley-validate  method="POST" action="{{route('place.store')}}" enctype="multipart/form-data">
                        <div class="col-md-8">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('title') is-invalid @enderror" for="full-name">Title <span class="required">*</span>
                                    </label>
                                    <input type="text" id="title" required="required"  name="title" class="form-control col-md-7 col-xs-12" placeholder="Title Of Place">
                                </div>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('destrict') is-invalid @enderror" for="full-name">Destrict <span class="required">*</span>
                                    </label>
                                    <input type="text" id="destrict" required="required"  name="destrict" class="form-control col-md-7 col-xs-12" placeholder="Destrict">
                                </div>
                                    @error('destrict')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('city') is-invalid @enderror" for="full-name">City <span class="required">*</span>
                                    </label>
                                    <input type="text" id="city" required="required"  name="city" class="form-control col-md-7 col-xs-12" placeholder="city">
                                </div>
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('place_name') is-invalid @enderror" for="full-name">Place Name <span class="required">*</span>
                                    </label>
                                    <input type="text" id="place_name" required="required"  name="place_name" class="form-control col-md-7 col-xs-12" placeholder="place_name">
                                </div>
                                    @error('place_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0 @error('Feature Image') is-invalid @enderror" for="feature_image">Feature Image<span class="required">*</span>
                                    </label>
                                    <input type="text" id="blash" required="required"  name="feature_image" class="form-control col-md-7 col-xs-12" placeholder="feature Image link" onchange="readURL(this);">
                                </div>
                                    @error('feature_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                                <div class="col-md-12">
                                    <div id="preview" > </div>
                            </div>
                        </div>

                        {{-- for image preview --}}
                        <div class="col-md-4 col-sm-12">
                            <div style="text-align: center;">
                                <h4 class="titleFontFormat"> Preview Image</h4>
                                    <img id="blah" src="http://placehold.it/200x80?text=Featured Image" alt="your image" class="img-responsive" style="padding: 5px;width:100%;"/>
                            </div>

                        </div>
                         <div class="form-group">
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <label class="control-label col-md-0 col-sm-0 col-xs-0" for="description">Description<span class="required">*</span></label>
                                </div>
                                <div class="col-md-12 col-sm-10 col-xs-12">
                                    <textarea type="text" id="description" name="description" class="form-control WigTextarea col-md-7 col-xs-12 @error('description') is-invalid @enderror" placeholder="Description of category" style="height:200px;"></textarea>
                                </div>

                                @error('description')
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

@endsection
