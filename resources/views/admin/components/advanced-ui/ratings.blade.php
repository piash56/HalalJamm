@extends('layouts.components', ['title' => 'Ratings'])

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row g-5">
                <div class="col-lg-12">
                    <h5 class="card-title mb-4">
                        Basic Rater Example
                    </h5>
                    <div id="basic-rater" dir="ltr"></div>
                </div>

                <div class="col-lg-12">
                    <h5 class="card-title mb-4">
                        Rater with Step Example
                    </h5>
                    <div id="rater-step" dir="ltr"></div>
                </div>

                <div class="col-lg-12">
                    <h5 class="card-title mb-4">
                        Custom Messages Example
                    </h5>
                    <div id="rater-message" dir="ltr"></div>
                </div>

                <div class="col-lg-12">
                    <h5 class="card-title mb-4">
                        ReadOnly Example
                    </h5>
                    <div id="rater-unlimitedstar" dir="ltr"></div>
                </div>

                <div class="col-lg-12">
                    <h5 class="card-title mb-4">
                        On Hover Event Example
                    </h5>
                    <div dir="ltr">
                        <div id="rater-onhover" class="align-middle"></div>
                        <span class="ratingnum badge bg-info align-middle ms-2"></span>
                    </div>
                </div>

                <div class="col-lg-12">
                    <h5 class="card-title mb-4">
                        Clear/Reset Rater Example
                    </h5>
                    <div dir="ltr">
                        <div id="raterreset" class="align-middle"></div>
                        <span class="clear-rating"></span>
                        <button id="raterreset-button" class="btn btn-light btn-sm ms-2">Reset</button>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </div>
@endsection

@section('scripts')
    @vite(['resources/js/components/extended-rating.js'])
@endsection