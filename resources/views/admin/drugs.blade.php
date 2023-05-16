@extends('layouts.master')
@section('CSS')
    <!--Internal  Nice-select css  -->
    <link href="{{asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
    <!-- Internal Select2 css -->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--- Internal Select2 css-->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <!---Internal Fancy uploader css-->
    <link href="{{asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
    <div class="breadcrumb-header justify-content-between"></div>
@endsection
@section('content')
    {{--  data table  --}}
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <p class="tx-26 tx-gray-500 mb-2">الأدوية</p>
            </div>
            <div class="col-sm-7 col-md-6 col-lg-4">
                <div class="custom-file">
                    <input class="custom-file-input" id="customFile" type="file"> <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <a class="btn ripple btn-primary" data-target="#modalCreate" data-toggle="modal" href="">إضافة دواء</a>
            </div>
            <div class="card-body">
                <div class="table-responsive hoverable-table">
                    <table id="example-delete" class="table text-md-nowrap">
                        <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الصورة</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr data-item-id="1" data-item-name="Product A">
                            <td>Tiger Nixon</td>
                            <td>
                                <img alt="Responsive image" class="img-thumbnail wd-sm-75"
                                     src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                            </td>
                            <td>
                                <div class="btn-icon-list">
                                    <button class="btn btn-danger btn-icon" data-category_name="Osama" data-category_id="{{ 1 }}"
                                            data-toggle="modal" data-target="#modalDelete"><i class="mdi mdi-delete"></i></button>
                                    <button class="btn btn-info btn-icon" data-category_name="Osama" data-category_id="{{ 1 }}"
                                            data-toggle="modal" data-target="#modalUpdate"><i class="zmdi zmdi-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr data-item-id="1" data-item-name="Product A">
                            <td>Tiger Nixon</td>
                            <td>
                                <img alt="Responsive image" class="img-thumbnail wd-sm-75"
                                     src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                            </td>
                            <td>
                                <div class="btn-icon-list">
                                    <button class="btn btn-danger btn-icon" data-category_name="Osama" data-category_id="{{ 1 }}"
                                            data-toggle="modal" data-target="#modalDelete"><i class="mdi mdi-delete"></i></button>
                                    <button class="btn btn-info btn-icon" data-category_name="Osama" data-category_id="{{ 1 }}"
                                            data-toggle="modal" data-target="#modalUpdate"><i class="zmdi zmdi-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{--  modal create  --}}
    <div class="modal" id="modalCreate">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">أصافة قسم</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('index') }}" method="get">
                        <div class="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم القسم</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="أدخل الاسم">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="exampleInputEmail1">صورة القسم</label>
                            </div>
                            <div class="col-sm-16">
                                <input type="file" class="dropify" data-height="200"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn ripple btn-primary">إضافة</button>
                    <button type="button" class="btn ripple btn-secondary" data-dismiss="modal">الغاء</button>
                </div>
            </div>
        </div>
    </div>

    {{--  modal update  --}}
    <div class="modal" id="modalUpdate">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">تعديل قسم</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('index') }}" method="get">
                        <div class="">
                            <div class="form-group">
                                <label for="category_name">اسم القسم</label>
                                <input type="text" class="form-control" id="category_name"
                                       placeholder="أدخل الاسم">
                                <input type="hidden" class="form-control" id="category_id">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="exampleInputEmail1">صورة القسم</label>
                            </div>
                            <div class="col-sm-16">
                                <input type="file" class="dropify" data-height="200"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn ripple btn-primary">إضافة</button>
                    <button type="button" class="btn ripple btn-secondary" data-dismiss="modal">الغاء</button>
                </div>
            </div>
        </div>
    </div>

    {{--  modal delete  --}}
    <div class="modal" id="modalDelete">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف قسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p class="font-weight-bold">هل أنت متأكد من عملية حذف هذا القسم</p>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-danger" type="button">تاكيد</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">إلغاء</button>
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

    <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

    <script>
        $('#modalUpdate').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var category_id = button.data('category_id')
            var category_name = button.data('category_name')
            var modal = $(this)
            modal.find('.modal-body #category_name').val(category_name)
            modal.find('.modal-body #category_id').val(category_id)
        })
    </script>

@endsection


