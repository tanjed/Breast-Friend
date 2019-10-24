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
            <a class="navbar-brand" href="#" >
               <div class="row">
                   <div class="col-md-2">
                       <img  src="/img/logo1.png" alt="" style="height: 50px;width: 50px;">

                   </div>
                   <div class="col-md-10">
                       <h1 style="color: whitesmoke">Breast Friend</h1>
                   </div>
               </div>
            </a>
        </div>


        <nav class="navbar-right">
            <ul class="nav navbar-nav main-manu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#screening">Screening</a></li>
                <li><a href="#knowledge">Knowledge</a></li>
                @auth
                    <li><a>Hello, {{auth()->user()->first_name}}</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                @else
                    <li><a href="{{route('signIn')}}">Login / Register</a></li>
                @endauth
            </ul>
        </nav><!-- /.navbar-collapse -->
    </div>
</header>
