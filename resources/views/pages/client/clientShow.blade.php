@extends('layouts.app')
@section('content') 

<div class="conatiner">
  <div class="container px-4 bg-primary bg-opacity-25 p-4">
      <div class="row gx-5">
        <div class="col">
          
          <div class="container">
          <div class="row g-3">
            <div class="d-flex justify-content-between">
              
               
              
              <div>
                @if($client->has_skirt == 1)
                <span class="badge bg-primary rounded-pill">Skirt</span>
                {{-- <img src="{{ asset('img/has-skirt.svg') }}" class="img-fluid" width="50" height="50"alt="..."> --}}
                @endif                          
                  @if($client->has_bodice == 1)
                  <span class="badge bg-primary rounded-pill">Bodice</span>
                  @endif </td>
                  
              </div>
              
              <div>
                <h3 class="display-8">All about <b>{{ $client->name }}
                  @if($client->gender == "male")
                  <i class="bi bi-gender-male"></i>
                  
                  @endif                          
                    @if($client->gender == "female")
                    <i class="bi bi-gender-female"></i>
                    @endif </td>                
                 </b></h3>
              </div>
             </div>
            
           
            
            <hr>
              {{-- <div class="container border"> --}}
                
              {{-- </div> --}}

              
              <form  class="row g-3" method="POST" action="/client">
                @csrf
  
             
                <div class="row justify-content-start">
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
                       
                          <div class="mb-3">
                            <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Waist</label>
                            <div class="input-group mb-3">
                              <input type="decimaal" step=".1" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="waist" id="waist" value="{{ $client->skirt->waist }}">
                              <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                          </div>  
                          
                        
                        
                            <div class="mb-3">
                              <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Hip</label>
                              <div class="input-group mb-3">
                                <input type="decimaal" step=".1" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="hip" id="hip" value="{{ $client->skirt->hip }}">
                                <span class="input-group-text" id="basic-addon2">cm</span>
                              </div>
                            </div>
                     
                       
                          <div class="mb-3">
                            <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Hip Height</label>
                            <div class="input-group mb-3">
                              <input type="decimaal" step=".1" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="hip_height" id="hip_height" value="{{ $client->skirt->hip_height }}">
                              <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                          </div>
  
                          <div class="mb-3">
                            <label for="exampleFormControlInput1"  class=" col-form-label d-flex justify-content-start align-items-end pe-2">Skirt Length</label>
                            <div class="input-group mb-3">
                              <input type="decimaal" step=".1" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="length" id="length" value="{{ $client->skirt->length }}">
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
                            name="bust" id="bust" value="{{ $client->bodice->bust }}">
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
  
               
              </div>
              
              <div class="col-6">
                <div class="container text-center">
                  <div class="row align-items-start">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          This is some text within a card body.
                        </div>
                      </div>
                    </div>
                    &nbsp;
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          This is some text within a card body.
                        </div>
                      </div>
                    </div>
                    &nbsp;
                    <div class="col-12">
                      One of three columns
                    </div>
                  </div>
                </div>
              </div>
                </div>

              
              
              {{-- <div class="col-md-6 d-flex justify-content-center "> 
                  <img src="/img/measurement_skirt.svg" class="img-fluid" alt="Responsive image">
              </div> --}}
                  
              
            </div>
              
            <br>
  
              <div class="col-12">
                <a class="btn btn-primary" href="/client" role="button"><i class="bi bi-arrow-left"></i> Go Back</a> 
                &nbsp;
                <button type="submit" class="btn btn-primary">Make Change</button>
              </div>
              
            </form>
            </div>
          </div>
             {{-- @endforeach --}}
  
             
        </div>
      </div>
    </div>
    <br>
    <br>

@endsection