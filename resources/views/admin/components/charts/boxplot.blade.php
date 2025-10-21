@extends('layouts.components', ['title' => 'Apex Boxplot Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Boxplot</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="basic-boxplot" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Scatter Boxplot </h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="scatter-boxplot" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    @vite(['resources/js/components/apexchart-boxplot.js'])
@endsection