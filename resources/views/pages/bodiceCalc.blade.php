@extends('layouts.app')
@section('content')

<div class="conatiner">
  
    <div class="container px-4 bg-primary bg-opacity-25 p-4">

  
      <h2 class="display-8 text-end">All about Bodice</h2>
      
      <hr>
      <br>
    <div class="row gx-5">
      <div class="col-3">

        <form method="POST" action="/skirt">
          @csrf

          
          {{--  START Bust field  --}}
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bust</label>
            <div class="input-group mb-3">
             
              <input type="decimal" step=".1" name="bust" id="bust" class="form-control" value="">
              <span class="input-group-text">cm</span>
            </div>
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text">Bust</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">cm</span>
          </div>
          
          {{-- <div class="row mb-3">
            <div class="input-group mb-3">
              <label for="bust" class="col-sm-2 col-form-label">Bust</label>
              <input type="decimal" step=".1" name="bust" id="bust" class="form-control" value="">
              <span class="input-group-text">cm</span>
            </div>
          </div> --}}
          {{--  END Bust field  --}}

          {{-- START Back length --}}
          {{-- <div class="row mb-3">
            <div class="input-group mb-3">
              <label for="hip" class="col-sm-2 col-form-label">Back length</label>
              <input type="decimal" step=".1" name="back_length" id="back_length" class="form-control" value="">
              <span class="input-group-text">cm</span>
            </div>
          </div> --}}
          {{-- END Back length --}}

          {{-- START Back width field --}}
          {{-- <div class="row mb-3">
            <div class="input-group mb-3">
              <label for="hip_height" class="col-sm-2 col-form-label">Back width</label>
              <input type="decimal" step=".1" name="back_width" id="back_width" class="form-control" value="">
              <span class="input-group-text">cm</span>
            </div>
          </div> --}}
          {{-- END Back width field --}}

          {{-- START Shoulder field --}}
          {{-- <div class="row mb-3">
            <div class="input-group mb-3">
              <label for="skirt_length" class="col-sm-2 col-form-label">Shoulder</label>
              <input type="decimal" step=".1" name="shoulder" id="shoulder" class="form-control" value="">
              <span class="input-group-text">cm</span>
            </div>
          </div> --}}
          {{-- END Shoulder field --}}

          {{-- START Waist field --}}
          {{-- <div class="row mb-3">
            <div class="input-group mb-3">
              <label for="skirt_length" class="col-sm-2 col-form-label">Waist</label>
              <input type="decimal" step=".1" name="waist" id="waist" class="form-control" value="">
              <span class="input-group-text">cm</span>
            </div>
          </div> --}}
          {{-- END Waist field --}}

          {{-- START Hip field --}}
          {{-- <div class="row mb-3">
            <div class="input-group mb-3">
              <label for="skirt_length" class="col-sm-2 col-form-label">Hip</label>
              <input type="decimal" step=".1" name="hip" id="hip" class="form-control" value="">
              <span class="input-group-text">cm</span>
            </div>
          </div> --}}
          {{-- END Hip field --}}

          {{-- START Body rise field  --}}
          {{-- <div class="row mb-3">
            <div class="input-group mb-3">
              <label for="skirt_length" class="col-sm-2 col-form-label">Body rise</label>
              <input type="decimal" step=".1" name="body_rise" id="body_rise" class="form-control" value="">
              <span class="input-group-text">cm</span>
            </div>
          </div> --}}
          {{-- END Body rise field --}}

          <div class="row mb-3">
          <div class="input-group mb-3">
            <span class="input-group-text">Bust Divergence</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">cm</span>
          </div>
          </div>

          
          <button type="submit" class="btn btn-primary">Get Measurments</button>

        </form>
      </div>
      
      <div class="col">

        {{-- <ul class="list-group">
          @foreach ($clients as $client)<li class="list-group-item">{{ $client->name }}</li>
        @endforeach
        </ul> --}}
        <div class="mb-3 d-flex flex-wrap flex-row">
          {{-- @foreach ($clients as $client)<button type="button" onclick="myFunction()" id="btn1" class="btn btn-dark my-1">{{ $client->name }}</button> &nbsp;&nbsp;&nbsp;<br>
          @endforeach --}}
        </div>

      </div>
    </div>
  </div>
</div>
<script src="{{ url('js/main.js') }}"></script>
@endsection