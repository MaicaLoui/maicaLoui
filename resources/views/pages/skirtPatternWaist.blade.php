@extends('layouts.app')
@section('content') 

<div class="conatiner">
   
    <div class="container px-4">
      {{-- Buttons [ Basic - Waist - Dart ] --}}
    {{-- <div class="row">
      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="btnradio1">Basic Block</label>
      
        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2">Waist</label>
      
        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Front Darts</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Back Darts</label>
      </div>
    </div> --}}
    <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
      <div class="progress-bar" style="width: 50%"></div>
    </div>
    {{-- End of Buttons code [ Basic - Waist - Dart ] --}}
    
  <br>
  <br>
  <br>
{{-- Buttons [ Basic - Waist - Dart ] --}}
  <div class="row justify-content-between">
    <div class="col-4">
      
      <table class="table table-bordered justify-content-center">
               
           
        <thead>
          <tr>
            <th scope="col"></th>
            <th  class="text-center" scope="col"><h5>cm</h5></th>
            <th  class="text-center" scope="col"><h5>dir.</h5></th>
          </tr>
        </thead>
        <tbody>
         
          <tr>
            <th  class="text-center" scope="row"><h4>7 - 10</h4></th>
            <td  class="text-center"> <h4><span class="badge bg-primary rounded-pill">{{  $skirtPattern['sevenToTen'] }}</span></h4></td>
            <td  class="text-center"><h4><i class="bi bi-arrow-right"></h4></i></td>         
          </tr>
          <tr>
            <th class="text-center" scope="row"><h4>10 - 11</h4></th>
            <td  class="text-center"> <h4><span class="text-center badge bg-primary rounded-pill" >1</span></h4></td>
            <td  class="text-center"><h4><i class=" text-center bi bi-arrow-up"> </h4></i></td>
          </tr>
          <tr>
            <th  class="text-center" scope="row"><h4>7 - 12</h4></th>
            <td  class="text-center"> <h4><span class="badge bg-primary rounded-pill">{{  $skirtPattern['sevenToTwelve'] }}</span></h4></td>
            <td  class="text-center"><h4><i class="bi bi-arrow-left"></h4></i></td>         
          </tr>
          <tr>
            <th  class="text-center" scope="row"><h4>12 - 13</h4></th>
            <td  class="text-center"> <h4><span class="badge bg-primary rounded-pill">1</span></h4></td>
            <td  class="text-center"><h4><i class="bi bi-arrow-up"></h4></i></td>         
          </tr>
        </tbody>
        
      </table>
    </div>
<div class="col-6">
  <div class="p-3 border bg-light">
  <img src="/img/baseSkirtPattern.svg" class="img-fluid" alt="...">

</div>
    

    
   
   
   

  </div>

  
    
  </div>

</div>

</div>

@endsection