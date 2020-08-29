@extends('master.indexfrance')

@section('content')
<div class="container">

<table class="table table-bordered">
  <thead>
    <tr>
      
      <th scope="col">country</th>
      <th scope="col">country Flags</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      @forelse($country as $cup)
     
      <td><h2>{{$cup->name}}</h2></td>
	    <td><img src="https://www.countryflags.io/{{$cup->country_code}}/shiny/64.png"></td>
      <td><a class="btn btn-success" href="{{url('cup/' . $cup->id .'/edit')}}">Edit</a></td>
	  
 <td>
 {{ Form::open(['action' => ['country\countrycontroller@destroy', $cup->id], 'method'=>'delete']) }} 
   	  		{{Form::submit('DELETE',['class'=>'btn btn-danger'])}}

   	  	   {!! Form::close() !!}

 </td>
 </tr>
	
	@empty
	<div class="alert alert-danger container" role="alert">
 	 there is no data is here 
	</div>
	@endforelse
    
   
</tbody>
</table>
</div>
 
<div class="container"> 
 	{{ $country->links() }}
</div>

@stop


