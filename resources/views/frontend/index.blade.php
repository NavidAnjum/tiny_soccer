@extends("frontend.layouts.master")

@section("content")
    <main>
      <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/frontend/images/slider3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/assets/frontend/images/slider2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/assets/frontend/images/slider1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </main>
@endsection
    