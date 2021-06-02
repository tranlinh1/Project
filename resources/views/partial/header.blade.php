<nav class="navbar navbar-inverse">
    <div class="container-fluid">
       <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span></a>
       </div>
       <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
             <li class="active"><a href={{ asset('/') }}>&#8903; MAN FASHION</a></li>
             <li><a href="{{ asset('shop') }}">SHOPS</a></li>
             <li><a href="{{ asset('community')}}">COMMUNITY</a></li>
             <li><a href="{{ asset('signature')}}">SIGNATURE</a></li>
             <li><a href="{{ asset('aboutus')}}">ABOUT US</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li><a {{ asset('login')}}><span class="glyphicon glyphicon-log-in"></span> LOG IN</a></li>
             <li><a {{ asset('cart')}}><span class="glyphicon glyphicon-shopping-cart"></span> CART</a></li>
          </ul>
       </div>
    </div>
</nav>
