<style>
.navigation
{
    height:100px;
}
.navbar
{
background-color:#7acdf7;
opacity: 0.8;
}
.navbar:hover
{
    opacity: 1;
}
     .navbar-collapse li
     {
         font-size: 105%;
         font-weight: bold;
     }
     .navbar ul
     {
        padding-top: 30px;
     }
     .nav.navbar-nav.navbar-right li a {
    color:black;
}
 .nav.navbar-nav.navbar-right li a:hover {
    color:#7D1935;
    }
     </style>

     <div class="navigation">
       <nav class="navbar navbar-default navbar-fixed-top topnav" style="height:100px;">
        <div class="container topnav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('welcome') }}">
                      @include('partials.image')
                    </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
               <li>
                        <a href="{{ route('welcome') }}">HOME</a>
            
                    </li>
                    <li>
                       @include('button.b')
                    </li>
                     <li>
                       @include('button.bu')
                    </li>
                     <li>
                       @include('button.but')
                    </li>
                   
                    <li>
                        <a href="#">GALLERY</a>
                    </li>
                     <li>
                        <a href="{{ route('testinominal') }}">TESTIMONIALS</a>
                    </li>
                    <li>
                        <a href="{{ route('map') }}">CONTACT US</a>
                    </li>
                    <li>
                     <a href="{{ route('login') }}" class="btn disabled" aria-disabled="true">ADMIN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>