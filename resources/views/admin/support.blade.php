@extends('layouts.header')
@section('header, Support')

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
                            <a href="#" @click="addData()" class="main-button-slider">Add Support</a>
                            {{-- <a href="{{url('transactions')}}" class="main-button-slider">Supporting Data</a> --}}
                            {{-- <a href="{{url('feedbacks')}}" class="main-button-slider">Results</a> --}}
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
                {{-- <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <h1>
                        <strong>Your Account</strong>
                        <br>
                        <strong></strong>
                    </h1>
                </div> --}}
                <div class="col-lg-12">
                    <div class="row justify-content-md-center">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <table id="datatable" class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">TiTLE</th>
                                            <th class="text-center">Trget Donasi</th>
                                            <th class="text-center">Donasi Terkumpul</th>
                                            {{-- <th class="text-center">Description</th> --}}
                                            <th class="text-center">Date Start</th>
                                            <th class="text-center">Date End</th>
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
                                <input name="title" type="text" class="form-control" :value="data.title" placeholder="TITLE" required="">
                            </fieldset>
                            <fieldset>
                                <input name="donation_target" type="number" class="form-control" :value="data.donation_target" placeholder="Target Donasi" required="">
                            </fieldset>
                            <fieldset>
                                <input name="collected_donations" type="number" class="form-control" :value="data.collected_donations" placeholder="Donasi Terkumpul" required="">
                            </fieldset>
                            <fieldset>
                                <input name="description" type="text" class="form-control" :value="data.description" placeholder="Description" required="">
                            </fieldset>
                            <fieldset>
                                <input name="date_start" type="date" class="form-control" :value="data.date_start" placeholder="Date Start" required="">
                            </fieldset>
                            <fieldset>
                                <input name="date_end" type="date" class="form-control" :value="data.date_end" placeholder="Date End" required="">
                            </fieldset>
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

    <div class="modal fade" id="modal-default2">
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
                                <select name="status" class="form-control" style="width: 100%">
                                    <option :value="0">Pending</option>
                                    <option :value="1">Success</option>
                                </select>
                            </fieldset>
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
    var actionUrl = '{{ url('supports') }}';
    var apiUrl = '{{ url('api/supports') }}';
    var columns = [
        {data: 'DT_RowIndex', class: 'text-center', orderable: false},
        {data: 'title', class: 'text-center', orderable: false},
        {data: 'rupiah1', class: 'text-center', orderable: false},
        {data: 'total', class: 'text-center', orderable: false},

        // {data: 'rupiah2', class: 'text-center', orderable: false},
        // {data: 'total', class: 'text-center', orderable: false},
        // {data: 'description', class: 'text-center', orderable: false},
        {data: 'date1', class: 'text-center', orderable: false},
        {data: 'date2', class: 'text-center', orderable: false},

        {render: function (index, row, data, meta){
            return `
            <a href="#" class="btn btn-warning btn-sm" onclick="controller.editData(event, ${meta.row})">Edit</a>
            <a class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">Delete</a>`;
        }, orderable:false, width:'200px', class: 'text-center'},
    ];
</script>

<script src="{{asset('js/data.js')}}"></script>
{{-- <script type="text/javascript">
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script> --}}

{{-- <script type="text/javascript">
    var controller = new Vue({
        el  : '#controller',
        // data untuk membuat macam-macam variables
        data: {
            data :{},
            actionUrl   : '{{url('supports')}}',
            editStatus  : false,

        },
        // mounted function yang dijalankan ketika membuka sebuah halaman
        mounted:function(){

        },
        // methods adalah untuk menyimpan beberapa function
        methods:{
            addData(){
                this.data = {};
                this.actionUrl = '{{url('supports')}}';
                this.editStatus = false;
                $('#modal-default').modal();
            },
            editData(data){
                this.data = data;
                this.actionUrl = '{{url('supports')}}'+'/'+data.id;
                this.editStatus = true;
                $('#modal-default').modal();
            },
            deleteData(id){
                this.actionUrl = '{{url('supports')}}'+'/'+id;
                if (confirm("Are you sure ?")) {
                    axios.post(this.actionUrl, {_method: 'DELETE'}).then(respose => {
                        location.reload();
                    });
                }
            }
        }
    });
</script> --}}
@endsection
