@extends('layouts.components', ['title' => 'Apex Column Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Column Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="basic-column" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Column Chart with Datalabels</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="datalabels-column" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Stacked Column Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="stacked-column" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">100% Stacked Column Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="full-stacked-column" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Column with Markers</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="column-with-markers" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Column with Group Label</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="column-with-group-label" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Column Chart with rotated labels & Annotations</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="rotate-labels-column" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Column Chart with negative values</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="negative-value-column" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Distributed Column Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="distributed-column" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Range Column Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="range-column" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title anchor flex-grow-1" id="dynamic">Dynamic Loaded Chart</h4>
                    <div class="flex-shrink-0">
                        <select id="model" class="form-select form-select-sm">
                            <option value="iphone5">iPhone 5</option>
                            <option value="iphone6">iPhone 6</option>
                            <option value="iphone7">iPhone 7</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="chart-year"></div>
                                <div id="chart-quarter"></div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js"></script>
    @vite(['resources/js/components/apexchart-column.js'])
@endsection