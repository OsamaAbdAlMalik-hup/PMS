@extends('layouts.master')
@section('CSS')
    <!--Internal  Nice-select css  -->
    <link href="{{asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
    <!-- Internal Select2 css -->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    <div class="breadcrumb-header justify-content-between"></div>
@endsection
@section('content')
    <div class="col-xl-9">
        <div class="card">
            <div class="card-header pb-0">
                <p class="tx-26 tx-gray-500 mb-2">الأقسام</p>
            </div>
            <div class="col-sm-4 col-md-4">
                <a class="btn ripple btn-primary" data-target="#modalCreate" data-toggle="modal" href="">إضافة قسم</a>
            </div>
            <div class="card-body">
                <div class="table-responsive hoverable-table">
                    <table id="example-delete" class="table text-md-nowrap">
                        <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الصورة</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>
                                <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200"
                                     src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>
                                <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200"
                                     src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>
                                <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200"
                                     src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>
                                <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200"
                                     src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>
                                <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200"
                                     src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                            </td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>
                                <img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200"
                                     src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>الاسم</th>
                            <th>الصورة</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalCreate">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">أصافة قسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h6>اسم القسم</h6>
                    <h6>صورة القسم</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="button">Save changes</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{asset('assets/js/table-data.js')}}"></script>
    <script src="{{asset('assets/js/modal.js')}}"></script>

@endsection


