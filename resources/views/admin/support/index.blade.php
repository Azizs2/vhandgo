@extends('layouts.admin')
@section('header, Support')

@section('css')
{{-- css --}}
@endsection

@section('content')
<div class="welcome-area" id="welcome">
    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <h1>
                        <a href="{{url('supports/create')}}" class="main-button-slider">Add Support</a>
                        {{-- <a href="{{url('transactions')}}" class="main-button-slider">Supporting Data</a> --}}
                        <a href="{{url('feedbacks')}}" class="main-button-slider">Results</a>
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
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Achievement</th>
                                        {{-- <th class="text-center">Description</th> --}}
                                        <th class="text-center">Date Start</th>
                                        <th class="text-center">Date End</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($supports as $key =>$support )
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td class="text-center">{{$support->name}}</td>
                                            <td class="text-center">{{$support->achievement}}</td>
                                            {{-- <td>{{$support->description}}</td> --}}
                                            <td class="text-center">{{$support->date_start}}</td>
                                            <td class="text-center">{{$support->date_end}}</td>
                                            <td class="text-center">
                                                <a href="{{url('supports/'.$support->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ url('supports',['id' =>$support->id]) }}" method="post">
                                                    <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick=" return confirm('Are you sure ?')">
                                                    @method('delete')
                                                    @csrf
                                                </form>
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
</section>

@endsection

@section('js')
{{-- js --}}
@endsection
