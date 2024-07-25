@extends('layouts.app')
@section('content') 

<div class="conatiner">
<div class="container px-4">
    <div class="row gx-5">
      <div class="col">
        
        <form>
          @csrf

        {{-- waist field     --}}
        <div class="input-group mb-3">
            <div class="input-group mb-3">
                <label for="waist" class="col-sm-2 col-form-label">Waist</label>
                <input type="decimal" step=".1"  name="waist" id="waist" class="form-control" aria-label="">
                <span class="input-group-text">cm</span>
              </div>
        </div>
        {{-- Hip field --}}
            <div class="row mb-3">
                <div class="input-group mb-3">
                    <label for="hip" class="col-sm-2 col-form-label">Hip</label>
                    <input type="decimal" name="hip" id="hip" class="form-control" aria-label="">
                    <span class="input-group-text">cm</span>
                  </div>
              </div>
              {{-- Hip Height field --}}
              <div class="row mb-3">
                <div class="input-group mb-3">
                    <label for="hip_height" class="col-sm-2 col-form-label">Hip Height</label>
                    <input type="decimal" name="hip_height" id="hip_height" class="form-control" aria-label="">
                    <span class="input-group-text">cm</span>
                  </div>
              </div>
              <div class="row mb-3">
                <div class="input-group mb-3">
                    <label for="skirt_length" class="col-sm-2 col-form-label">Skirt Length</label>
                    <input type="decimal" name="skirt_length" id="skirt_length" class="form-control" aria-label="">
                    <span class="input-group-text">cm</span>
                  </div>
              </div>            
            
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
      </div>
      {{-- <div class="col">
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Pattern</li>
              <li class="list-group-item">Steps</li>
              <li class="list-group-item">A third item</li>
            </ul>
          </div>
      </div> --}}
      <div class="col">
        {{-- @foreach ($data as $result) --}}
      <table class="table table-bordered">
        
        <thead>
          <tr>
            <th scope="col">cm</th>
            <th scope="col">1/2</th>
            <th scope="col">1/4</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Waist</th>
            <td>{{ round($data->waist*0.5,1,PHP_ROUND_HALF_UP)}}</td>
            <td>{{ round($data->waist*0.25,1,PHP_ROUND_HALF_UP)}}</td>
            
          </tr>
          <tr>
            <th scope="row">Hip</th>
            <td>{{ round($data->hip*0.5,1,PHP_ROUND_HALF_UP)}}</td>
            <td>{{ round($data->hip*0.5,1,PHP_ROUND_HALF_UP)}}</td>
            
          </tr>
          
        </tbody>
      </table>
      {{-- @endforeach --}}
      </div>
    </div>
  </div>
</div>

@endsection
