@extends('layout')
@section('content')
<div class="volu">
      
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img " width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <div class="lun">
        <h1 class="fw-normal">Volunteer Jobs</h1>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        
        </div>
       
      </div><!-- /.col-lg-4 -->
    <div class="options">
        <select class="form-select " aria-label="Default select example">
        <span><option selected>Select A Volunteer Job</option></span>
        <option value="1" class="w-50">One</option>
        <option value="2" class="w-50">Two</option>
        <option value="3" class="w-50">Three</option>
        </select>
    </div>
    <a href="/volunteerform"><button type="button" class="btn btn-primary rounded-pill"> Apply</button></a>
    

</div>

@endsection