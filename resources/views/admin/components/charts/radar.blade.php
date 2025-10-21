@extends('layouts.components', ['title' => 'Apex Radar Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Radar Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="basic-radar" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Radar with Polygon-fill</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="radar-polygon" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>



        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Radar – Multiple Series</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="radar-multiple-series" class="apex-charts"></div>
                        <div class="text-center mt-2">
                            <button id="btn-update" class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    @vite(['resources/js/components/apexchart-radar.js'])
@endsection