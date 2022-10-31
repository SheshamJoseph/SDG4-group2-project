@extends('layout')
@section('content')

<div class="container">
        <p></p>
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
                <label for="address" class="form-label">Address</label>
                <input type="address" class="form-control" id="address">
            </div>
            <div class="mb-3">
                <label for="phonenumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phonenumber">
            </div>
            <div class="mb-3">
                <label for="enquiry" class="form-label">What Materials do you wish to donate?</label>
                <textarea class="form-control" id="enquiry" rows="3"></textarea>
              </div>
            {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
            </div>
            <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
        </form>
    </div>

@endsection