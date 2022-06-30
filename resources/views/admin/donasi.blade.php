@extends('layouts.header')
@section('header, Admin')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
<div id="controller">
    <div class="welcome-area" id="welcome">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>
                            <a href="#" @click="addData()" class="main-button-slider">Add Donasi</a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>

    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-md-center">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <table id="datatable" class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Admin</th>
                                            <th class="text-center">TITL</th>
                                            <th class="text-center">Donasi</th>
                                            <th class="text-center">Date_start</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" :action="actionUrl" autocomplete="off" @submit="submitForm($event, data.id)">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                        <div>
                            <fieldset>
                                <select name="admin_id" class="form-control" style="width: 100%">
                                    @foreach ($admins as $admin )
                                        <option value="{{$admin->id}}">{{$admin->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <fieldset>
                                <select name="support_id" class="form-control" style="width: 100%">
                                    @foreach ($supports as $support )
                                        <option value="{{$support->id}}">{{$support->title}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <fieldset>
                                <input name="donation_amount" type="number" class="form-control" :value="data.donation_amount" placeholder="Jumlah donasi" required="">
                            </fieldset>
                            <fieldset>
                                <input name="description" type="text" class="form-control" :value="data.description" placeholder="Description" required="">
                            </fieldset>
                            <fieldset>
                                <input name="date_start" type="date" style="width: 100%" type= class="form-control" :value="data.date_start" placeholder="Date Start" required="">
                            </fieldset>
                            {{-- <fieldset>
                                <select name="status" class="form-control" required="">
                                    <option :selected="data.status" :value="1">Success</option>
                                    <option :selected="data.status" :value="0">Pending</option>
                                </select>
                            </fieldset> --}}
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <fieldset>
                            <button type="submit" class="main-button">Save</button>
                        </fieldset>
                    </div>
                </form>

            </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script type="text/javascript">
    var actionUrl = '{{ url('donations') }}';
    var apiUrl = '{{ url('api/donations') }}';
    var columns = [
        {data: 'DT_RowIndex', class: 'text-center', orderable: false},
        {data: 'name_admin', class: 'text-center', orderable: false},
        {data: 'judul', class: 'text-center', orderable: false},
        {data: 'rupiah', class: 'text-center', orderable: false},
        {data: 'date1', class: 'text-center', orderable: false},
        {data: 'status', class: 'text-center', orderable: false},
        {render: function (index, row, data, meta){
            return `
            <a href="#" class="btn btn-warning btn-sm" onclick="controller.editData(event, ${meta.row})">Edit</a>
            <a class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">Delete</a>`;
        }, orderable:false, width:'200px', class: 'text-center'},
    ];
</script>
<script src="{{asset('js/data.js')}}"></script>
@endsection

