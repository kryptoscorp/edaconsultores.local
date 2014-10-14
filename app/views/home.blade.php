@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
<div class="row">
	<div class="row">
		{{ HTML::image ('img/img1.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-2')) }}
		{{ HTML::image ('img/img2.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-2' )) }}
		{{ HTML::image ('img/img3.gif','Responsive image', array('class' => 'img-responsive img-rounded')) }}
	</div>
	<br><br>
	<div class="row ">
		{{ HTML::image ('img/OPN_CP.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-offset-1')) }}
		{{ HTML::image ('img/Oracle_Ed_Ctr_clr_rgb.gif','Responsive image', array('class' => 'img-responsive img-rounded')) }}
	</div>
</div>
@stop