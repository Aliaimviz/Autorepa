<div id="qouteStep">

<section id="terms">
<div class=" page-title quote-step-1 invoice-btn job-btn" style="background: #f3f3f3;">
    <div class="container">
       <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
          <a href="#" class="ne">Car Infotmation</a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
          <a id="geographicButton" href="#" class="ne">Geographic Information</a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
          <a href="#" class="ne">Resume</a>
        </div>
      </div>
    </div>  
</div> 

<div class=" info-car  singup-form">
  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
        <h1>Inforamtion Concerning The Car</h1>
      </div>
    </div>

    <div class="row" id="info-field">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">   
             <select data-placeholder="Garage Name " name="brand_id" id="brand_id">
              <option disabled><b>Brand Name</b></option>
              @foreach($car_brands as $car_brand)
                <option value="{{ $car_brand->id }}">{{ $car_brand->title }}</option>
              @endforeach
            </select> 
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">   
             <select data-placeholder="Garage Name " name="model_id" id="model_id">
                  <option disabled><b>Model</b></option>
                @foreach($car_models as $car_model)
                  <option value="{{ $car_model->id }}">{{ $car_model->title }}</option>                
                @endforeach
            </select>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">   
            <input type="text"  name="licence_plate" id="licence_plate" value="@if(isset($qouteStepData['brand_id'])) {{$qouteStepData['brand_id'] @endif" placeholder="Licence Plate no.">
      <!--        <select data-placeholder="Garage Name ">
              <option>Licence Plate </option>
              <option value="i1">Item 1</option>
              <option value="i2">Item 2</option>
              <option value="i3">Item 3</option>
            </select> --> 
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">   
            <input type="text"  name="engine_no" id="engine_no" placeholder="Engine no.">
      <!--        <select data-placeholder="Garage Name ">
              <option>Licence Plate </option>
              <option value="i1">Item 1</option>
              <option value="i2">Item 2</option>
              <option value="i3">Item 3</option>
            </select> --> 
        </div> 

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">   
            <input type="text"  name="num_plate" id="num_plate" placeholder="Number Plate no.">
      <!--        <select data-placeholder="Garage Name ">
              <option>Licence Plate </option>
              <option value="i1">Item 1</option>
              <option value="i2">Item 2</option>
              <option value="i3">Item 3</option>
            </select> --> 
        </div>                         
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">   
          <input type="text"  id="construc_year" name="construc_year" placeholder="Construction Year">
      </div> 
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">   
          <input type="text" id="km_reading" name="km_reading"  placeholder="Kilometer Reading">
      </div>  
    </div>

  </div>
</div>


<div class="has-to-be-done">
  <div class="container">
     <h1>What Has To Be Done</h1>

     <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
