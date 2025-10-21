@extends('layouts.components', ['title' => 'Toastify'])

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row g-5">
                <div class="col-lg-12">
                    <h5 class="card-title mb-4">
                        Basic Toastify JS Example
                    </h5>
                    <div class="hstack flex-wrap gap-2">
                        <button type="button" data-toast data-toast-text="Welcome Back! This is a Toast Notification" data-toast-gravity="top" data-toast-position="right" data-toast-className="primary" data-toast-duration="3000" data-toast-close="close" data-toast-style="style" class="btn btn-light w-xs">
                            Default
                        </button>

                        <button type="button" data-toast data-toast-text="Your application was successfully sent" data-toast-gravity="top" data-toast-position="center" data-toast-className="success" data-toast-duration="3000" class="btn btn-light w-xs">
                            Success
                        </button>

                        <button type="button" data-toast data-toast-text="Warning ! Something went wrong try again" data-toast-gravity="top" data-toast-position="center" data-toast-className="warning" data-toast-duration="3000" class="btn btn-light w-xs">
                            Warning
                        </button>

                        <button type="button" data-toast data-toast-text="Error ! An error occurred." data-toast-gravity="top" data-toast-position="center" data-toast-className="danger" data-toast-duration="3000" class="btn btn-light w-xs">
                            Error
                        </button>
                    </div>
                </div>

                <div class="col-lg-12">
                    <h5 class="card-title mb-4">
                        Display Position Example
                    </h5>
                    <div class="hstack flex-wrap gap-2">
                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification" data-toast-gravity="top" data-toast-position="left" data-toast-duration="3000" data-toast-close="close" class="btn btn-light w-xs">
                            Top Left
                        </button>

                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification" data-toast-gravity="top" data-toast-position="center" data-toast-duration="3000" data-toast-close="close" class="btn btn-light w-xs">
                            Top Center
                        </button>

                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" data-toast-close="close" class="btn btn-light w-xs">
                            Top Right
                        </button>

                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification" data-toast-gravity="bottom" data-toast-position="left" data-toast-duration="3000" data-toast-close="close" class="btn btn-light w-xs">
                            Bottom Left
                        </button>

                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification" data-toast-gravity="bottom" data-toast-position="center" data-toast-duration="3000" data-toast-close="close" class="btn btn-light w-xs">
                            Bottom Center
                        </button>

                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification" data-toast-gravity="bottom" data-toast-position="right" data-toast-duration="3000" data-toast-close="close" class="btn btn-light w-xs">
                            Bottom Right
                        </button>
                    </div>
                </div>

                <div class="col-lg-12">
                    <h5 class="card-title mb-4">
                        Offset, Close Button & Duration Example
                    </h5>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" data-toast-offset data-toast-close="close" class="btn btn-light w-xs">
                            Offset Position
                        </button>

                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification" data-toast-position="right" data-toast-duration="3000" data-toast-close="close" class="btn btn-light w-xs">
                            Close icon Display
                        </button>

                        <button type="button" data-toast data-toast-text="Toast Duration 5s" data-toast-gravity="top" data-toast-position="right" data-toast-duration="5000" class="btn btn-light w-xs">
                            Duration
                        </button>
                    </div>
                </div><!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
@endsection