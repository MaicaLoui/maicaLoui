@extends('layouts.app')
@section('content')
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                {{-- <img src="/img/ILLU1-04.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500" height="500" loading="lazy"> --}}
                <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/ILLU1-04.svg" class="d-block w-100" alt="...">
                        </div>
                        {{-- <div class="carousel-item">
            <img src="/img/ILLU1-02.svg" class="d-block w-100" alt="...">
          </div> --}}

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3" id="h1-container">Maica Loui.</h1>
                <h1 class="display-5 fw lh-1 mb-3" id="h1-container">Handcrafted, home-made masterpieces</h1>
                <p class="lead">
                <p aria-hidden="true">
                    <span class="placeholder col-6"></span>
                </p>

                <a href="" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                </p>

                {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-outline-dark px-4 me-md-2">Primary</button>
        <button type="button" class="btn btn-outline-dark btn-lg px-4">Default</button>
      </div> --}}
                <br>
                <div class="card">
                    <div class="card-header">
                        Fact of the Day
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $phrase }}</p>
                            {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
