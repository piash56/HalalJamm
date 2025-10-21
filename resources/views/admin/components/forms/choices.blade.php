@extends('layouts.components', ['title' => 'Form Select'])

@section('css')
    @vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')
     <div class="card">
           <div class="card-body">
                 <div class="row g-5">
                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">Basic Example</h5>
                              <div>
                                    <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                          <option value="">This is a placeholder</option>
                                          <option value="Choice 1">Choice 1</option>
                                          <option value="Choice 2">Choice 2</option>
                                          <option value="Choice 3">Choice 3</option>
                                    </select>
                              </div>
                       </div>
                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">Option Groups Example</h5>
                              <div>
                                    <label for="choices-single-groups" class="form-label text-muted">Option Groups</label>
                                    <select class="form-control" id="choices-single-groups" data-choices data-choices-groups data-placeholder="Select City" name="choices-single-groups">
                                          <option value="">Choose a city</option>
                                          <optgroup label="UK">
                                                <option value="London">London</option>
                                                <option value="Manchester">Manchester</option>
                                                <option value="Liverpool">Liverpool</option>
                                          </optgroup>
                                          <optgroup label="FR">
                                                <option value="Paris">Paris</option>
                                                <option value="Lyon">Lyon</option>
                                                <option value="Marseille">Marseille</option>
                                          </optgroup>
                                          <optgroup label="DE" disabled>
                                                <option value="Hamburg">Hamburg</option>
                                                <option value="Munich">Munich</option>
                                                <option value="Berlin">Berlin</option>
                                          </optgroup>
                                          <optgroup label="US">
                                                <option value="New York">New York</option>
                                                <option value="Washington" disabled>Washington</option>
                                                <option value="Michigan">Michigan</option>
                                          </optgroup>
                                          <optgroup label="SP">
                                                <option value="Madrid">Madrid</option>
                                                <option value="Barcelona">Barcelona</option>
                                                <option value="Malaga">Malaga</option>
                                          </optgroup>
                                          <optgroup label="CA">
                                                <option value="Montreal">Montreal</option>
                                                <option value="Toronto">Toronto</option>
                                                <option value="Vancouver">Vancouver</option>
                                          </optgroup>
                                    </select>
                              </div>
                       </div>
                       <div class="col-lg-6">

                              <h5 class="card-title mb-4">Options added via config with no search</h5>
                              <div>
                                    <select class="form-control" id="choices-single-no-search" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                                          <option value="Zero">Zero</option>
                                          <option value="One">One</option>
                                          <option value="Two">Two</option>
                                          <option value="Three">Three</option>
                                          <option value="Four">Four</option>
                                          <option value="Five">Five</option>
                                          <option value="Six">Six</option>
                                    </select>
                              </div>
                       </div>
                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">Options added via config with no sorting</h5>

                              <div>
                                    <select class="form-control" id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices data-choices-sorting-false>
                                          <option value="Madrid">Madrid</option>
                                          <option value="Toronto">Toronto</option>
                                          <option value="Vancouver">Vancouver</option>
                                          <option value="London">London</option>
                                          <option value="Manchester">Manchester</option>
                                          <option value="Liverpool">Liverpool</option>
                                          <option value="Paris">Paris</option>
                                          <option value="Malaga">Malaga</option>
                                          <option value="Washington" disabled>Washington</option>
                                          <option value="Lyon">Lyon</option>
                                          <option value="Marseille">Marseille</option>
                                          <option value="Hamburg">Hamburg</option>
                                          <option value="Munich">Munich</option>
                                          <option value="Barcelona">Barcelona</option>
                                          <option value="Berlin">Berlin</option>
                                          <option value="Montreal">Montreal</option>
                                          <option value="New York">New York</option>
                                          <option value="Michigan">Michigan</option>
                                    </select>
                              </div>
                       </div>

                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">Multiple select input</h5>
                              <div>
                                    <select class="form-control" id="choices-multiple-default" data-choices name="choices-multiple-default" multiple>
                                          <option value="Choice 1" selected>Choice 1</option>
                                          <option value="Choice 2">Choice 2</option>
                                          <option value="Choice 3">Choice 3</option>
                                          <option value="Choice 4" disabled>Choice 4</option>
                                    </select>
                              </div>
                       </div>

                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">Multiple select With remove button input</h5>
                              <div>
                                    <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                          <option value="Choice 1" selected>Choice 1</option>
                                          <option value="Choice 2">Choice 2</option>
                                          <option value="Choice 3">Choice 3</option>
                                          <option value="Choice 4">Choice 4</option>
                                    </select>
                              </div>
                       </div>
                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">Multiple select With Option groups</h5>
                              <div>
                                    <label for="choices-multiple-groups" class="form-label text-muted">Option groups</label>
                                    <select class="form-control" id="choices-multiple-groups" name="choices-multiple-groups" data-choices data-choices-multiple-groups="true" multiple>
                                          <option value="">Choose a city</option>
                                          <optgroup label="UK">
                                                <option value="London">London</option>
                                                <option value="Manchester">Manchester</option>
                                                <option value="Liverpool">Liverpool</option>
                                          </optgroup>
                                          <optgroup label="FR">
                                                <option value="Paris">Paris</option>
                                                <option value="Lyon">Lyon</option>
                                                <option value="Marseille">Marseille</option>
                                          </optgroup>
                                          <optgroup label="DE" disabled>
                                                <option value="Hamburg">Hamburg</option>
                                                <option value="Munich">Munich</option>
                                                <option value="Berlin">Berlin</option>
                                          </optgroup>
                                          <optgroup label="US">
                                                <option value="New York">New York</option>
                                                <option value="Washington" disabled>Washington</option>
                                                <option value="Michigan">Michigan</option>
                                          </optgroup>
                                          <optgroup label="SP">
                                                <option value="Madrid">Madrid</option>
                                                <option value="Barcelona">Barcelona</option>
                                                <option value="Malaga">Malaga</option>
                                          </optgroup>
                                          <optgroup label="CA">
                                                <option value="Montreal">Montreal</option>
                                                <option value="Toronto">Toronto</option>
                                                <option value="Vancouver">Vancouver</option>
                                          </optgroup>
                                    </select>
                              </div>
                       </div>

                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">Text inputs</h5>
                              <div>
                                    <label for="choices-text-remove-button" class="form-label text-muted">Set limit values with remove button</label>
                                    <input class="form-control" id="choices-text-remove-button" data-choices data-choices-limit="3" data-choices-removeItem type="text" value="Task-1" />
                              </div>
                       </div>

                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">Text inputs in Unique values only, no pasting</h5>
                              <div>
                                    <label for="choices-text-unique-values" class="form-label text-muted">Unique values only, no pasting</label>
                                    <input class="form-control" id="choices-text-unique-values" data-choices data-choices-text-unique-true type="text" value="Project-A, Project-B" />
                              </div>
                       </div>

                       <div class="col-lg-6">
                              <h5 class="card-title mb-4">Disabled Text Inputs</h5>
                              <div>
                                    <label for="choices-text-disabled" class="form-label text-muted">Disabled</label>
                                    <input class="form-control" id="choices-text-disabled" data-choices data-choices-text-disabled-true type="text" value="josh@joshuajohnson.co.uk, joe@bloggs.co.uk" />
                              </div>
                       </div> <!-- end col -->
                 </div> <!-- end row -->
           </div>
     </div>
@endsection