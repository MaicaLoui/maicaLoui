@extends('layouts.app')
@section('content') 

<div class="conatiner">
    @foreach ($data as $result)
    <div class="container px-4">
    <div class="row">
    <div class="col">
      <table class="table table-bordered ">
               
           
        <thead>
          <tr>
            <th scope="col">cm</th>
            <th scope="col">1</th>
            <th scope="col">1/2</th>
            <th scope="col">1/4</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Waist</th>
            <td>{{ $result->waist }}</td>
            <td>{{ $result->waist*0.5 }}</td>
            <td>{{ $result->waist*0.25 }}</td>
            
          </tr>
          <tr>
            <th scope="row">Hip</th>
            <td>{{ $result->hip }}</td>
            <td>{{ $result->hip*0.5 }}</td>
            <td>{{ $result->hip*0.25 }}</td>
            
          </tr>

          <tr>
              <th scope="row">Hip Height</th>
              <td>{{ $result->hip_height }}</td>
            </tr>
          
            <tr>
              <th scope="row">Skirt Length</th>
              <td>{{ $result->skirt_length }}</td>
              
              
            </tr>
        </tbody>
        
      </table>
    </div>
    <div class="col">
      <table class="table table-bordered ">
               
           
        <thead>
          <tr>
            <th scope="col">cm</th>
            <th scope="col">-</th>
            
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">A</th>
            <td>{{ ($result->hip*0.5)-($result->waist*0.5) }}</td>
           
            
          </tr>
          <tr>
            <th scope="row">B</th>
            <td>{{ $result->hip }}</td>
            
            
          </tr>

          <tr>
              <th scope="row">C</th>
              <td>{{ $result->hip_height }}</td>
            </tr>
          
           
        </tbody>
        
      </table>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-3">
      <h3>Basic Block</h3>
      <table class="table table-bordered ">
               
           
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">cm</th>
                      
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1 - 2 = HH</th>
            <td>{{ $result->hip_height }}</td>
                      
          </tr>
          <tr>
            <th scope="row">1 - 3 = LS</th>
            <td>{{ $result->skirt_length }}</td>
                      
          </tr>

          <tr>
              <th scope="row">1 - 4 = ½ H </th>
              <td>{{ $result->hip_height }}</td>
            </tr>
          
            <tr>
              <th scope="row">1 - 7 = ¼ H</th>
              <td>{{ $result->skirt_length }}</td>        
            </tr>
        </tbody>
        
      </table>
    </div>

    <div class="col-3">
      <h3>Waist</h3>
      <table class="table table-bordered ">
               
           
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">cm</th>
                      
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1 - 2 = HH</th>
            <td>{{ $result->hip_height }}</td>
                      
          </tr>
          <tr>
            <th scope="row">1 - 3 = LS</th>
            <td>{{ $result->skirt_length }}</td>
                      
          </tr>

          <tr>
              <th scope="row">1 - 4 = ½ H </th>
              <td>{{ $result->hip_height }}</td>
            </tr>
          
            <tr>
              <th scope="row">1 - 7 = ¼ H</th>
              <td>{{ $result->skirt_length }}</td>        
            </tr>
        </tbody>
        
      </table>
    </div>
   

    <div class="col-3">
      <h3>Waist</h3>
      <table class="table table-bordered ">
               
           
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">cm</th>
                      
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1 - 2 = HH</th>
            <td>{{ $result->hip_height }}</td>
                      
          </tr>
          <tr>
            <th scope="row">1 - 3 = LS</th>
            <td>{{ $result->skirt_length }}</td>
                      
          </tr>

          <tr>
              <th scope="row">1 - 4 = ½ H </th>
              <td>{{ $result->hip_height }}</td>
            </tr>
          
            <tr>
              <th scope="row">1 - 7 = ¼ H</th>
              <td>{{ $result->skirt_length }}</td>        
            </tr>
        </tbody>
        
      </table>
    </div>
   
    <div class="col-3">
      <h3>Waist</h3>
      <table class="table table-bordered ">
               
           
        <thead>
          <tr>
            <th scope="col"></th>
            <th class="text-center" scope="col">cm</th>
                      
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1 - 2 = HH</th>
            <td>{{ $result->hip_height }}</td>
                      
          </tr>
          <tr>
            <th scope="row">1 - 3 = LS</th>
            <td>{{ $result->skirt_length }}</td>
                      
          </tr>

          <tr>
              <th scope="row">1 - 4 = ½ H </th>
              <td>{{ $result->hip_height }}</td>
            </tr>
          
            <tr>
              <th scope="row">1 - 7 = ¼ H</th>
              <td>{{ $result->skirt_length }}</td>        
            </tr>
        </tbody>
        
      </table>
    </div>
   

  </div>

  
    
  </div>

</div>
@endforeach
</div>

@endsection