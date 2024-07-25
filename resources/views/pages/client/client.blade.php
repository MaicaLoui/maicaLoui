@extends('layouts.app')
@section('content') 
<div class="conatiner">
    <div class="container">
       {{-- <div class="row ">
        <div class="col-8">
        <h1 class="display-8">All about skirt</h1>
        </div>
        <div class="col-4">
          <button type="submit" class="btn btn-primary ">Get Measurments</button>
        </div>
       </div> --}}
       
       <div class="d-flex justify-content-between">
        <h2 class="display-8">All about the clients</h2>
        <div>
          <a class="btn btn-primary" href="/newClient" role="button"><i class="bi bi-person-plus lg"></i></a>
        </div>
       </div>
      <hr>
      {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js">
        $('table tr').click(function() {
            var clientId = $(this).attr('id').split('-')[1];
            window.location.href = '/client/' + clientId;
            dd(clientId);
        });
      </script> --}}
            <table class="table table-hover">
                <thead>
                  <tr>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Has measurments of</th>
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($clients as $client)
                    <tr id="client-{{ $client->id }}">
                    
                    <td><a class="btn btn-primary btn-sm" href="{{ url('client/' . $client->id) }}" role="button"> {{ $client->name }}</a></td>
                    <td>{{ $client->gender }}</td>
                    <td>
                    @if($client->has_skirt == 1)
                    <span class="badge bg-primary rounded-pill">Skirt</span>
                    @endif                          
                      @if($client->has_bodice == 1)
                      <span class="badge bg-primary rounded-pill">Bodice</span>
                      @endif </td>
                      {{-- <button type="button" class="btn btn-primary rounded-pill"> skirt </button> --}}
                    
                   
                   
                  </tr>
                 
                  @endforeach
                </tbody>
              </table>
       
    </div>

</div>

@endsection