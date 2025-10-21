@extends('layouts.components', ['title' => 'Google Maps'])

@section('content')
     <div class="card">
           <div class="card-body">
                 <div class="row g-5">
                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">
                                    Basic Example
                              </h5>
                              <div id="gmaps-basic" class="gmaps"></div>
                       </div>

                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">
                                    Markers Google Map
                              </h5>
                              <div id="gmaps-markers" class="gmaps"></div>
                       </div>
                       <div class="col-lg-6">

                              <h5 class="card-title mb-4">
                                    Street View Panoramas Google Map
                              </h5>
                              <div id="panorama" class="gmaps"></div>
                       </div>
                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">
                                    Google Map Types
                              </h5>
                              <div id="gmaps-types" class="gmaps"></div>
                       </div>
                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">
                                    Ultra Light With Labels
                              </h5>
                              <div id="ultra-light" class="gmaps"></div>
                       </div>
                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">
                                    Dark
                              </h5>
                              <div id="dark" class="gmaps"></div>
                       </div> <!-- end col -->
                 </div>
           </div>
     </div>
@endsection

@section('scripts')
     <!-- Google Maps API -->
     <script src="http://maps.google.com/maps/api/js"></script>
     @vite(['resources/js/components/maps-google.js'])
@endsection