$(document).ready(function(e){
	//Global variables

		var base_url = 'http://localhost/autorepa_test/ll/public/';
		var qouteStep1View = '';
		console.log("custom JS");
	    var base_url = "http://localhost/autorepa_test/ll/public/";
		//AutoRepa Registration Form

		$("#signupForm").on('submit', function(e){
		      e.preventDefault();
		      //base_url  = '/ukshortlets/';
		      //$("#LoaderGif").show();
		      var formData = new FormData(this);
		      $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });
		      $.ajax({
		            url: 'http://localhost/autorepa_test/ll/public/register',// $("#register_form :input[name!=password2]").serializeArray()
		            type: 'post', //$('input[name!=password2]', $("#register_form")).serializeArray() //$("#register_form :input[name!=password2][name!=_token]").serializeArray()
		            data: new FormData(this),
		            processData: false,
		            contentType: false
		        })
		        .success(function( data ) {

		        	if(data.role == 2){
		        		toastr.success('Successfully Registered as Garage owner. Login now to Set your Garage information');
		        	}else{
		        		toastr.success('Successfully Registered. Repair your Car Auto!');
		        	}
		        	

		        	setTimeout(function(){   location.reload(); }, 2000);
		        //  $("#LoaderGif").hide();
		        console.log(data);
		        })
		        .error(function( data ) {
		        	toastr.error('Couldnot be Registered');
		        //  $("#LoaderGif").hide();
		          /*var errors = data.responseJSON;
		          $("#info_message_error").show();
		          $.each(errors, function( index, value ) {
		              $("input[name='"+ index +"']").css("border-color", 'red');
		              $("."+index).text(value);
		            });
		        });*/
		        });

	   });
	
		$("#qouteStep1Button").on('click', function(e){
			 e.preventDefault();
			 console.log("qoute step 1 button");
			 //Intializing Qoute 1
			 console.log("base_url" + base_url);

		      $.ajaxSetup({
		          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		      });
		      	//. 
		      	//ok ?
		      $.ajax({
		            url: base_url + '/qoutestep1',// $("#register_form :input[name!=password2]").serializeArray()
		            type: 'post', //$('input[name!=password2]', $("#register_form")).serializeArray() //$("#register_form :input[name!=password2][name!=_token]").serializeArray()
		            data: {'brand_id':$("#brand_id").val(), 'model_id':$("#model_id").val(), 'licence_plate':$("#licence_plate").val(),
		        		   'engine_no':$("#engine_no").val(), 'num_plate':$("#num_plate").val(), 'construc_year':$("#construc_year").val(),
		        		   'km_reading':$("#km_reading").val(), 'cust_cmt':$("#cust_cmt").val() },
		        })
		        .success(function( data ) {
		        	console.log("qoute form 1 success submit");
		        	console.log(data.qoute2HTML);
		        	$("body").scrollTop( 300 );
		        	$("#qouteStep").html(data.qoute2HTML);
		        	qouteStep1View = data.qoute1HTML;
		        	qouteStep2View = data.qoute2HTML;
		        		
		        		initMap();
		        	    
		        	    function initMap() {
		        	       	console.log("hohi nahi sakta");
						         var map = new google.maps.Map(document.getElementById('map'), {
						           zoom: 6,
						           center: {lat: 46.8182, lng: 8.2275}
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

		        })
		        .error(function( data ) {
		          $("#LoaderGif").hide();
		          var errors = data.responseJSON;
		          $("#info_message_error").show();
		          $.each(errors, function( index, value ) {
		              $("input[name='"+ index +"']").css("border-color", 'red');
		              $("."+index).text(value);
		            });
		        });			 

		});

		$("#carInfoButton").on('click', function(e){
			console.log("car info button clicked");
			if (!(qouteStep1View == null)) {
			      $("#qouteStep").html(qouteStep1View);			     
			}
		});

		$("#geographicButton").on('click', function(e){
			if (!(qouteStep2View == null)) {
			      $("#qouteStep").html(qouteStep2View);			     
			}			
		});

function goBack() {
    window.history.back();
}

//Document ready
});
