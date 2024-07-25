@extends('layouts.app')
@section('content') 

<div class="conatiner">
<div class="container px-4">
    <div class="row gx-5">
      <div class="col">
        
        <div class="container">
        <div class="row g-3">
         
            <form  class="row g-3" method="POST" action="/client">
              @csrf

            <div class="col-md-6">
              <label for="name" class="form-label">Client name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            
            <div class="col-md-8">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
              <label class="form-check-label" for="female">
                Female
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
              <label class="form-check-label" for="male">
                Male
              </label>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Skirt Block Measurements
                  </button>
                </h2>
                
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <div class="container overflow-hidden text-center">
                     
                      {{-- start waist field --}}
                        <div class="mb-3">
                          <label for="waist" class=" col-form-label d-flex justify-content-start">Waist</label>
                          <div class="input-group">
                            <input type="number" step="0.1" class="form-control" id="waist" name="waist" aria-label="waist" aria-describedby="basic-addon2" >
                            <span class="input-group-text" id="basic-addon2">cm</span>
                          </div>
                        </div>  
                      {{-- end waist field --}}
                      
                      {{-- start hip field --}}
                          <div class="mb-3">
                            <label for="hip" class=" col-form-label d-flex justify-content-start">Hip</label>
                            <div class="input-group">
                              <input type="number" step="0.1" class="form-control" aria-label="hip" aria-describedby="basic-addon2" id="hip" name="hip">
                              <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                          </div>
                      {{-- end hip field --}}
                     
                        <div class="mb-3">
                          <label for="hip_height" class="col-form-label d-flex justify-content-start">Hip Height</label>
                          <div class="input-group">
                            <input type="number" step="0.1" class="form-control" id="hip_height" name="hip_height" aria-label="hip_height" aria-describedby="basic-addon2" >
                            <span class="input-group-text" id="basic-addon2">cm</span>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="length" class="col-form-label d-flex justify-content-start">Skirt Length</label>
                          <div class="input-group">
                            <input type="number" step="0.1" class="form-control" id="length" name="length" aria-label="length" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">cm</span>
                          </div>                      
                        </div>
                     
                      </div>

                  </div>
              
                  </div>
                </div>
              </div>

              {{-- start of bodice measurement --}}
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Bodice Measurement
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <div class="container overflow-hidden text-center">
                      
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Bust</label>
                        <div class="input-group mb-3">
                          <input type="decimaal" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"
                          name="bust" id="bust">
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Back length</label>
                        <div class="input-group mb-3">
                          <input type="decimaal" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"
                          name="back_length" id="back_length">
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Back width</label>
                        <div class="input-group mb-3">
                          <input type="decimaal" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"
                          name="back_width" id="back_width">
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Shoulder</label>
                        <div class="input-group mb-3">
                          <input type="decimaal" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"
                          name="shoulder" id="shoulder">
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Waist</label>
                        <div class="input-group mb-3">
                          <input type="decimaal" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"
                          name="bodice_waist" id="bodice_waist">
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Hip</label>
                        <div class="input-group mb-3">
                          <input type="decimaal" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"
                          name="bodice_hip" id="bodice_hip">
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Body rise</label>
                        <div class="input-group mb-3">
                          <input type="decimaal" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"
                          name="body_rise" id="body_rise">
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Bust to Bust</label>
                        <div class="input-group mb-3">
                          <input type="decimaal" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2"
                          name="bust_to_bust" id="bust_to_bust">
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              {{-- end accordion #2 --}}

              {{-- start accordion #3  --}}
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Trouser Measurement
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">

                    <div class="container overflow-hidden text-center">

                    <div class="row gx-2">
                      <div class="col">
                        
                        <div class="row align-items-left">
                          <div class="input-group mb-2">
                            <div class="col-5"><label for="skirt_length" class=" col-form-label d-flex justify-content-start align-items-end pe-2">Pants length</label></div>
                            <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
                            <span class="input-group-text">cm</span>
                          </div>
                        </div>

                        <div class="row align-items-left">
                          <div class="input-group mb-2">
                            <div class="col-5"><label for="skirt_length" class=" col-form-label d-flex justify-content-start align-items-end pe-2">Inseam</label></div>
                            <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
                            <span class="input-group-text">cm</span>
                          </div>
                        </div>

                        <div class="row align-items-left">
                          <div class="input-group mb-2">
                            <div class="col-5"><label for="skirt_length" class=" col-form-label d-flex justify-content-start align-items-end pe-2">Waist</label></div>
                            <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
                            <span class="input-group-text">cm</span>
                          </div>
                        </div>

                        <div class="row align-items-left">
                          <div class="input-group mb-2">
                            <div class="col-5"><label for="skirt_length" class=" col-form-label d-flex justify-content-start align-items-end pe-2">Hip</label></div>
                            <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
                            <span class="input-group-text">cm</span>
                          </div>
                        </div>

                        <div class="row align-items-left">
                          <div class="input-group mb-2">
                            <div class="col-5"><label for="skirt_length" class=" col-form-label d-flex justify-content-start align-items-end pe-2">Circumference of the Knee</label></div>
                            <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
                            <span class="input-group-text">cm</span>
                          </div>
                        </div>
                        
                        <div class="row align-items-left">
                          <div class="input-group mb-2">
                            <div class="col-5"><label for="skirt_length" class=" col-form-label d-flex justify-content-start align-items-end pe-2">Circumference of the Heel</label></div>
                            <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
                            <span class="input-group-text">cm</span>
                          </div>
                        </div>

                        <div class="row align-items-left">
                          <div class="input-group mb-2">
                            <div class="col-5"><label for="skirt_length" class=" col-form-label d-flex justify-content-start align-items-end pe-2">Body rise</label></div>
                            <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
                            <span class="input-group-text">cm</span>
                          </div>
                        </div>

                        <div class="row align-items-left">
                          <div class="input-group mb-2">
                            <div class="col-5"><label for="skirt_length" class=" col-form-label d-flex justify-content-start align-items-end pe-2">Circumference of the Thigh</label></div>
                            <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
                            <span class="input-group-text">cm</span>
                          </div>
                        </div>


                      </div>
                      
                      
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- end accordion #3  --}}
             
{{-- start accordion #4  --}}
<div class="accordion-item">
  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Dress Measurement
    </button>
  </h2>
  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
    <div class="accordion-body">

      <div class="container overflow-hidden text-center">

      <div class="row gx-2">
        <div class="col">
          
          <div class="mb-3 row align-items-left">
            <div class="input-group mb-2">
              <div class="col-md-3"><label for="skirt_length" class=" col-form-label d-flex justify-content-start align-items-end pe-2">Skirt length</label></div>
              <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
              <span class="input-group-text">cm</span>
            </div>
          </div>
          
        </div>
        
        
      </div>
      </div>
    </div>
  </div>
</div>
{{-- end accordion #4  --}}

            </div>
            
            {{-- <div class="col-md-6 d-flex justify-content-center "> 
                <img src="/img/measurement_skirt.svg" class="img-fluid" alt="Responsive image">
            </div> --}}
                
            
          </div>
            
          <br>

            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br>
            <br>
          </form>
          </div>
        </div>
           {{-- @endforeach --}}

           
      </div>
    </div>
  </div>
</div>

@endsection