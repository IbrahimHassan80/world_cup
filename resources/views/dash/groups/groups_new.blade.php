@extends('layouts.app')
@section('content')

<div class="container col-md-5">

{{ Form::open(['action'=>'group\groups@store']) }}

{{Form::text('name','',['class'=>'form-control'])}}

{{form::submit('add group',['class'=>'btn btn-primary'])}}<br>
			@if ($errors->has('name'))
            {{$errors->get('name')[0]}}
            @endif

{{ Form::close() }}
</div>

@stop