@extends('layouts.app')

@section('content')
<div class='container'>
{{ Form::open(['action' => ['country\countrycontroller@update', $country->id], 'method'=>'put']) }}


<div class="form-group">

{{Form::label('country name')}}	
{{Form::text('name', $country->name, ['class'=>'form-control'])}}    

<br>
{{Form::label('country code')}}	

{{Form::text('country_code', $country->country_code, ['class'=>'form-control','placeholder'=>'namecountry'])}}

{{Form::submit('Add Country',['class'=>'btn btn-primary'])}}

</div>

<i class="fas fa-arrow-left fa-3x"></i>
  <i class="fab fa-500px"></i>


{!! Form::close() !!}
</div>
@stop