@extends('layouts.app')
@section('content') 

<div class="conatiner">
<div class="container px-4 bg-primary bg-opacity-25 p-4">

  
  <h2 class="display-8 text-end">All about skirt</h2>
  
  <hr>
  <br>
  {{-- <div class="row">
    <div class="col mb-4">
    <button type="button" class="btn btn-dark">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    </div>
  </div> --}}
  {{-- <div class="d-flex flex-row-reverse">
    <div class="p-2">Flex item 1</div>
    <div class="p-2">Flex item 2</div>
    <div class="p-2">Flex item 3</div>
  </div> --}}
    <div class="row gx-5">
      <div class="col-5">
        
        <form method="POST" action="{{ route('skirt.pattern') }}">
          @csrf
          
                     
            
              
             <input type="number"   name="id" id="id" class="form-control" aria-label="" 
             value="" hidden> 
             
             
        {{-- waist field     --}}
        <div class="input-group mb-3">
            <div class="input-group mb-3">
                <label for="waist" class="col-sm-2 col-form-label me-4 ">Waist</label>
                <input type="decimal" step=".1"  name="waist" id="waist" class="form-control" aria-label="" 
                value="">
                <span class="input-group-text">cm</span>
              </div>
        </div>
        {{-- Hip field --}}
            <div class="row mb-3">
                <div class="input-group mb-3">
                    <label for="hip" class="col-sm-2 col-form-label me-4">Hip</label>
                    <input type="decimal" name="hip" id="hip" class="form-control" aria-label=""
                    value="">
                    <span class="input-group-text">cm</span>
                  </div>
              </div>
              {{-- Hip Height field --}}
              <div class="row mb-3">
                <div class="input-group mb-3">
                    <label for="hipHeight" class="col-sm-2 col-form-label me-4">Hip Height</label>
                    <input type="decimal" name="hipHeight" id="hip_height" class="form-control" aria-label=""
                    value="">
                    <span class="input-group-text">cm</span>
                  </div>
              </div>
              <div class="row mb-3">
                <div class="input-group mb-3">
                    <label for="skirtLength" class="col-sm-2 col-form-label me-4">Skirt Length</label>
                    <input type="decimal" name="skirtLength" id="length" class="form-control" aria-label=""
                    value="">
                    <span class="input-group-text">cm</span>
                  </div>
              </div>            
            
            {{-- <button type="submit" class="btn btn-primary">Get Measurments</button> --}}
           
          
          
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
      
      <div class="col-5">
        
        {{-- <ul class="list-group">
          @foreach ($clients as $client)<li class="list-group-item">{{ $client->name }}</li>
          @endforeach
        </ul> --}}

        {{-- <div class="mb-3 d-flex flex-wrap flex-row">
          @foreach ($clients as $client)<button type="button" onclick="myFunction()" id="btn1" class="btn btn-dark my-1">{{ $client->name }}</button> &nbsp;&nbsp;&nbsp;<br>
          @endforeach
        </div> --}}
        <div class="mb-3 d-flex flex-wrap flex-row">
        <div id="buttonsContainer"></div>&nbsp;&nbsp;&nbsp;
      </div> 
        <script type="text/javascript">

           var data = @json($skirts);
          //var data2 = @json($skirts);
          data.forEach(function(i){
            let btn = document.createElement('button');
            btn.className = 'btn btn-dark my-1 ';
            btn.style.margin = "5px";
            // let space = document.createElement("br");
                  //const button = document.createElement("button");
                  btn.innerText = i['client']["name"];
                
                  function someFunc(index){
                      btn.addEventListener("click", function(){
                        document.getElementById('id').value = index["id"];
                          document.getElementById('waist').value = index["waist"];
                          document.getElementById('hip').value = index["hip"];
                          document.getElementById('hip_height').value = index["hip_height"];
                          document.getElementById('length').value = index["length"];
                          
                          console.log(index);
                      })
                  }
                  someFunc(i);

                  buttonsContainer.appendChild(btn);
                  // buttonsContainer.appendChild(space);
                  
              })
              // function changeUrl() {
              //   let id = document.getElementById('id').value;
  
              //   let target	= document.getElementById('myAnchor');
  
              //   let href = '/base/' + id;
              //   target.href = href;
              //   console.log(target.href);
              // }

//               function changeUrl() {
//   let id = document.getElementById('id').value;
//   let url = '/base/' + id;
//   console.log(url);
//   location.href = url;
// }

// document.querySelector('form').addEventListener('submit', function(event) {
//   event.preventDefault();
//   changeUrl();
// });
              
              
            // myFunction($client)
            </script>
        
      </div>
      <div class="col-2">
        <div class="list-group">
          @foreach ($clients as $client)
         
         
            @endforeach
            {{-- <a href="{{ route('base', $client->id) }}">sds</a> --}}
            
            
          {{-- <button target="_blank" href="" onclick="changeUrl()" id="myAnchor" class="btn btn-primary">Pattern Guide</button> --}}
          {{-- <button id="myButton" type="submit" onclick="changeUrl()" class="list-group-item list-group-item-action text-center">Pattern Guide</button> --}}
          {{-- <a  href="" onclick="changeUrl()" id="myAnchor">map</a> --}}
          <button type="submit" class="list-group-item list-group-item-action text-center">Pattern Guide</button>
          <button type="button" class="list-group-item list-group-item-action text-center">Material Guide</button>
          <button type="button" class="list-group-item list-group-item-action text-center">Sewing Instructions</button>
          
          {{-- <a href="#" class="list-group-item list-group-item-action">A second link item</a>
          <a href="#" class="list-group-item list-group-item-action">A third link item</a>
          <a href="#" class="list-group-item list-group-item-action">A fourth link item</a> --}}
          
          
        </div>
      </div>
    </div>
  </form>
  </div>
</div>
<script src="{{ url('js/main.js') }}"></script>
@endsection
