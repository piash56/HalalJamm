@extends('layouts.components', ['title' => 'Apex Mixed Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 anchor" id="line-column">Line & Column Chart</h4>
                    <div dir="ltr">
                        <div id="line-column-mixed" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Multiple Y-Axis Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="multiple-yaxis-mixed" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Line & Area Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="line-area-mixed" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Line, Column & Area Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="all-mixed" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
    </div> <!-- end row -->
@endsection

@section('scripts')
    @vite(['resources/js/components/apexchart-mixed.js'])
@endsection