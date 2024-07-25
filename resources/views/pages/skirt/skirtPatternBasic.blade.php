@extends('layouts.app')
@section('content')
    <div class="conatiner">

        <div class="container px-4">
            {{-- Buttons [ Basic - Waist - Dart ] --}}
            {{-- <div class="row">
      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked >
        
          <label class="btn btn-outline-primary" for="btnradio1" ><a href="/skirt">Basic Block </a></label> 
       
      
        <input type="radio" href="/skirt" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2" >Waist</label>
      
        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Front Darts</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Back Darts</label>
      </div>
    </div> --}}

            {{-- Buttons [ Basic - Waist - Dart ] --}}
            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100" style="height: 10px">
                <div class="progress-bar" style="width: 25%"></div>
            </div>
            {{-- End of Buttons code [ Basic - Waist - Dart ] --}}

            <br>
            <br>
            <br>

            <div class="row justify-content-between">
                <div class="col-4">

                    <table class="table table-bordered justify-content-center">


                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th class="text-center" scope="col">
                                    <h5>cm</h5>
                                </th>
                                <th class="text-center" scope="col">
                                    <h5>dir.</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th class="text-center" scope="row">
                                    <h4>1 - 3</h4>
                                </th>
                                <td class="text-center">
                                    <h4><span class="badge bg-primary rounded-pill">
                                            {{ $skirtPattern['oneToThree'] }}</span></h4>
                                </td>
                                <td class="text-center">
                                    <h4><i class="bi bi-arrow-down"></h4></i>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">
                                    <h4>1 - 2</h4>
                                </th>
                                <td class="text-center">
                                    <h4><span
                                            class="text-center badge bg-primary rounded-pill">{{ $skirtPattern['oneToTwo'] }}</span>
                                    </h4>
                                </td>
                                <td class="text-center">
                                    <h4><i class=" text-center bi bi-arrow-down"> </h4></i>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">
                                    <h4>1 - 4</h4>
                                </th>
                                <td class="text-center">
                                    <h4><span class="badge bg-primary rounded-pill">{{ $skirtPattern['oneToFour'] }}</span>
                                    </h4>
                                </td>
                                <td class="text-center">
                                    <h4><i class="bi bi-arrow-left"></h4></i>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">
                                    <h4>1 - 7</h4>
                                </th>
                                <td class="text-center">
                                    <h4><span class="badge bg-primary rounded-pill">{{ $skirtPattern['oneToSeven'] }}</span>
                                    </h4>
                                </td>
                                <td class="text-center">
                                    <h4><i class="bi bi-arrow-left"></h4></i>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                    <button onclick="location.href='{{ route('skirt.waist') }}'" class="btn btn-primary">Continue</button>
                    <input type="hidden" name="formValues" value="{{ json_encode(session('formValues')) }}">
                    {{-- <button onclick="location.href='{{ url('waist') }}'" class="btn btn-primary">Continue</button> --}}
                    {{-- <button type="button" href="http://localhost:8000/waist/1" class="btn btn-primary">Continue..</button> --}}
                </div>
                <div class="col-5">
                    <div class="p-3 border bg-light">
                        <img src="/img/baseSkirtPattern.svg" class="img-fluid" alt="...">
                        {{-- <img src="/img/skirtBlock.gif" class="img-fluid" alt="..."> --}}

                    </div>









                </div>



            </div>

        </div>

    </div>
@endsection
