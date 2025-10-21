<!-- Page Title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            @isset($subtitle)
                <h4 class="mb-0 fw-semibold">{{ $subtitle }}</h4>

                <ol class="breadcrumb mb-0">
                    @isset($title)
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $title }}</a></li>
                    @endisset
                    <li class="breadcrumb-item active">{{ $subtitle }}</li>
                </ol>
            @endisset
        </div>
    </div>
</div>