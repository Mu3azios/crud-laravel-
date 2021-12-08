@extends('elements.layout')
@section('content')
 
<div class="card">
  <div class="card-header" style="background-color:rgb(255, 254, 206)"><h1>EDIT<h1/></div>
  <div class="card-body" style="background-color:rgb(198, 238, 250)">
      
      <form action="{{ url('element/' .$elements->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$elements->name}}" class="form-control"></br>
        <label>Details</label></br>
        <input type="text" name="details" id="details" value="{{$elements->details}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="date" name="date" id="date" value="{{$elements->date}}" class="form-control"></br>
        <label>Number</label></br>
        <input type="number" name="number" id="number" value="{{$elements->number}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop