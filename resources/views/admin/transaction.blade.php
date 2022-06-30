@extends('layouts.header')
@section('header, Transaction')

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
                            <a href="#" @click="addData()" class="main-button-slider">Add Data Support</a>
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
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">donation</th>
                                            <th class="text-center">support _id</th>
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
                                <input name="name" type="text" class="form-control" :value="data.name" placeholder="Full Name" required="">
                            </fieldset>
                            <fieldset>
                                <input name="phone_number" type="number" class="form-control" :value="data.phone_number" placeholder="Phone Number" required="">
                            </fieldset>
                            <fieldset>
                                <input name="email" type="email" class="form-control" :value="data.email" placeholder="Email" required="">
                            </fieldset>
                            <fieldset>
                                <input name="date_start" type="date" class="form-control" :value="data.date_start" placeholder="DateStart" required="">
                            </fieldset>
                            <fieldset>
                                <input name="donation_amount" type="number" class="form-control" :value="data.donation_amount" placeholder="Donation" required="">
                            </fieldset>
                            <fieldset>
                                <input name="message" type="text" class="form-control" :value="data.message" placeholder="Message" required="">
                            </fieldset>
                            <fieldset>
                                <select name="support_id" class="form-control" style="width: 100%">
                                    @foreach ($supports as $support )
                                        <option value="{{$support->id}}">{{$support->name}}</option>
                                    @endforeach
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
                            {{-- <fieldset>
                                <input name="name" type="text" class="form-control" :value="data.name" placeholder="Full Name" required="">
                            </fieldset>
                            <fieldset>
                                <input name="phone_number" type="number" class="form-control" :value="data.phone_number" placeholder="Phone Number" required="">
                            </fieldset>
                            <fieldset>
                                <input name="email" type="email" class="form-control" :value="data.email" placeholder="Email" required="">
                            </fieldset>
                            <fieldset>
                                <input name="date_start" type="date" class="form-control" :value="data.date_start" placeholder="DateStart" required="">
                            </fieldset>
                            <fieldset>
                                <input name="donation_amount" type="number" class="form-control" :value="data.donation_amount" placeholder="Donation" required="">
                            </fieldset>
                            <fieldset>
                                <input name="message" type="text" class="form-control" :value="data.message" placeholder="Message" required="">
                            </fieldset>
                            <fieldset>
                                <select name="support_id" class="form-control" style="width: 100%">
                                    @foreach ($supports as $support )
                                        <option value="{{$support->id}}">{{$support->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <fieldset> --}}
                                <select name="status" class="form-control" required="">
                                    <option :selected="data.status" :value="1">Success</option>
                                    <option :selected="data.status" :value="0">Pending</option>
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
    var actionUrl = '{{ url('transactions') }}';
    var apiUrl = '{{ url('api/transactions') }}';
    var columns = [
        {data: 'DT_RowIndex', class: 'text-center', orderable: false},
        {data: 'name', class: 'text-center', orderable: false},
        {data: 'status', class: 'text-center', orderable: false},
        {data: 'rupiah', class: 'text-center', orderable: false},
        {data: 'namesupot', class: 'text-center', orderable: false},
        {render: function (index, row, data, meta){
            return `
            <a href="#" onclick="controller.editData2(event, ${meta.row})" class="btn btn-warning btn-sm">Edit</a>
            <a class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">Delete</a>`;
        }, orderable:false, width:'200px', class: 'text-center'},
    ];
</script>

<script src="{{asset('js/data.js')}}"></script>
@endsection
