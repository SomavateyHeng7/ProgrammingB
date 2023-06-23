@extends('package.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contact us Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $files->name }}</h5>
        <p class="card-text">Price : {{ $files->price }}</p>
        <p class="card-text">Date Start : {{ $files->datestart }}</p>
        <p class="card-text">Date End : {{ $files->dateend }}</p>
        <p class="card-text">Total Days: {{ $files->totaldays }}</p>
        <p class="card-text">Total Days: {{ $files->picture_file}}</p>
        
       
  </div>
       
  
  </div>
</div>