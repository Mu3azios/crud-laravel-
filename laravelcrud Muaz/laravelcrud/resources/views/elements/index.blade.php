@extends('elements.layout')
@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="background-color:rgb(255, 254, 206)" > <h1> INDEX <h1/></div>
                    <div class="card-body" >
                       
                        <a href="{{ url('/element/create') }}" class="btn btn-success btn-sm" title="Add New Element">
                            <i class="fa fa-plus"  ></i> Add New Element
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" style="background-color: rgb(191, 237, 255)">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Details</th>
                                        <th>Date</th>
                                        <th>Number</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($elements as $element)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $element->name}}</td>
                                        <td>{{ $element->details}}</td>
                                        <td>{{ $element->date}}</td>
                                        <td>{{ $element->number}}</td>
                                        <td>
                                            <a href="{{ url('/element/' . $element->id) }}" title="View element"><button class="btn btn-info btn-sm"> Show</button></a>
                                            <a href="{{ url('/element/' . $element->id . '/edit') }}" title="Edit element"><button class="btn btn-primary btn-sm"> Change</button></a>
 
                                            <form method="POST" action="{{ url('/element' . '/' . $element->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete element" onclick="return confirm(&quot;Confirm delete?&quot;)"></i> Delete</button>
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
@endsection