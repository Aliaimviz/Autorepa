$(document).ready(function(e){
	//Global variables

		var base_url = 'http://localhost/autorepa_test/ll/public/';

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
		        	toastr.success('Successfully Registered');

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
		        	console.log();
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



//Document ready
});
