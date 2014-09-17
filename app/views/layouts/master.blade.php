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
        <meta content="" name="website kryptos"></meta>
        <meta content="" name="Ronny Arvelo"></meta>


        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        {{ HTML::style('css/font-awesome.min.css') }}

        <!-- otra forma de importar
        {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}
        {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css') }}-->

        
    </head>

    <body style="margin-top:20px">

    <div class="container">
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
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>

        <!--content-->
        <div id="main" class="container-fluid">
            {{ HTML::ul($errors->all()) }}
            @if (Session::has('message'))
                <div class="alert alert-dismissable alert-info">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ Session::get('message') }}
                </div>
            @endif
            @yield('content')
        </div>
        

        <!--footer-->
        <div>        
            <footer id="footer" class="row">
                <p class="text-center text-success">
                Enfoque Directo Aplicado Consultores 2014
                </p>
            </footer>
        </div>
    </div>


    <!-- Scripts are placed here -->
        {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js') }}
        {{ HTML::script('/js/bootstrap.js') }}
        <script type="text/javascript">
            $(document).ready(function(){
                $(".popover-top").popover({
                    placement : 'top'
                });
                $(".popover-right").popover({
                    placement : 'right'
                });
                $(".popover-bottom").popover({
                    placement : 'bottom'
                });
                $(".popover-left").popover({
                    placement : 'left'
                });
                $(".popover-dismiss").popover({
                    trigger: 'focus'
                });
                $(window).load(function(){
                $('.make-visible').css('visibility','visible').hide().fadeIn(2000);
                });
            });
        </script>
    </body>
</html>

