@extends('layouts.components', ['title' => 'Apex RadialBar Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic RadialBar Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="basic-radialbar" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Multiple RadialBars</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="multiple-radialbar" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Circle Chart - Custom Angle</h4>
                </div>
                <div class="card-body">
                    <div class="text-center" dir="ltr">
                        <div id="circle-angle-radial" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Circle Chart with Image</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="image-radial" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Stroked Circular Gauge</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="stroked-guage-radial" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-4 anchor" id="gradient">Gradient Circular Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="gradient-chart" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>


        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-4 anchor" id="semi-circle">Semi Circle Gauge</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="semi-circle-gauge" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    @vite(['resources/js/components/apexchart-radialbar.js'])
@endsection