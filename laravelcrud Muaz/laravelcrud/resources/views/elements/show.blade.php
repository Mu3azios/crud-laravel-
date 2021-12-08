@extends('elements.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"><h5>SHOW RECORD PAGE</h5></div>
  <div class="card-body">
   
 
        <div class="card-body" style="background-color:rgb(255, 254, 206)">
        <h5 class="card-title">Name : {{ $elements->name }}</h5>
        <h5 class="card-text">details : {{ $elements->details }}</h5>
        <h5 class="card-text">date : {{ $elements->date }}</h5>
        <h5 class="card-text">number : {{ $elements->number }}</h5>
        <button  onclick="history.back()" class="btn btn-success">Back</button>
  </div>
       
    </hr>
  
  </div>
</div>