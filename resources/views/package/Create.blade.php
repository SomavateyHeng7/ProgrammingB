@extends('package.layout')
@section('content')
<div class="card">
  <div class="card-header"><h1>ADD DATA</h1></div>
  <div class="card-body">
      
      <form action="{{ url('packages') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>Date Start</label></br>
        <input type="date" name="datestart" id="datestart" class="form-control"></br>
        <label>Date End</label></br>
        <input type="date" name="dateend" id="dateend" class="form-control"></br>
        <label>Total Dates</label></br>
        <input type="text" name="totaldays" id="totaldays" class="form-control"></br>
        <label>File</label></br>
        <input type="file" name="picture_file" id="picture_file" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop