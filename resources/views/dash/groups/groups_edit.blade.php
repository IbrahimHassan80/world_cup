@extends('layouts.app')
@section('content')

<div class="container col-md-5">

{{ Form::open(['action'=>['group\groups@update',$edit->id], 'method'=>'put']) }}

{{Form::text('name', $edit->name,['class'=>'form-control'])}}

{{form::submit('Edit group',['class'=>'btn btn-primary'])}}<br>
			@if ($errors->has('name'))
             {{$errors->get('name')[0]}}
            @endif
{{ Form::close() }}
</div>
















@stop
