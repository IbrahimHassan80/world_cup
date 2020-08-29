@extends('master.indexfrance')
@section('content')

<h1>matches list</h1>
<a class="btn btn-primary" href="{{url('matches/create')}}">Matches create</a>

  <table class="table">
   <thead>
    <tr>
      <th scope="col">Teame1</th>
      <th scope="col">Teame2</th>
      <th scope="col">Group</th>
      <th scope="col">Points</th>
      <th scope="col">Goals</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      @foreach($matches as $matchs)
      <td scope="row">{{ $matchs->teame1name->name }} <img src="https://www.countryflags.io/{{$matchs->teame1name->country_code}}/flat/32.png"></td>
      
      <td>{{ $matchs->teame2name->name }} <img src="https://www.countryflags.io/{{$matchs->teame2name->country_code}}/flat/32.png"></td>
      
      <td>{{ isset($matchs->group->name) ? $matchs->group->name: 'Deleted Group'}}</td>
      
      <td>{{$matchs->points}}</td>
      
      <td>{{$matchs->goals}}</td>
      
      <td><a class="btn btn-warning" href="{{url('matches/'.$matchs->id.'/edit')}}">Edit</a></td>
      
      <td>{{Form::open(['action'=>['match\matches@destroy',$matchs->id],'method'=>'delete'])}}
      	  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
      	  {{Form::close()}}
      	  
      </td>
    </tr>
	@endforeach
    
   
  </tbody>
</table>


@stop