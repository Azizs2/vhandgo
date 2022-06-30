@extends('layouts.admin')
@section('header, Support')

@section('css')
{{-- css --}}
@endsection

@section('content')
 <!-- ***** Contact Us Start ***** -->
<section class="section colored" id="contact-us">
    <div class="container">

        <div class="row">
            <!-- ***** Contact Form Start ***** -->
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="contact-form">
                    <form id="contact" action="{{url('supports/'.$support->id)}}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" placeholder="Full Name" required="" value="{{$support->name}}">
                                </fieldset>
                                <fieldset>
                                    <input name="achievement" type="number" class="form-control" placeholder="Achievement" required="" value="{{$support->achievement}}">
                                </fieldset>
                                <fieldset>
                                    <input name="description" type="text" class="form-control" placeholder="Description" required="" value="{{$support->description}}">
                                </fieldset>
                                <fieldset>
                                    <input name="date_start" type="date" class="form-control" placeholder="Date Start" required="" value="{{$support->date_start}}">
                                </fieldset>
                                <fieldset>
                                    <input name="date_end" type="date" class="form-control" placeholder="Date End" required="" value="{{$support->date_end}}">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ***** Contact Form End ***** -->
        </div>
    </div>
</section>
<!-- ***** Contact Us End ***** -->
@endsection

@section('js')
{{-- js --}}
@endsection
