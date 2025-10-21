@extends('layouts.components', ['title' => 'Flatpicker'])

@section('css')
    @vite(['node_modules/flatpickr/dist/flatpickr.min.css'])
@endsection

@section('content')
     <div class="card">
           <div class="card-body">
                 <div class="row g-5">
                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Basic
                              </h5>
                              <div class="w-50">
                                    <input type="text" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    DateTime
                              </h5>
                              <div class="w-50 ">
                                    <input type="text" id="datetime-datepicker" class="form-control" placeholder="Date and Time">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Human-friendly Dates
                              </h5>
                              <div class="w-50">
                                    <input type="text" id="humanfd-datepicker" class="form-control" placeholder="October 9, 2018">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    MinDate and MaxDate
                              </h5>

                              <div class="w-50">
                                    <input type="text" id="minmax-datepicker" class="form-control" placeholder="mindate - maxdate">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Disabling dates
                              </h5>

                              <div class="w-50">
                                    <input type="text" id="disable-datepicker" class="form-control" placeholder="Disabling dates">
                              </div>
                       </div>
                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Selecting multiple dates
                              </h5>
                              <div class="w-50">
                                    <input type="text" id="multiple-datepicker" class="form-control" placeholder="Multiple dates">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Selecting multiple dates - Conjunction
                              </h5>
                              <div class="w-50">
                                    <input type="text" id="conjunction-datepicker" class="form-control" placeholder="2018-10-10 :: 2018-10-11">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Inline Calendar
                              </h5>
                              <div class="w-50">
                                    <input type="text" id="inline-datepicker" class="form-control" placeholder="Inline calendar">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Range Calendar
                              </h5>
                              <div class="w-50">
                                    <input type="text" id="range-datepicker" class="form-control" placeholder="2018-10-03 to 2018-10-10">
                              </div>

                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Basic Timepicker
                              </h5>
                              <div class="w-50">
                                    <input type="text" id="basic-timepicker" class="form-control" placeholder="Basic timepicker">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    24-hour Time Picker
                              </h5>

                              <div class="w-50">
                                    <input type="text" id="24hours-timepicker" class="form-control" placeholder="16:21">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Preloading Time
                              </h5>

                              <div class="w-50 ">
                                    <input type="text" id="preloading-timepicker" class="form-control" placeholder="Pick a time">
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Time Picker w/ Limits
                              </h5>
                              <div class="w-50">
                                    <input type="text" id="minmax-timepicker" class="form-control" placeholder="Limits">
                              </div>
                       </div><!-- end col -->
                 </div> <!-- end row -->
           </div>
     </div>
@endsection

@section('scripts')
     @vite(['resources/js/components/form-flatepicker.js'])
@endsection