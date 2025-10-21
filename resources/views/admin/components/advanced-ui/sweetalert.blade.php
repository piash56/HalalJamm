@extends('layouts.components', ['title' => 'Sweet Alert'])

@section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css'])
@endsection


@section('content')
     <div class="card">
           <div class="card-body">
                 <div class="row g-5">
                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Basic
                              </h5>
                              <button type="button" class="btn btn-primary" id="sweetalert-basic">Click me</button>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    A Title with a Text Under
                              </h5>
                              <button type="button" class="btn btn-primary" id="sweetalert-title">Click me</button>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Message
                              </h5>
                              <div class="hstack gap-2">
                                    <button type="button" class="btn btn-success" id="sweetalert-success">Success</button>
                                    <button type="button" class="btn btn-warning" id="sweetalert-warning">Warning</button>
                                    <button type="button" class="btn btn-info" id="sweetalert-info">Info</button>
                                    <button type="button" class="btn btn-danger" id="sweetalert-error">Error</button>
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Long content Images Message
                              </h5>
                              <button type="button" class="btn btn-primary" id="sweetalert-longcontent">Click me</button>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Parameter
                              </h5>
                              <button type="button" class="btn btn-primary" id="sweetalert-params">Click me</button>
                       </div> <!-- end col -->
                 </div> <!-- end row -->
           </div>
     </div>
@endsection

@section('scripts')
     @vite(['resources/js/components/extended-sweetalert.js'])
@endsection