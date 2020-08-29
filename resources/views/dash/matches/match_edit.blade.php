@extends('layouts.app')
@section('content')

<div class="container">

{{Form::open(['action'=>['match\matches@update', $matched->id], 'method'=>'put'])}}

<label>groups list</label>

{{form::select('group_id',$grouped, $matched->group_id,['class'=>'form-control'])}}

<label>teame 1 list</label>

{{Form::select('teame1', $teamedi, $matched->teame1, ['class'=>'form-control'])}}

<label>teame 2 list</label>

{{Form::select('teame2', $teamedi, $matched->teame2, ['class'=>'form-control'])}}

<label>points</label>

{{Form::text('points',$matched->points,['class'=>'form-control','placeholder'=>'points'])}}
      @if ($errors->has('points'))
        <div class="alert alert-danger" role="alert">
          {{$errors->get('points')[0]}}
       </div>
           @endif     

<label>Goals</label>

{{Form::text('goals',$matched->goals,['class'=>'form-control','placeholder'=>'Goals'])}}
       @if ($errors->has('goals'))
        <div class="alert alert-danger" role="alert">
          {{$errors->get('goals')[0]}}
       </div>
       @endif

{{Form::submit('Save',['class'=>'btn btn-success'])}}

{{Form::close()}}


</div>
@stop