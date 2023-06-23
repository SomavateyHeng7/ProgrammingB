@extends('package.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('packages/' .$files->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$files->id}}" id="id" />
        <label>Package Name</label></br>
        <input type="text" name="name" id="name" value="{{$files->name}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="number" name="price" id="price" value="{{$files->price}}" class="form-control"></br>
        <label>Start Date </label></br>
        <input type="date" name="datestart" id="datestart" value="{{$files->datestart}}" class="form-control"></br>
        <label>End Date</label></br>
        <input type="date" name="dateend" id="dateend" value="{{$files->dateend}}" class="form-control"></br>
        <label>Total Days</label></br>
        <input type="number" name="totaldays" id="totaldays" value="{{$files->totaldays}}" class="form-control"></br>
        <label>Picture</label></br>
        <input type="file" name="picture_file" id="picture_file" value="{{$files->picture_file}}" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    </form>
   
  </div>
</div>
 
@stop