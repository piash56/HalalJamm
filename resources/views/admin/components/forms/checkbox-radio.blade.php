@extends('layouts.components', ['title' => 'Checkbox & Radio'])

@section('content')
     <div class="card">
           <div class="card-body">
                 <div class="row g-5">
                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Checkbox
                              </h5>
                              <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">Check this custom checkbox</label>
                              </div>
                              <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                    <label class="form-check-label" for="customCheck2">Check this custom checkbox</label>
                              </div>

                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Inline Checkbox
                              </h5>
                              <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="customCheck3">
                                    <label class="form-check-label" for="customCheck3">Check this custom checkbox</label>
                              </div>
                              <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                    <label class="form-check-label" for="customCheck4">Check this custom checkbox</label>
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Disabled Checkbox
                              </h5>
                              <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="customCheck5" checked disabled>
                                    <label class="form-check-label" for="customCheck5">Check this custom checkbox</label>
                              </div>
                              <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="customCheck6" disabled>
                                    <label class="form-check-label" for="customCheck6">Check this custom checkbox</label>
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Radio
                              </h5>

                              <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                          Default radio
                                    </label>
                              </div>
                              <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                          Default checked radio
                                    </label>
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Colors Checkbox
                              </h5>

                              <!-- Colors-->
                              <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked>
                                    <label class="form-check-label" for="customCheckcolor1">Default Checkbox</label>
                              </div>
                              <div class="form-check form-checkbox-success mb-2">
                                    <input type="checkbox" class="form-check-input" id="customCheckcolor2" checked>
                                    <label class="form-check-label" for="customCheckcolor2">Success Checkbox</label>
                              </div>
                              <div class="form-check form-checkbox-info mb-2">
                                    <input type="checkbox" class="form-check-input" id="customCheckcolor3" checked>
                                    <label class="form-check-label" for="customCheckcolor3">Info Checkbox</label>
                              </div>
                              <div class="form-check form-checkbox-secondary mb-2">
                                    <input type="checkbox" class="form-check-input" id="customCheckcolor6" checked>
                                    <label class="form-check-label" for="customCheckcolor6">Secondary Checkbox</label>
                              </div>
                              <div class="form-check form-checkbox-warning mb-2">
                                    <input type="checkbox" class="form-check-input" id="customCheckcolor4" checked>
                                    <label class="form-check-label" for="customCheckcolor4">Warning Checkbox</label>
                              </div>
                              <div class="form-check form-checkbox-danger mb-2">
                                    <input type="checkbox" class="form-check-input" id="customCheckcolor5" checked>
                                    <label class="form-check-label" for="customCheckcolor5">Danger Checkbox</label>
                              </div>
                              <div class="form-check form-checkbox-dark">
                                    <input type="checkbox" class="form-check-input" id="customCheckcolor7" checked>
                                    <label class="form-check-label" for="customCheckcolor7">Dark Checkbox</label>
                              </div>
                       </div>

                       <div class="col-lg-12">

                              <h5 class="card-title mb-4">
                                    Inline Radio
                              </h5>
                              <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Check this custom checkbox</label>
                              </div>
                              <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Check this custom checkbox</label>
                              </div>


                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Disabled Radio
                              </h5>
                              <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="customCheck5" checked disabled>
                                    <label class="form-check-label" for="customCheck5">Check this custom checkbox</label>
                              </div>
                              <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="customCheck6" disabled>
                                    <label class="form-check-label" for="customCheck6">Check this custom checkbox</label>
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Colors Radio
                              </h5>
                              <div class="form-check mb-2">
                                    <input type="radio" id="customRadiocolor1" name="customRadiocolor1" class="form-check-input" checked>
                                    <label class="form-check-label" for="customRadiocolor1">Default Radio</label>
                              </div>
                              <div class="form-check form-radio-success mb-2">
                                    <input type="radio" id="customRadiocolor2" name="customRadiocolor2" class="form-check-input" checked>
                                    <label class="form-check-label" for="customRadiocolor2">Success Radio</label>
                              </div>
                              <div class="form-check form-radio-info mb-2">
                                    <input type="radio" id="customRadiocolor3" name="customRadiocolor3" class="form-check-input" checked>
                                    <label class="form-check-label" for="customRadiocolor3">Info Radio</label>
                              </div>
                              <div class="form-check form-radio-secondary mb-2">
                                    <input type="radio" id="customRadiocolor6" name="customRadiocolor6" class="form-check-input" checked>
                                    <label class="form-check-label" for="customRadiocolor6">Secondary Radio</label>
                              </div>
                              <div class="form-check form-radio-warning mb-2">
                                    <input type="radio" id="customRadiocolor4" name="customRadiocolor4" class="form-check-input" checked>
                                    <label class="form-check-label" for="customRadiocolor4">Warning Radio</label>
                              </div>
                              <div class="form-check form-radio-danger mb-2">
                                    <input type="radio" id="customRadiocolor5" name="customRadiocolor5" class="form-check-input" checked>
                                    <label class="form-check-label" for="customRadiocolor5">Danger Radio</label>
                              </div>
                              <div class="form-check form-radio-dark">
                                    <input type="radio" id="customRadiocolor7" name="customRadiocolor7" class="form-check-input" checked>
                                    <label class="form-check-label" for="customRadiocolor7">Dark Radio</label>
                              </div>
                       </div>

                       <div class="col-lg-12">
                              <h5 class="card-title mb-4">
                                    Switch
                              </h5>
                              <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                              </div>
                              <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                              </div>
                              <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled>
                                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                              </div>
                              <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
                                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                              </div>
                       </div> <!-- end col -->
                 </div> <!-- end row -->
           </div>
     </div>
@endsection