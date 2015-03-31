<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            EDA
            @show
        </title>
        <meta charset="utf-8"></meta>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
        <meta content="width=device-width, initial-scale=1" name="viewport"></meta>
        <meta content="" name="website EDA"></meta>
        <meta content="" name="Ronny Arvelo"></meta>

        
        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        {{ HTML::style('css/font-awesome.min.css') }}
        {{ HTML::style('css/animate.css') }}
        {{ HTML::style('/css/morphext.css') }}
        @yield('header')


        
    </head>

    <body style="margin-top:2px; overflow: hidden;">   
    <div class="container">
        <div id="logo">
        {{ HTML::image ('img/logo_eda.gif','Responsive image', array('class' => 'img-rounded', 'id' => 'top-logo')) }}
        </div>

        <!--nav-->
    <div class="row">
        <nav class="navbar navbar-default" role="navigation">

            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../">
                        <i class="fa fa-home"> EDA</i>
                    </a>
                    <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->


                <div id="navbar-main" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav" >
                        @if(URL::current()==URL::route('nosotros'))
                            <li class="active">
                        @else
                            <li>
                        @endif
                            <a href="{{{ URL::action('EdaController@showNosotros') }}}">Quienes somos</a>
                            </li>
                        @if(URL::current()==URL::route('servicios'))
                            <li class="active">
                        @else
                            <li>
                        @endif
                            <a href="{{{ URL::action('EdaController@showServicios') }}}">Servicios</a>
                            </li>
                        @if(URL::current()==URL::route('pca'))
                            <li class="active">
                        @else
                            <li>
                        @endif
                            <a href="{{{ URL::action('EdaController@showPca') }}}">pca</a>
                            </li>
                        @if(URL::current()==URL::route('contacto'))
                            <li class="active">
                        @else
                            <li>
                        @endif
                            <a href="{{{ URL::action('EdaController@showContacto') }}}">Contacto</a>
                            </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>

        <!--content-->
        @if(URL::current()==URL::route('home'))
            <div id="main" class="">
        @else
            <div id="main" class="container">
        @endif
            {{ HTML::ul($errors->all()) }}
            @if (Session::has('message'))
                <div class="alert alert-dismissable alert-info">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ Session::get('message') }}
                </div>
            @endif
            @yield('content')
        </div>
        <br>
        <!--
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container">
                    
                </div>
            </nav>
        </div>
         -->
        <!--footer-->
        <div>        
            <footer id="footer" class="row">
                <p class="text-center text-success">
                Enfoque directo aplicado 2014
                </p>
            </footer>
        </div>
    </div>


    <!-- Scripts are placed here -->
        {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js') }}
        {{ HTML::script('/js/bootstrap.js') }}
        {{ HTML::script('/js/morphext.min.js') }}
        @yield('script')
        <script type="text/javascript">
            $(document).ready(function(){
                $(window).load(function(){
                $('.make-visible').css('visibility','visible').hide().fadeIn(2000);
                });

                $('#top-logo').addClass('animated fadeInLeft');
                var vars =[
                        "<h3 id='an1' style='color: #FFBF00; text-align: right;'>inteligencia de negocios<br><br>diseño web</h3>",
                        "programa de consultoria de adiestramiento",
                        "estamos al servicio de su exito",
                        "soluciones integrales para su negocio"
                    ];
                    /*
                //while (){
                //for (i = 0; i < vars.length; i++) {   
                    $('#t1').html(vars[0]);
                    $('#an1').addClass('animated rotateIn');
                    $('#an1').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',setTimeout(function(){
                        $('#t1').addClass('animated fadeOutRight')
                    }, 2500));        
                //}
                    */
            });
        </script>
    </body>
</html>

