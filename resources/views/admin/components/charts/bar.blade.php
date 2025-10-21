@extends('layouts.components', ['title' => 'Apex Bar Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Basic Bar Chart
                    </h5>
                </div>
                <div class="card-body">
                    <div id="basic-bar" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Grouped Bar Chart
                    </h5>
                </div>
                <div class="card-body">
                    <div id="grouped-bar" class="apex-charts text-white"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Stacked Bar Chart
                    </h5>
                </div>
                <div class="card-body">
                    <div id="stacked-bar" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        100% Stacked Bar Chart
                    </h5>
                </div>
                <div class="card-body">
                    <div id="full-stacked-bar" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Bar with Negative Values
                    </h5>
                </div>
                <div class="card-body">
                    <div id="negative-bar" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Reversed Bar Chart
                    </h5>
                </div>
                <div class="card-body">
                    <div id="reversed-bar" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Bar with Image Fill
                    </h5>
                </div>
                <div class="card-body">
                    <div id="image-fill-bar" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Custom DataLabels Bar
                    </h5>
                </div>
                <div class="card-body">
                    <div id="datalables-bar" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Patterned Bar Chart
                    </h5>
                </div>
                <div class="card-body">
                    <div id="pattern-bar" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Bar with Markers
                    </h5>
                </div>
                <div class="card-body">
                    <div id="bar-markers" class="apex-charts"></div>
                </div>
            </div>
        </div><!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    @vite(['resources/js/components/apexchart-bar.js'])
@endsection