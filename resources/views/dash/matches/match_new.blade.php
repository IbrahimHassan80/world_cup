@extends('layouts.app')
@section('content')

<div class="container">

{{Form::open(['action'=>'match\matches@store'])}}

<label>groups list</label>
{{Form::select('group_id',$groups,'',['class'=>'form-control'])}}

<label>teame 1 list</label>
{{Form::select('teame1', $teames, '', ['class'=>'form-control'])}}

<label>Teame1 Goals</label>
{{Form::text('teame1g','',['class'=>'form-control','placeholder'=>'teame1-goals'])}}

<label>teame 2 list</label>
{{Form::select('teame2', $teames, '', ['class'=>'form-control'])}}

<label>Teame 2 Goals</label>
{{Form::text('teame2g','',['class'=>'form-control','placeholder'=>'teame2-goals'])}}

<label>points</label>
{{Form::text('points','',['class'=>'form-control','placeholder'=>'points'])}}
			@if ($errors->has('points'))
           <div class="alert alert-danger" role="alert">
  		     {{$errors->get('points')[0]}}
		   </div>
           @endif			
<!----- -->

<!-- ------ -->
{{Form::submit('Save',['class'=>'btn btn-success'])}}

{{Form::close()}}

</form>
</div>











@stop