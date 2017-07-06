@extends('masterlayout')
@section('content')
<section id="terms">
  <!--   <div class=" page-title">
    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">   
            <h1>Terms And Conditions</h1> 
          </div>
        </div>
    </div>  
    </div> -->
  <div class="alredy">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
          <p>Already have  An Account, <a href="#">Click Here</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="singup-form">
    <div class="container"> 
      <form role="form" id="loginForm" >
        {{ csrf_field() }}

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" placeholder="Email Id" name="email">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
            <input type="password" placeholder="Password" name="password">
            @if ($errors->has('userName'))
                <span class="help-block">
                    <strong>{{ $errors->first('userName') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="row passbtn">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
            <input type="submit" name="createAccount" class="btn btn-primary loginFormButton">Log In</input>
          </div>
        </div>
        <div class="row">
          <div class="invoice-btn invoice-btn-la">
            <a href="#">Back</a>        
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<script type="text/javascript">


$(document).ready(function(e){
   $("#loginForm").on('submit', function(e){
      e.preventDefault();
      console.log("login form");

        var formData = new FormData(this);
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        });
        $.ajax({
              url: "{{ route('login_post') }}",// $("#register_form :input[name!=password2]").serializeArray()
              type: 'post', //$('input[name!=password2]', $("#register_form")).serializeArray() //$("#register_form :input[name!=password2][name!=_token]").serializeArray()
              data: new FormData(this),
              processData: false,
              contentType: false
          })
          .success(function( data ) {
            console.log(data);
            toastr.success('Hi! ' + data.responseText + ' Welcome to AutoRepa');
            setTimeout(function(){   document.location.href="{{ route('home') }}"; }, 2000);
          //  $("#LoaderGif").hide();
          console.log(data);
          })
          .error(function( data ) {
            toastr.error('Incorrect Username/Password');
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

});


</script>

@endsection

