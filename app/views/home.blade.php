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

<div class="row" style="">
	<div class="" style="">
		<div class="hidden-xs hidden-sm">
		{{ HTML::image ('img/img1.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-2-2')) }}
		{{ HTML::image ('img/img2.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-2-2' )) }}
		{{ HTML::image ('img/img3.gif','Responsive image', array('class' => 'img-responsive img-rounded col-md-2-2')) }}
		</div>
	</div>
	<div  id="" class="" style="margin-left: 260px; margin-top: -14px;">
	<script>if (typeof em5 === 'undefined'){var em5 = window.addEventListener ? "addEventListener" : "attachEvent";var er5 = window[em5];var me5 = em5 == "attachEvent" ? "onmessage" : "message";er5(me5,function (e) {var s5= e.data;if (s5.substring(0,10) == "changeSize"){document.getElementById(s5.substring(s5.indexOf("html5maker")+10)).style.height=s5.substring(10, s5.indexOf("html5maker"));}},false);}</script>
	<iframe id="html5b1781d2cb1cb29d1450c0204493479aaebedaa76c48e" src="/anm/b1781d2cb1cb29d1450c0204493479aaebedaa76c48e/b1781d2cb1cb29d1450c0204493479aaebedaa76c48e.html" width="100%" height="160" frameborder="0" scrolling="no" allowTransparency="true"></iframe>
	</div>
</div>
<div class="row" style="background: #EBAE33; margin-top: 2px">
	<br>
</div>
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