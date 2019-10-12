<!-- end #preloader -->
<header class="site-header navbar-fixed-top navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="img/logo_old.png" alt="">
            </a>
        </div>


        <nav class="navbar-right">
            <ul class="nav navbar-nav main-manu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#screening">Screening</a></li>
                <li><a href="#">Tips</a></li>
                @auth
                    <li><a href="#">Hello, {{auth()->user()->first_name}}</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                @else
                    <li><a href="{{route('signIn')}}">Login / Register</a></li>
                @endauth
            </ul>
        </nav><!-- /.navbar-collapse -->
    </div>
</header>
