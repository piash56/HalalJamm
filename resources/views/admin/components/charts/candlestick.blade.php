@extends('layouts.components', ['title' => 'Apex Candlestick Chart'])

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Candlestick Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="simple-candlestick" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Combo Candlestick Chart</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="combo-candlestick" class="apex-charts"></div>
                        <div id="combo-bar-candlestick" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Category X-Axis</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="x-axis-candlestick" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>

        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Candlestick with Line</h4>
                </div>
                <div class="card-body">
                    <div dir="ltr">
                        <div id="candlestick-with-line" class="apex-charts"></div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('scripts')
    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.8.17/dayjs.min.js"></script>
    @vite(['resources/js/components/apexchart-candlestick.js'])
@endsection