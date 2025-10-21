@extends('layouts.components', ['title' => 'Apex Bubble Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Bubble Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="simple-bubble" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">3D Bubble Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="second-bubble" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
    </div> <!-- end row -->
@endsection

@section('scripts')
    @vite(['resources/js/components/apexchart-bubble.js'])
@endsection