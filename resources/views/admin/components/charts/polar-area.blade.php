@extends('layouts.components', ['title' => 'Apex Polar Area Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Polar Area Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="basic-polar-area" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>


        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Monochrome Polar Area</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="monochrome-polar-area" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    @vite(['resources/js/components/apexchart-polar-area.js'])
@endsection