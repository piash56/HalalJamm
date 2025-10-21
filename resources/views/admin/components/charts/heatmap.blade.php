@extends('layouts.components', ['title' => 'Apex Heatmap Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Heatmap - Single Series</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="basic-heatmap" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Heatmap - Multiple Series</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="multiple-series-heatmap" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Heatmap - Color Range</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="color-range-heatmap" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Heatmap - Range without Shades</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="rounded-heatmap" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->

        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    @vite(['resources/js/components/apexchart-heatmap.js'])
@endsection