@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
<div class="row">
	{{ HTML::ul($errors->all()) }}
</div>

@stop