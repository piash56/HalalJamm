@extends('layouts.components', ['title' => 'Apex Line Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Simple line chart</h4>
                    </div>
                    <div class="card-body">
                        <div dir="ltr">
                            <div id="line-chart" class="apex-charts"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Line with Data Labels</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="line-chart-datalabel" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="col-lg-6">
                    <h4 class="card-title">Zoomable Timeseries</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="line-chart-zoomable" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Line Chart with Annotations</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="line-chart-annotations" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Syncing charts</h4>
                </div>
                <div class="card-body">
                    <div id="line-chart-syncing2"></div>
                    <div dir="ltr">
                        <div id="line-chart-syncing" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gradient Line Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="line-chart-gradient" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Missing / Null values</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="line-chart-missing" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dashed Line Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="line-chart-dashed" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Stepline Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="line-chart-stepline" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Brush Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="chart-line2" class="apex-charts"></div>
                        <div id="chart-line" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Realtime Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="line-chart-realtime" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    </div> <!-- end row -->
@endsection

@section('scripts')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    @vite(['resources/js/components/apexchart-line.js'])
@endsection