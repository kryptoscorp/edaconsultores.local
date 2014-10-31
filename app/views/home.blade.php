@extends('layouts.master')

@section('title')
@parent
:: Home
@stop
@section('header')
<style type="text/css">
	.nav2 {
	padding: 20px;
    margin-bottom: 0px;
    list-style: outside none none;
}
</style>
@stop

@section('content')

<div class="row">
	<div class="">
		<div class="hidden-xs hidden-sm">
		{{ HTML::image ('img/img1.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-2-2')) }}
		{{ HTML::image ('img/img2.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-2-2' )) }}
		{{ HTML::image ('img/img3.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-2-2')) }}
		</div>
	</div>
</div>
<div class="row" style="background: #EBAE33; margin-top: 2px"><br></div>
<div class="row">
	<div class="row col-md-4">
	<br>
	<div class="hidden-xs hidden-sm"><br><br><br></div>
		{{ HTML::image ('img/OPN_CP.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-offset-1 center-block')) }}
		<br>
		{{ HTML::image ('img/Oracle_Ed_Ctr_clr_rgb.gif','Responsive image', array('class' => 'img-responsive img-rounded center-block')) }}
	</div>
	<div class="col-md-4 col-md-offset-4">
		<ul class="nav nav2 nav-pills nav-stacked center-block">
	  		<li><a href="#">Noticias</a></li>
	  		<li><a href="#">Promociones</a></li>
	  		<li><a href="#">Calendario</a></li>
	  		<li><a href="#">Calidad</a></li>
	  		<li><a href="#">Intranet</a></li>
		</ul>
	</div>
</div>
	


	
@stop