@extends('layouts.app')
@section('content')

<h1>{{$group->name}}</h1>

	<table class="table">
		
		<tr>
			<th>teame 1</th>
			<th>teame 1 Goals</th>
			<th>teame 2</th>
			<th>teame 2 Goals</th>
			<th>Points</th>
		</tr>
		
		@forelse($match as $matches)
		<tr>
			<td><img src="https://www.countryflags.io/{{$matches->teame1name->country_code}}/shiny/32.png">{{$matches->teame1name->name}}</td>
			
			<td>{{$matches->teame1g}}</td>
			
			<td><img src="https://www.countryflags.io/{{$matches->teame2name->country_code}}/shiny/32.png">{{$matches->teame2name->name}}</td>
			
			<td>{{$matches->teame2g}}</td>
			
			<td>{{$matches->points}}</td>
		</tr>
		
		@empty
		<div class="alert alert-danger container" role="alert">
 	 	there is no matches Yet
		
		@endforelse
	</table>

@stop

