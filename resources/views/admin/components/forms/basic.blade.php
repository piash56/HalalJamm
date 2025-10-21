@extends('layouts.components', ['title' => 'Form basics'])

@section('content')
     <div class="card">
           <div class="card-body">
                 <div class="row g-5">
                       <div class="col-lg-12">
                              <h5 class="card-title mb-5">
                                    Basic Example
                              </h5>
                              <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Text</label>
                                    <input type="text" id="simpleinput" class="form-control">
                              </div>

                              <div class="mb-3">
                                    <label for="example-email" class="form-label">Email</label>
                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                              </div>

                              <div class="mb-3">
                                    <label for="example-password" class="form-label">Password</label>
                                    <input type="password" id="example-password" class="form-control" value="password">
                              </div>

                              <div class="mb-3">
                                    <label for="example-palaceholder" class="form-label">Placeholder</label>
                                    <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                              </div>

                              <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Text area</label>
                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                              </div>

                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-5">
                                    Input Sizing
                              </h5>
                              <div>
                                    <div class="d-flex flex-column gap-2">
                                          <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                                          <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                                          <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                    </div>

                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-5">
                                    Disabled Input
                              </h5>
                              <div>
                                    <div class="d-flex flex-column gap-2">
                                          <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
                                          <input class="form-control" type="text" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                                    </div>
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-5">
                                    Readonly Input
                              </h5>
                              <div>
                                    <div class="d-flex flex-column gap-2">
                                          <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                    </div>
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-5">
                                    Datalists input
                              </h5>
                              <div>
                                    <label for="exampleDataList" class="form-label">Datalist example</label>
                                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                    <datalist id="datalistOptions">
                                          <option value="San Francisco">
                                          <option value="New York">
                                          <option value="Seattle">
                                          <option value="Los Angeles">
                                          <option value="Chicago">
                                    </datalist>
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-5">
                                    Select
                              </h5>
                              <div class="mb-3">
                                    <label for="example-select" class="form-label">Default Input Select</label>
                                    <select class="form-select" id="example-select">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                    </select>
                              </div>

                              <p class="card-subtitle">The <code>multiple</code> attribute is also supported:</p>

                              <div class="mb-3">
                                    <label for="example-multiselect" class="form-label">Multiple Select</label>
                                    <select id="example-multiselect" multiple="" class="form-control">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                    </select>
                              </div>

                              <p class="card-subtitle">As is the <code>size</code> attribute:</p>

                              <label for="example-multiselectsize" class="form-label">Multiple Select Size</label>
                              <select id="example-multiselectsize" class="form-select" size="3" aria-label="size 3 select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                              </select>
                       </div> <!-- end col -->
                 </div> <!-- end row -->
           </div>
     </div>
@endsection