@extends('master.indexfrance')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container">
 <a class="btn btn-primary" href="groups/create">create group</a>
 
 <table class="table table-striped table-dark container">
  
  <thead>
    
    <tr>
      <th scope="col">Group NAME</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
   </tr>
  </thead>
  
  <tbody>
    
    <tr>
      @forelse($group as $grooo)
     
      <td><h5>{{$grooo->name}}</h5></td>
      
      <td><a class="btn btn-success" href="{{url('groups/'.$grooo->id.'/edit')}}">Edit</a></td>  
 	  
    <td>
 	  	{{Form::open(['action'=>['group\groups@destroy',$grooo->id],'method'=>'delete'])}}
 	  	{{form::submit('Delete',['class'=>'btn btn-danger'])}}
 	  	{{form::close()}}
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
</div>


</body>
</html>
@stop
<!-- table table-striped table-dark container -->