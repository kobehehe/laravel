<!DOCTYPE html>  
<html>
<head>
<title>Football Bootstarp Website Template | Home :: w3layouts</title>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<!--//fonts-->
 <script src="{{asset('js/responsiveslides.min.js')}}"></script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
</head>
<body> 
<!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container">
            <p class="header-para">最专业的民间篮球赛事平台</p>
                <ul class="sign">
                    @if (Auth::guest())
                    <li ><a href="login" >登陆</a></li>
                    <li ><a href="register" >注册</a></li>
                    @else
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} 
                            </a>

                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>／退出</a></li>
                    </li>
                    @endif           
                </ul>
            </div>
            <div class="clearfix"> </div>
    </div>
    <div class="header-bottom-top">
        <div class="container">
            <div class="search">    
                <input type="text" value="Search website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                <input type="submit"  value=""> 
            </div>
            <div class="clearfix"> </div>
            <div class="header-bottom">         
                <div class="logo">
                    <a href="index.html"><img src="{{asset('images/log.png')}}" alt=" " /></a>
                </div>
                <div class="top-nav">
                    <span class="menu"> </span>
                    <ul>
                        <li class="active" ><a href="/" class="scroll">首页</a></li>
                        <li><a href="{{asset('team')}}" class="scroll">球队</a></li>
                        <li><a href="teams.html" class="scroll">比赛</a></li>                       
                        <li><a href="services.html" class="scroll">Services</a></li>
                        <li><a href="sports.html" class="scroll">Sports </a></li>
                        <li><a href="contact.html" class="scroll">Contact</a></li>
                    </ul>
                    <!-- script-nav -->
                    <!--script-->
                <script>
                    $("span.menu").click(function(){
                        $(".top-nav ul").slideToggle(500, function(){
                        });
                    });
            </script>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        </div>
    </div>

    @yield('head')
    <div class="footer">
        <div class="container">
        
            <div class="foter-bottom">          
                 <p class="footer-grid">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                <div class=" nav-top">              
                    <ul>
                        <li class="active" ><a href="index.html" class="scroll">Home</a></li>
                        <li><a href="about.html" class="scroll"> About</a></li>
                        <li><a href="teams.html" class="scroll">Team</a></li>                   
                        <li><a href="services.html" class="scroll">Services</a></li>
                        <li><a href="sports.html" class="scroll">Sports </a></li>
                        <li><a href="contact.html" class="scroll">Contact</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
     

</body>  
</html>  
