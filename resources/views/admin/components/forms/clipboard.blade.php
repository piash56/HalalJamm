@extends('layouts.components', ['title' => 'Clipboard'])

@section('content')
     <div class="card">
           <div class="card-body">
                 <div class="row g-5">
                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">
                                    Cut text from another element
                              </h5>
                              <div class="d-flex gap-2 align-items-start">
                                    <textarea id="clipboard_cut" class="form-control" cols="62" rows="6">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</textarea>
                                    <button class="btn btn-primary" data-clipboard-action="cut" data-clipboard-target="#clipboard_cut"> Copy </button>
                              </div>
                       </div>

                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">
                                    Copy text from another element
                              </h5>

                              <div class="input-group">
                                    <input id="clipboard_example" type="text" class="form-control" placeholder="name@example.com" value="name@example.com" />
                                    <button class="btn btn-primary btn-copy-clipboard" data-clipboard-target="#clipboard_example"> Copy </button>
                              </div>
                       </div>

                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">
                                    Copy text from attribute
                              </h5>

                              <!-- Trigger -->
                              <button id="clipboard_text" class="btn btn-primary" data-clipboard-text="Just because you can doesn't mean dfdyou should — clipboard.js">
                                    Copy to clipboard
                              </button>
                       </div> <!-- end card body -->
                 </div> <!-- end row -->
           </div>
     </div>
@endsection

@section('scripts')
     @vite(['resources/js/components/form-clipboard.js'])
@endsection