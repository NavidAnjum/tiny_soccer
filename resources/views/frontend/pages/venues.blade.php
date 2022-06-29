@extends("frontend.layouts.master")
@section("content")
<main class="container mt-5">
   <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="card p-3">
            <a href="{{ route('page.single.vanue', 1) }}"><img src="https://cdn.pixabay.com/photo/2018/01/29/11/21/stadium-3115889_960_720.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
               <small class="text-muted d-flex flex-row align-items-center">
                  <svg fill="#aeaeae" height="12px" width="12px" class="mb-1 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                     <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                  </svg>
                  <span> Verified</span>
               </small>
               <a href="#" class="card-title h5 mt-1 mb-3 d-block text-dark" style="text-decoration: none;">Diddikicks Norris Green</a>
               <p class="card-text text-muted p-0 m-0">London, UK</p>
               <p class="card-text text-muted p-0 mb-3">12 Sits Available</p>
               <div class="d-flex flex-row align-items-center justify-content-between">
                  <a href="#" class="mr-2">
                     <img class="rounded-circle mr-2" width="50px" src="https://tailwindcss.com/img/jonathan.jpg">
                  </a>
                  <div class="d-flex flex-column">
                     <small><a class="font-weight-bold text-dark" href="#"> Jonathan Reinink</a></small>
                     <small class="text-muted text-end">Coach</small>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
         <div class="card p-3">
            <a href="{{ route('page.single.vanue', 2) }}"><img src="https://cdn.pixabay.com/photo/2018/01/29/11/21/stadium-3115889_960_720.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">
               <small class="text-muted d-flex flex-row align-items-center">
                  <svg fill="#aeaeae" height="12px" width="12px" class="mb-1 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                     <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                  </svg>
                  <span> Verified</span>
               </small>
               <a href="#" class="card-title h5 mt-1 mb-3 d-block text-dark" style="text-decoration: none;">Diddikicks Keighley</a>
               <p class="card-text text-muted p-0 m-0">Netherfield, UK</p>
               <p class="card-text text-muted p-0 mb-3">3 Sits Available</p>
               <div class="d-flex flex-row align-items-center justify-content-between">
                  <a href="#" class="mr-2">
                     <img class="rounded-circle mr-2" width="50px" src="https://tailwindcss.com/img/jonathan.jpg">
                  </a>
                  <div class="d-flex flex-column">
                     <small><a class="font-weight-bold text-dark" href="#"> Denk John</a></small>
                     <small class="text-muted text-end">Coach</small>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection