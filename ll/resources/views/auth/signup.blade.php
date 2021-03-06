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
      <form role="form" method="POST" id="signupForm" >
        {{ csrf_field() }}
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <select data-placeholder="Title" name="title">
              <option>Form Of Adress</option>
              <option value="MR">Mr.</option>
              <option value="MRS">Mrs.</option>
              <option value="MISS">Miss.</option>
            </select>
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
            <input type="text" placeholder="First Name" name="firstName">
            @if ($errors->has('firstName'))
                <span class="help-block">
                    <strong>{{ $errors->first('firstName') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
            <input type="text" placeholder="Last Name" name="lastName">
            @if ($errors->has('lastName'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastName') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left form-group{{ $errors->has('birthDate') ? ' has-error' : '' }}">
            <input type="Date" class="form-control" placeholder="Date Of Birth" id="datetimepicker4" name="birthDate">
            @if ($errors->has('birthDate'))
                <span class="help-block">
                    <strong>{{ $errors->first('birthDate') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" placeholder="Email Id" name="email">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left form-group{{ $errors->has('language') ? ' has-error' : '' }}">
            <select data-placeholder="Language..." name="language">
              <option value="#">Language</option>
              <option value="AF">Afrikanns</option>
              <option value="SQ">Albanian</option>
              <option value="AR">Arabic</option>
              <option value="HY">Armenian</option>
              <option value="EU">Basque</option>
              <option value="BN">Bengali</option>
              <option value="BG">Bulgarian</option>
              <option value="CA">Catalan</option>
              <option value="KM">Cambodian</option>
              <option value="ZH">Chinese (Mandarin)</option>
              <option value="HR">Croation</option>
              <option value="CS">Czech</option>
              <option value="DA">Danish</option>
              <option value="NL">Dutch</option>
              <option value="EN">English</option>
              <option value="ET">Estonian</option>
              <option value="FJ">Fiji</option>
              <option value="FI">Finnish</option>
              <option value="FR">French</option>
              <option value="KA">Georgian</option>
              <option value="DE">German</option>
              <option value="EL">Greek</option>
              <option value="GU">Gujarati</option>
              <option value="HE">Hebrew</option>
              <option value="HI">Hindi</option>
              <option value="HU">Hungarian</option>
              <option value="IS">Icelandic</option>
              <option value="ID">Indonesian</option>
              <option value="GA">Irish</option>
              <option value="IT">Italian</option>
              <option value="JA">Japanese</option>
              <option value="JW">Javanese</option>
              <option value="KO">Korean</option>
              <option value="LA">Latin</option>
              <option value="LV">Latvian</option>
              <option value="LT">Lithuanian</option>
              <option value="MK">Macedonian</option>
              <option value="MS">Malay</option>
              <option value="ML">Malayalam</option>
              <option value="MT">Maltese</option>
              <option value="MI">Maori</option>
              <option value="MR">Marathi</option>
              <option value="MN">Mongolian</option>
              <option value="NE">Nepali</option>
              <option value="NO">Norwegian</option>
              <option value="FA">Persian</option>
              <option value="PL">Polish</option>
              <option value="PT">Portuguese</option>
              <option value="PA">Punjabi</option>
              <option value="QU">Quechua</option>
              <option value="RO">Romanian</option>
              <option value="RU">Russian</option>
              <option value="SM">Samoan</option>
              <option value="SR">Serbian</option>
              <option value="SK">Slovak</option>
              <option value="SL">Slovenian</option>
              <option value="ES">Spanish</option>
              <option value="SW">Swahili</option>
              <option value="SV">Swedish </option>
              <option value="TA">Tamil</option>
              <option value="TT">Tatar</option>
              <option value="TE">Telugu</option>
              <option value="TH">Thai</option>
              <option value="BO">Tibetan</option>
              <option value="TO">Tonga</option>
              <option value="TR">Turkish</option>
              <option value="UK">Ukranian</option>
              <option value="UR">Urdu</option>
              <option value="UZ">Uzbek</option>
              <option value="VI">Vietnamese</option>
              <option value="CY">Welsh</option>
              <option value="XH">Xhosa</option>
            </select>

       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left form-group">
         <select data-placeholder="I Am..." name="user_type" required>
            <option value="1">I Am a Garage Owner</option>
            <option value="2">I Am a Customer</option>
         </select> 
       </div>

          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
            <input type="text" placeholder="Address" name="user_address">
          </div>


            @if ($errors->has('language'))
                <span class="help-block">
                    <strong>{{ $errors->first('language') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
            <input type="text" placeholder="Username" name="userName">
            @if ($errors->has('userName'))
                <span class="help-block">
                    <strong>{{ $errors->first('userName') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="row passbtn">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" placeholder="Password" name="password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
            <input type="password" placeholder="Confirm Password" name="password_confirmation">      
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
            <button type="submit" name="createAccount" class="btn btn-primary">Create Account</button>
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
@endsection