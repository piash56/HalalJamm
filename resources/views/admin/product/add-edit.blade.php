@extends('layouts.vertical', ['title' => 'Categories Edit'])

@section('css')
    @vite(['node_modules/nouislider/dist/nouislider.min.css' , 'node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')
     <div class="row">
           <div class="col-xl-6 col-lg-8">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title mb-0">Add Product Photo</h4>
                       </div>
                       <div class="card-body">
                              <div class="dropzone bg-light-subtle py-5">
                                    <div class="fallback">
                                          <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                          <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                          <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                                          <span class="text-muted fs-13">
                                                1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                                          </span>
                                    </div>
                              </div>

                              <ul class="list-unstyled mb-0" id="dropzone-preview">
                                    <li class="mt-2" id="dropzone-preview-list">
                                          <!-- This is used as the file preview template -->
                                          <div class="border rounded">
                                                <div class="d-flex p-2">
                                                       <div class="flex-shrink-0 me-3">
                                                             <div class="avatar-sm bg-light rounded">
                                                                   <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Dropzone-Image" />
                                                             </div>
                                                       </div>
                                                       <div class="flex-grow-1">
                                                             <div class="pt-1">
                                                                   <h5 class="fs-14 mb-1" data-dz-name>&</h5>
                                                                   <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                   <strong class="error text-primary" data-dz-errormessage></strong>
                                                             </div>
                                                       </div>
                                                       <div class="flex-shrink-0 ms-3">
                                                             <button data-dz-remove class="btn btn-sm btn-primary">Delete</button>
                                                       </div>
                                                </div>
                                          </div>
                                    </li>
                              </ul>
                              <!-- end dropzon-preview -->
                       </div>
                 </div>

           </div>
           <div class="col-xl-6 col-lg-8">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title mb-0">General Information</h4>
                       </div>
                       <div class="card-body">
                              <div class="row">
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="product-name" class="form-label">Product Name</label>
                                                       <input type="text" id="product-name" class="form-control" placeholder="Enter Name" value="">
                                                </div>
                                          </form>
                                    </div>

                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="crater" class="form-label">Categories Created By</label>
                                                       <select class="form-control" id="crater" data-choices data-choices-groups data-placeholder="Select Crater">
                                                             <option value="">Select Crater</option>
                                                             <option value="Seller">Seller</option>
                                                             <option value="Admin">Admin</option>
                                                             <option value="Other">Other</option>
                                                       </select>
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-6">
                                          <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control bg-light-subtle" id="description" rows="5" placeholder="Type description"></textarea>
                                          </div>
                                    </div>
                                    <div class="col-lg-6">
                                          <div class="mb-3">
                                                <label for="ingredients" class="form-label"> Ingredients</label>
                                                <textarea class="form-control bg-light-subtle" id="ingredients" rows="5" placeholder="Type Ingredients Name"></textarea>
                                          </div>
                                    </div>
                                    <div class="col-lg-12">
                                          <div class="mb-3">
                                                <label for="product-id" class="form-label">Price Range</label>
                                                <div id="product-price-range" [data-slider-size="md" ] class="my-3"></div>
                                                <div class="formCost d-flex gap-2 align-items-center mt-2">
                                                       <input class="form-control form-control-sm text-center" type="text" id="minCost" value="13">
                                                       <span class="fw-semibold text-muted">to</span>
                                                       <input class="form-control form-control-sm text-center" type="text" id="maxCost" value="30">
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="cuisine-type" class="form-label">Cuisine Type</label>
                                                       <input type="text" id="cuisine-type" class="form-control" placeholder="Enter Type" value="">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="food-type" class="form-label">Food Type</label>
                                                       <select class="form-control" id="food-type" data-choices data-choices-groups data-placeholder="Select Food-type">
                                                             <option value="">Select Food Type</option>
                                                             <option value="Veg">Veg</option>
                                                             <option value="Non-vag">Non-veg</option>
                                                       </select>
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="">
                                                       <label for="rating" class="form-label mb-2">Rating</label>
                                                       <div>
                                                             <div id="rater-message" dir="ltr"></div>
                                                       </div>
                                                </div>
                                          </form>
                                    </div>
                              </div>
                       </div>
                 </div>
                 <div class="p-3 mb-3 rounded">
                       <div class="row justify-content-end g-2">
                              <div class="col-lg-3">
                                    <a href="#!" class="btn btn-outline-secondary w-100"><i class="ri-save-line"></i> Save Change</a>
                              </div>
                              <div class="col-lg-2">
                                    <a href="#!" class="btn btn-primary w-100"><i class="ri-close-circle-line"></i> Cancel</a>
                              </div>
                       </div>
                 </div>
           </div>
     </div>
@endsection

@section('scripts')
     @vite(['resources/js/pages/product.js'])
@endsection