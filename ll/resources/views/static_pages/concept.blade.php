@extends('masterlayout2')
@section('content')

  <body class="concept-page">
  <header id="header">
    <div id="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-3 col-lg-3 float-left">
          <div class="logo">
          <a href="http://110.37.221.34:7777/auto/"><img src="img/auto-repa-logo.png" alt="logo"></a></div>
        </div>
        <div class="main_menu col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
          <ul class="main-nav">
            <li><a href="http://110.37.221.34:7777/auto/">Home</a></li>
            <li><a href="http://110.37.221.34:7777/auto/about-us.html">About us</a></li>
            <li><a href="http://110.37.221.34:7777/auto/concept.html">Concept</a></li>
            <li><a href="#">Profile</a></li>
            
          </ul>
        </div>
        <div class="main_menu col-xs-12 col-sm-12 col-md-3 col-lg-3 float-left">
          <div class="lang">
            <ul>
              <li><a href="#">FR</a></li>
              <li><a href="#">DE</a></li>
              <li><a href="http://110.37.221.34:7777/auto/">EN</a></li>
            </ul>
          </div>
          <div class="login">
          <!--  <a href="#"><i class="fa fa-lock"></i>  Login  <i class="fa fa-caret-down"></i></a> -->
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="fa fa-lock"></span> Login 
               </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Singup</a></li>
                  <li><a href="#">Login</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
            </div>
          </div>
        </div>
    </div>    
    </div>
  </header>
<section id="terms">
  <div class=" page-title">
    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">   
            <h1>Concept</h1> 
          </div>
        </div>
    </div>  
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 float-left">
       <div class="terms-p">
         <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the    1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
           <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
           <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.</p>
       </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 float-left">
        <img src="img/cars-house.png" class="about-main-img">
      </div>
    </div>
  </div>
</section>

@endsection