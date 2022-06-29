@extends("frontend.layouts.master")
@section("content")
<main class="container mt-5">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
     <li class="nav-item" role="presentation">
       <button class="nav-link active" id="dids-tab" data-bs-toggle="tab" data-bs-target="#dids-tab-pane" type="button" role="tab" aria-controls="dids-tab-pane" aria-selected="true">
          Dids 18m - 2.5yrs
       </button>
     </li>
     <li class="nav-item" role="presentation">
       <button class="nav-link" id="mids-tab" data-bs-toggle="tab" data-bs-target="#mids-tab-pane" type="button" role="tab" aria-controls="mids-tab-pane" aria-selected="false">
          Mids 2.5 - 3.5yrs
       </button>
     </li>
     <li class="nav-item" role="presentation">
       <button class="nav-link" id="bigs-tab" data-bs-toggle="tab" data-bs-target="#bigs-tab-pane" type="button" role="tab" aria-controls="bigs-tab-pane" aria-selected="false">
          Bigs 3.5 - 5yrs
       </button>
     </li>
   </ul>
   <div class="tab-content" id="myTabContent">
     <div class="tab-pane fade show active" id="dids-tab-pane" role="tabpanel" aria-labelledby="dids-tab" tabindex="0">
        <div class="table-responsive">
           <table class="table v-middle">
              <thead>
                 <tr>
                    <th>Where</th>
                    <th>When</th>
                    <th>Time</th>
                    <th>Age</th>
                    <th></th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <td width="40%">
                       <div class="p-2">
                          <p><b>Croxteth Dids - Stadium</b></p>
                          <p>
                           <b>Location</b>: Diddikicks® Croxteth , <br>
                           The De La Salle Academy Carr Lane East, <br>
                           Croxteth Liverpool L11 4SG
                           </p>

                          <div class="mt-2">
                             <b>Cost: FREE Trial</b>
                             <p>
                              Followed by £27.99 / month
                              +£25.99 joining fee.
                              (Includes your kit, football, water bottle, backpack, sticker chart & delivery)</p>
                          </div>
                       </div>
                    </td>
                    <td width="15%" class="text-center">
                        <p class="m-0">Sundays</p>
                        <p class="m-0">45 Minute Class</p>
                    </td>
                    <td width="15%" class="text-center">
                       09:55
                    </td>
                    <td width="15%" class="text-center">
                       <p>18m-2.5yrs</p>
                       <p>18m-2.5yrs</p>
                    </td>
                    <td class="text-center">
                       <a href="{{route('page.register.vanue')}}?venueId=1&stadiumId=5" class="btn btn-primary">Register</a>
                       <p>Please note there is a short waiting list at this class.</p>
                    </td>
                 </tr>
              </tbody>
           </table>
        </div>
     </div>
     <div class="tab-pane fade" id="mids-tab-pane" role="tabpanel" aria-labelledby="mids-tab" tabindex="0">
        <div class="table-responsive">
           <table class="table v-middle">
              <thead>
                 <tr>
                    <th>Where</th>
                    <th>When</th>
                    <th>Time</th>
                    <th>Age</th>
                    <th></th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <td width="40%">
                       <div class="p-2">
                          <p><b>Croxteth Dids - Stadium</b></p>
                          <p>
                           <b>Location</b>: Diddikicks® Croxteth , <br>
                           The De La Salle Academy Carr Lane East, <br>
                           Croxteth Liverpool L11 4SG
                           </p>

                          <div class="mt-2">
                             <b>Cost: FREE Trial</b>
                             <p>
                              Followed by £27.99 / month
                              +£25.99 joining fee.
                              (Includes your kit, football, water bottle, backpack, sticker chart & delivery)</p>
                          </div>
                       </div>
                    </td>
                    <td width="15%" class="text-center">
                        <p class="m-0">Sundays</p>
                        <p class="m-0">45 Minute Class</p>
                    </td>
                    <td width="15%" class="text-center">
                       09:55
                    </td>
                    <td width="15%" class="text-center">
                       <p>18m-2.5yrs</p>
                       <p>18m-2.5yrs</p>
                    </td>
                    <td class="text-center">
                       <a href="" class="btn btn-primary">Register</a>
                       <p>Please note there is a short waiting list at this class.</p>
                    </td>
                 </tr>
              </tbody>
           </table>
        </div>
     </div>
     <div class="tab-pane fade" id="bigs-tab-pane" role="tabpanel" aria-labelledby="bigs-tab" tabindex="0">
        <div class="table-responsive">
           <table class="table v-middle">
              <thead>
                 <tr>
                    <th>Where</th>
                    <th>When</th>
                    <th>Time</th>
                    <th>Age</th>
                    <th></th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <td width="40%">
                       <div class="p-2">
                          <p><b>Croxteth Dids - Stadium</b></p>
                          <p>
                           <b>Location</b>: Diddikicks® Croxteth , <br>
                           The De La Salle Academy Carr Lane East, <br>
                           Croxteth Liverpool L11 4SG
                           </p>

                          <div class="mt-2">
                             <b>Cost: FREE Trial</b>
                             <p>
                              Followed by £27.99 / month
                              +£25.99 joining fee.
                              (Includes your kit, football, water bottle, backpack, sticker chart & delivery)</p>
                          </div>
                       </div>
                    </td>
                    <td width="15%" class="text-center">
                        <p class="m-0">Sundays</p>
                        <p class="m-0">45 Minute Class</p>
                    </td>
                    <td width="15%" class="text-center">
                       09:55
                    </td>
                    <td width="15%" class="text-center">
                       <p>18m-2.5yrs</p>
                       <p>18m-2.5yrs</p>
                    </td>
                    <td class="text-center">
                       <a href="" class="btn btn-primary">Register</a>
                       <p>Please note there is a short waiting list at this class.</p>
                    </td>
                 </tr>
              </tbody>
           </table>
        </div>
     </div>
   </div>
</main>
@endsection