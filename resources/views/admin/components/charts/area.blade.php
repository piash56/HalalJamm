@extends('layouts.components', ['title' => 'Apex Area Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title ">Basic Area Chart</h5>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="basic-area" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Spline Area</h5>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="spline-area" class="apex-charts"></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <h5 class="card-title">
                            Area Chart - Datetime X-axis
                        </h5>
                        <div class="toolbar apex-toolbar">
                            <button id="one_month" class="btn btn-sm btn-soft-secondary">1M</button>
                            <button id="six_months" class="btn btn-sm btn-soft-secondary">6M</button>
                            <button id="one_year" class="btn btn-sm btn-soft-secondary active">1Y</button>
                            <button id="ytd" class="btn btn-sm btn-soft-secondary">YTD</button>
                            <button id="all" class="btn btn-sm btn-soft-secondary">ALL</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="area-chart-datetime" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Area with Negative Values
                    </h5>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="area-chart-negative" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Selection - Github Style
                    </h5>
                </div>
                <div class="card-body">
                    <div id="area-chart-github" class="apex-charts"></div>
                    <div class="pt-2 pb-2">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img src="/images/users/avatar-2.jpg" class="avatar-xs rounded" alt="file-image">
                            </div>
                            <div class="col ps-0">
                                <a href="javascript:void(0);" class="text-muted fw-bold">FoxPixel</a>
                            </div>
                        </div>
                    </div>
                    <div id="area-chart-github2" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Stacked Area
                    </h5>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="stacked-area" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Irregular TimeSeries
                    </h5>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="area-timeSeries" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Area Chart with Null values
                    </h5>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="area-chart-nullvalues" class="apex-charts"></div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
    <script src="https://apexcharts.com/samples/assets/github-data.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>

    @vite(['resources/js/components/apexchart-area.js'])
@endsection