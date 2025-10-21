@extends('layouts.components', ['title' => 'Apex Scatter Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Scatter (XY) Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="basic-scatter" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Scatter Chart - Datetime</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="datetime-scatter" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>


        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Scatter - Images</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="scatter-images" class="apex-charts scatter-images-chart"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    @vite(['resources/js/components/apexchart-scatter.js'])
@endsection