@extends('layouts.app')
@section('content') 
<div class="container px-4">


  
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <br>
      <br>
    <div class="row gy-5">
      
      <div class="col-6">
        <div class="card" style="width: 18rem;">
          <ul class="list-group">
            
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <h4>1 - 2 <i class="bi bi-arrow-down"></i></h4>
              <h4><span class="badge bg-primary rounded-pill">{{  $data->oneToTwo }}</span></h4>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <h4>1 - 3  <i class="bi bi-arrow-down"></i></h4>
              <h4><span class="badge bg-primary rounded-pill">{{ $data->oneToThree }}</span></h4>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <h4>1 -7 <i class="bi bi-arrow-left"></i></h4>
              <h4><span class="badge bg-primary rounded-pill">{{ $data->oneToSeven }}</span></h4>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <h4>1 - 4 <i class="bi bi-arrow-left"></i></h4>
              <h4><span class="badge bg-primary rounded-pill">{{  $data->oneToFour }}</span></h4>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <h4>2 - 5 <i class="bi bi-arrow-left"></i></h4>
              <h4><span class="badge bg-primary rounded-pill">{{  $data->oneToFour }}</span></h4>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <h4>3 - 6 <i class="bi bi-arrow-left"></i></h4>
              <h4><span class="badge bg-primary rounded-pill">{{  $data->oneToFour }}</span></h4>
            </li>
           
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <h4>4 -6 <i class="bi bi-arrow-down"></i></h4>
              <h4><span class="badge bg-primary rounded-pill">{{ $data->oneToThree }}</span></h4>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <h4>7 -9 <i class="bi bi-arrow-down"></i></h4>
              {{-- <h4><span class="badge bg-primary rounded-pill">{{ $data->sevenToNine }}</span></h4> --}}
            </li>
            
          </ul>
          </div>
      </div>

      <div class="col">
        <div class="p-3 border bg-light">
            <img src="/img/skirtBlock.gif" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
    <a class="btn btn-primary" href="/skirt" role="button">Link</a>
    {{-- <button type="button" href="/skirt" class="btn btn-primary">Front</button> --}}
    
  </div>

@endsection