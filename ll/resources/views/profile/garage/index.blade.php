<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Auto Repa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  </head> 
  <body class="panel-g">
  <header id="header"  style="background: #ececec;">
    <div id="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-3 col-lg-3 float-left">
          <div class="logo">
       <a href="{{ route('home') }}"><img src="img/auto-repa-logo.png" alt="logo"></a></div>
        </div>
        <div class="main_menu col-xs-12 col-sm-12 col-md-9 col-lg-9 float-left">
          <h1>Garage Panel</h1>
        </div>
        <!-- <div class="main_menu col-xs-12 col-sm-12 col-md-3 col-lg-3 float-left">
          <div class="lang">
            <ul>
              <li><a href="#">FR</a></li>
              <li><a href="#">DE</a></li>
              <li><a href="http://110.37.221.34:7777/auto/">EN</a></li>
            </ul>
          </div>
          <div class="login">
            <a href="#"><i class="fa fa-lock"></i>  Login  <i class="fa fa-caret-down"></i></a>
          </div>
        </div> -->
    </div>    
    </div>
  </header>

<section id="terms">
<div class=" page-title">
    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 float-left">   
             <select data-placeholder="Garage Name ">
          <option>Garage Name </option>
          <option value="i1">Item 1</option>
          <option value="i2">Item 2</option>
          <option value="i3">Item 3</option>
        </select> 
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 float-left">   
            <div class="input-group ">
                  <input type="text" class="  search-query form-control" placeholder="Search By Reference Id    " />
                  <span class="input-group-btn">
                      <button class="btn btn-danger" type="button">
                          <span class=" fa fa-search"></span>
                      </button>
                  </span>
              </div>
          </div>
        </div>
    </div>  
  </div> 
  <div class="container">
  <div class="bor-lyr">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 float-left">
        <div class="garage-info">
          <h1 class="grg">Garage Information</h1>
          <ul>
            <li><b>Garage Name:</b> @if($garage_row->name == null) <i>undefined</i> @else{{ $garage_row->name }}@endif</li>
            <li><b>Location:</b> @if($garage_row->location == null) <i>undefined</i> @else{{ $garage_row->location }}@endif</li>
            <li><b>Text:</b> @if($garage_row->description == null) <i>undefined</i> @else{{ $garage_row->description }}@endif</li>
          </ul>
        </div>
        <div class="what-done">
          <h1 class="grg">Text,Label or Paragraph</h1>
          <ul>
            <li>Item 1</li>
            <li class="ee">Item 2</li>
            <li>Item 3</li>
            <li class="ee">Item 4</li>
            <li>Item 5</li>
            <li class="ee">Item 6</li>
            <li>Item 7</li>
            <li class="ee">Item 8</li>
          </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 float-left">
        <div class="user-panel">
          <h1 class="grg">User Opinion</h1>

          <div class="carosel-slider-about-us">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
                          <div class="reviews-box ">
                            <h1 class="title"><i class="fa fa-user" aria-hidden="true"></i> Geoferry</h1>
                            <div class="quotes"><i class="fa fa-quote-left"></i></div>
                            <div class="desc">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                              <p>when an unknown printer took a galley of type and scrambled it to make a type.</p>
                            </div>
                            <div class="time-date">
                              <ul>
                                <li class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 4/13/2017</li>
                                <li class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 4:38 PM</li>
                              </ul>
                            </div>
                            <div class="ratings">
                              <ul>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star-half-o" ></i></li>
                              </ul>    
                            </div>
                          </div>
                          </div>
                                               
                    </div>
                    <div class="carousel-item">
                        
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
                            <div class="reviews-box ">
                            <h1 class="title"><i class="fa fa-user" aria-hidden="true"></i> Geoferry</h1>
                            <div class="quotes"><i class="fa fa-quote-left"></i></div>
                            <div class="desc">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                              <p>when an unknown printer took a galley of type and scrambled it to make a type.</p>
                            </div>
                            <div class="time-date">
                              <ul>
                                <li class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 4/13/2017</li>
                                <li class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 4:38 PM</li>
                              </ul>
                            </div>
                            <div class="ratings">
                              <ul>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star-half-o" ></i></li>
                              </ul>    
                            </div>
                          </div>
                          </div>
                                            
                    </div>
                    <div class="carousel-item">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
                            <div class="reviews-box">
                            <h1 class="title"><i class="fa fa-user" aria-hidden="true"></i> Geoferry</h1>
                            <div class="quotes"><i class="fa fa-quote-left"></i></div>
                            <div class="desc">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                              <p>when an unknown printer took a galley of type and scrambled it to make a type.</p>
                            </div>
                            <div class="time-date">
                              <ul>
                                <li class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 4/13/2017</li>
                                <li class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 4:38 PM</li>
                              </ul>
                            </div>
                            <div class="ratings">
                              <ul>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star" ></i></li>
                                <li><i class="fa fa-star-half-o" ></i></li>
                              </ul>    
                            </div>
                          </div>
                          </div>

                    </div>
                  </div>
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                </div>  
            </div>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
      <div class="invoice-btn job-btn"> 
      	  <a href="{{ route('edit_garage_profile') }}" class="ne">Edit Profile</a>
          <a href="#" class="ne">Back</a>
          <a href="#" class="ne">View Invoice</a>
        </div>
    </div>
  </div>

  </div>
</div>
</section>

<footer id="main-footer">
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 float-left">
          <ul class="social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 float-left">
          <p>© 2017 Design & Developed By: Startupbug.net</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 float-left">
          <ul class="footer-nav">
              <li><a href="http://110.37.221.34:7777/auto/faq.html">FAQs</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="http://110.37.221.34:7777/auto/terms-condition.html">Terms & Conditions</a></li>
              <li><a href="http://110.37.221.34:7777/auto/Confidentiality.html">Confidentiality</a></li>
              
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script >
  $(document).ready(function() {
    $('#myCarousel').carousel({
      interval: false
  })
});
</script>
</body>
</html>