<div class="carosel-slider-about-us">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                          <div class="what-dones">
                             <h1>Exterieur</h1>
                              <div class="jobs-details">
                              <ul>
                                <li><i class="fa fa-check-circle"></i>Job 1</li>
                                <li><i class="fa fa-check-circle"></i>Job 2</li>
                                <li><i class="fa fa-check-circle"></i>Job 3</li>
                                <li><i class="fa fa-check-circle"></i>Job 4</li>
                                <li><i class="fa fa-check-circle"></i>Job 5</li>
                                <li><i class="fa fa-check-circle"></i>Job 6</li>
                                <li><i class="fa fa-check-circle"></i>Job 7</li>
                              </ul>
                            </div>
                            <div class="arrs">
                            <i class="fa fa-arrow-down arrw"></i>
                            </div>
                           </div>
                          </div>
                        
                           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                           <div class="what-dones">
                             <h1>Exterieur</h1>
                              <div class="jobs-details">
                              <ul>
                                <li><i class="fa fa-check-circle"></i>Job 1</li>
                                <li><i class="fa fa-check-circle"></i>Job 2</li>
                                <li><i class="fa fa-check-circle"></i>Job 3</li>
                                <li><i class="fa fa-check-circle"></i>Job 4</li>
                                <li><i class="fa fa-check-circle"></i>Job 5</li>
                                <li><i class="fa fa-check-circle"></i>Job 6</li>
                                <li><i class="fa fa-check-circle"></i>Job 7</li>
                              </ul>
                            </div>
                            <div class="arrs">
                            <i class="fa fa-arrow-down arrw"></i>
                            </div>
                           </div>
                          </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                            <div class="what-dones">
                             <h1>Exterieur</h1>
                              <div class="jobs-details">
                              <ul>
                                <li><i class="fa fa-check-circle"></i>Job 1</li>
                                <li><i class="fa fa-check-circle"></i>Job 2</li>
                                <li><i class="fa fa-check-circle"></i>Job 3</li>
                                <li><i class="fa fa-check-circle"></i>Job 4</li>
                                <li><i class="fa fa-check-circle"></i>Job 5</li>
                                <li><i class="fa fa-check-circle"></i>Job 6</li>
                                <li><i class="fa fa-check-circle"></i>Job 7</li>
                              </ul>
                            </div>
                            <div class="arrs">
                            <i class="fa fa-arrow-down arrw"></i>
                            </div>
                           </div>
                          </div>
                        
                    </div>
                    <div class="carousel-item">
                        
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                            <div class="what-dones">
                             <h1>Exterieur</h1>
                              <div class="jobs-details">
                              <ul>
                                <li><i class="fa fa-check-circle"></i>Job 1</li>
                                <li><i class="fa fa-check-circle"></i>Job 2</li>
                                <li><i class="fa fa-check-circle"></i>Job 3</li>
                                <li><i class="fa fa-check-circle"></i>Job 4</li>
                                <li><i class="fa fa-check-circle"></i>Job 5</li>
                                <li><i class="fa fa-check-circle"></i>Job 6</li>
                                <li><i class="fa fa-check-circle"></i>Job 7</li>
                              </ul>
                            </div>
                            <div class="arrs">
                            <i class="fa fa-arrow-down arrw"></i>
                            </div>
                           </div>
                          </div>
                        
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                            <div class="what-dones">
                             <h1>Exterieur</h1>
                              <div class="jobs-details">
                              <ul>
                                <li><i class="fa fa-check-circle"></i>Job 1</li>
                                <li><i class="fa fa-check-circle"></i>Job 2</li>
                                <li><i class="fa fa-check-circle"></i>Job 3</li>
                                <li><i class="fa fa-check-circle"></i>Job 4</li>
                                <li><i class="fa fa-check-circle"></i>Job 5</li>
                                <li><i class="fa fa-check-circle"></i>Job 6</li>
                                <li><i class="fa fa-check-circle"></i>Job 7</li>
                              </ul>
                            </div>
                            <div class="arrs">
                            <i class="fa fa-arrow-down arrw"></i>
                            </div>
                           </div>
                          </div>
                        
                        <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                            <div class="what-dones">
                               <h1>Exterieur</h1>
                                <div class="jobs-details">
                                <ul>
                                  <li><i class="fa fa-check-circle"></i>Job 1</li>
                                  <li><i class="fa fa-check-circle"></i>Job 2</li>
                                  <li><i class="fa fa-check-circle"></i>Job 3</li>
                                  <li><i class="fa fa-check-circle"></i>Job 4</li>
                                  <li><i class="fa fa-check-circle"></i>Job 5</li>
                                  <li><i class="fa fa-check-circle"></i>Job 6</li>
                                  <li><i class="fa fa-check-circle"></i>Job 7</li>
                                </ul>
                              </div>
                              <div class="arrs">
                              <i class="fa fa-arrow-down arrw"></i>
                              </div>
                             </div>
                          </div>
                        
                    </div>
                    <div class="carousel-item">
                      
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                            <div class="what-dones">
                               <h1>Exterieur</h1>
                                <div class="jobs-details">
                                <ul>
                                  <li><i class="fa fa-check-circle"></i>Job 1</li>
                                  <li><i class="fa fa-check-circle"></i>Job 2</li>
                                  <li><i class="fa fa-check-circle"></i>Job 3</li>
                                  <li><i class="fa fa-check-circle"></i>Job 4</li>
                                  <li><i class="fa fa-check-circle"></i>Job 5</li>
                                  <li><i class="fa fa-check-circle"></i>Job 6</li>
                                  <li><i class="fa fa-check-circle"></i>Job 7</li>
                                </ul>
                              </div>
                              <div class="arrs">
                              <i class="fa fa-arrow-down arrw"></i>
                              </div>
                            </div>
                          </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                            <div class="what-dones">
                               <h1>Exterieur</h1>
                                <div class="jobs-details">
                                <ul>
                                  <li><i class="fa fa-check-circle"></i>Job 1</li>
                                  <li><i class="fa fa-check-circle"></i>Job 2</li>
                                  <li><i class="fa fa-check-circle"></i>Job 3</li>
                                  <li><i class="fa fa-check-circle"></i>Job 4</li>
                                  <li><i class="fa fa-check-circle"></i>Job 5</li>
                                  <li><i class="fa fa-check-circle"></i>Job 6</li>
                                  <li><i class="fa fa-check-circle"></i>Job 7</li>
                                </ul>
                              </div>
                              <div class="arrs">
                              <i class="fa fa-arrow-down arrw"></i>
                              </div>
                            </div>
                          </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                            <div class="what-dones">
                               <h1>Exterieur</h1>
                                <div class="jobs-details">
                                <ul>
                                  <li><i class="fa fa-check-circle"></i>Job 1</li>
                                  <li><i class="fa fa-check-circle"></i>Job 2</li>
                                  <li><i class="fa fa-check-circle"></i>Job 3</li>
                                  <li><i class="fa fa-check-circle"></i>Job 4</li>
                                  <li><i class="fa fa-check-circle"></i>Job 5</li>
                                  <li><i class="fa fa-check-circle"></i>Job 6</li>
                                  <li><i class="fa fa-check-circle"></i>Job 7</li>
                                </ul>
                              </div>
                              <div class="arrs">
                              <i class="fa fa-arrow-down arrw"></i>
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

     <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
        <div class="comme">
          <p>Customer’s Comments</p>
          <textarea id="cust_cmt" name="cust_cmt" placeholder="Comment Here"></textarea>
          <input type="submit" value="Next Step" id="qouteStep1Button" >
        </div>
       </div>
     </div>
  </div>
  </div>


<div class="do-you-want">
  <div class="container">
  <h1>Do You Want To  Add A Picture?</h1>
  <p>A Picture Will enhance the accuracy of the  quote.</p>
    <a href="#">Download  <i class="fa fa-download"></i></a>
  </div>
</div>

<div class="backnext">
<div class="container">
     <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
      <div class="invoice-btn job-btn">
          <a href="#" class="ne">Back</a>
          <a href="#" class="ne">View Invoice</a>
        </div>
    </div>
  </div>
</div>
</div>

</section>

</div>
