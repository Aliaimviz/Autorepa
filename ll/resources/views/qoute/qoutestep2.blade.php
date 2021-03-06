@extends('masterlayout')
@section('content')


<div id="qouteStep">

    <section id="terms">
    <div class=" page-title" style="background: #f3f3f3;padding: 27px 0;">
        <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">   
                <div class="invoice-btn job-btn job-btn2">
                  <a id="carInfoButton" href="#" class="ne">Car Infotmation</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">   
                <div class="invoice-btn job-btn job-btn2">
                  <a id="geographicButton" href="#" class="ne">Geographic Information</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">   
                <div class="invoice-btn job-btn job-btn2">
                  <a href="#" class="ne">Resume</a>
                </div>
              </div>
            </div>
        </div>  
    </div> 

      <div class="container">
        <div class="tit"><h1>User Location</h1></div>
        <div class="row description-info">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 float-left">
            <div class="location">
              <h4>Location description:</h4>
                <div class="jobs-details">
              <ul>
                <li><i class="fa fa-check-circle"></i>Job 1</li>
                <li><i class="fa fa-check-circle"></i>Job 2</li>
                <li><i class="fa fa-check-circle"></i>Job 3</li>
                <li><i class="fa fa-check-circle"></i>Job 4</li>
              </ul>
            </div>
            </div>
          </div>
          <style>
          #map{
            height: 420px;
            width: 100%;            
          }
          </style>

<div id="map">
            </div>

          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 float-left">
            
          
            <!--<div class="map-iframe">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.299285850037!2d-2.9831205844324438!3d53.40947347999225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b213b1abef049%3A0xe900749a0d60a107!2sWorld+Museum!5e0!3m2!1sen!2s!4v1497267478118" width="100%" height="520" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div> -->

          </div>
        </div>
        

      </div>

      <div class="distance-main">
      <div class="container">
        <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 float-left">
            <h1>Find The Best Deal Of Your Region By Selecting Your Location </h1>
            <p>View Distance From  Garage</p>            
         </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 float-left">
           <select data-placeholder="Garage Name ">
            <option>Garage Name </option>
            <option value="i1">Item 1</option>
            <option value="i2">Item 2</option>
            <option value="i3">Item 3</option>
          </select> 

          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 float-left">
            <input type="text" placeholder="Distance from your location to garage ">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 float-left">
            <a href="#" class="distance">View Distance <i class="fa fa-eye" aria-hidden="true"></i></a>
          </div>
        </div>
         
      </div>
    </div>

    <div class="last-back">
    <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
             <div class="invoice-btn job-btn">
              <a href="#" class="ne">Back</a>
              <a href="#" class="ne">Next</a>
            </div>
          </div>
        </div>
        </div>
    </div>
    </section>
</div>

<script type="text/javascript">

				
               function initMap() {
                 var map = new google.maps.Map(document.getElementById('map'), {
                   zoom: 8,
                   center: {lat: 46.8182, lng:  8.2275}
                 });
                 var geocoder = new google.maps.Geocoder();

                }

                   function geocodeAddress(geocoder, resultsMap, address, title, idz, imagez, bed_type) {

                     geocoder.geocode({'address': address}, function(results, status) {
                       if (status === 'OK') {
                         //resultsMap.setCenter(results[0].geometry.location);
                           contentString = '<div>' + '</div>';
                           var infowindow = new google.maps.InfoWindow({
                             content: contentString
                           })

                         var marker = new google.maps.Marker({
                           map: resultsMap,
                           position: results[0].geometry.location,
                           icon: marker_icon,
                         });

                         marker.addListener('click', function() {
                            infowindow.open(map, marker);
                          });

                       } else {
                         console.log('Geocode was not successful for the following reason: ' + status);
                       }
                     });
               }
               
</script>


<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkVKgWkld3FWQgGd1T-Yhh7Vr65aj3q4c&callback=initMap">
</script>

@endsection