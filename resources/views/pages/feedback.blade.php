@extends('layouts.app')
@section('content')
    <div class="well"> Please Provide your Feedback</div>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Name</span>
        <input type="text" class="form-control" placeholder="Please enter your name" aria-describedby="basic-addon1" id="Name">
      </div>
      
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Age</span>
        <input type="text" class="form-control" placeholder="Please enter your age" aria-describedby="basic-addon1" id="Age">
      </div>

      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Mobile</span>
        <input type="text" class="form-control" placeholder="Please enter your UK Mobile number" aria-describedby="basic-addon1" id="mobile">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Provide Feedback</span>
        <input type="text" class="form-control" placeholder="Feedback" aria-describedby="basic-addon1" id="Feedback">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">EMail</span>
        <input type="text" class="form-control" placeholder="Enter Valid Email" aria-describedby="basic-addon1" id="email">
      </div>
    </div>
    <button class="warning" onclick="BookApp()">Book Appointment</button>
@endsection