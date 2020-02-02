@extends('backend.layouts.layout')
@section('styles')
     <!-- Datatables -->
    <link href="{{URL::asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('content')
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
                 @include('backend.layouts.alerts')
              <div class="title_left">
                <h3>All Place Details <small>All Places' Details</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                      <a href="{{route('place.create')}}"><button type="button" class="btn btn-primary">Add New Place</button></a>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Place Details Table </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th>SN</th>
                          <th>Title</th>
                          <th>Adress</th>
                          <th>feature Image</th>
                          <th>Actions</th>
                        </tr>
                      </thead>


                      <tbody>
                          @php $i = 1; @endphp
                        @foreach ($places as $place)
                            <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>{{$place->title}}</td>
                                <td>{{$place->district ,$place->city}}</td>
                                <td>
                                    <img src="{{$place->feature_image}}" alt="{{$place->title}}" style="width:100px;height:100px; !important">
                                </td>
                                <td>
                                    <a href="{{route('place.edit',$place->id)}}"><button type="button" class="btn-primary">Edit</button></a>
                                    <br/>
                                    <button class="btn btn-danger btn-xs" data-value="{{ $place->id }}" id="delete_detail" data-toggle="modal" data-target="#delete_modal" title="Remove from this place Details" style="background:darkred;color:white;margin-top:0px;">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
    <div id="delete_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">
                            <i class="fa fa-trash"></i> Are you sure you want to delete this Detail?
                        </h4>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-danger pull-left" value="Yes, Delete this Detail"
                               id="delete_confirm">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
        </div>
    </div>
@endsection
@section('scripts')
 {{-- <script src="../vendors/iCheck/icheck.min.js"></script> --}}
  <!-- Datatables -->
    <script src="{{URL::asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


    <script>
      $(document).ready(function (e) {
            $(document).on('click', '#delete_detail', function (e) {
                var place_id = $(this).attr('data-value');
                $("#delete_confirm").click(function () {

                    $.ajaxSetup({
                        headers: {'X-CSRF-TOKEN': '{{ Session::token() }}'}
                    });

                    $.ajax({
                        url: '{{ url('/dashboard/place') }}' + '/' + place_id,
                        type: 'DELETE',  //
                        data: {
                            "id": place_id,
                            "_method": 'DELETE',
                        },

                        success: function (result) {
                            window.location = '{{route('place.index')}}';
                        },
                        error: function (result) {
                            window.location = '{{route('place.index')}}';
                        }
                    });
                });
            });
        });
    </script>

@endsection
