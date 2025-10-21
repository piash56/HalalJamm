@extends('layouts.vertical', ['title' => 'Banner'])

@section('css')
     @vite(['node_modules/glightbox/dist/css/glightbox.min.css' , 'node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')
     <div class="row">
           <div class="col-xl-6">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title mb-0">Restaurant Settings</h4>
                       </div>
                       <div class="card-body">
                              <div class="row">
                                    <div class="col-lg-7">
                                          <div class="mb-3">
                                                <p class="fw-medium mb-2">Upload Restaurant Logo</p>
                                                <div class="profile-photo-edit w-50 auth-logo border bg-light-subtle p-2 rounded">
                                                       <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                                       <label for="profile-img-file-input" class="profile-photo-edit px-4 py-2"><img src="/images/logo-dark.png" class="logo-dark me-1" alt="user-profile-image" height="24"> <img src="/images/logo-white.png" class="logo-light me-1" alt="user-profile-image" height="24"></label>
                                                </div>

                                          </div>
                                    </div>
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="restaurant-name" class="form-label">Restaurant Name</label>
                                                       <input type="text" id="restaurant-name" class="form-control" placeholder="Enter name" value="Admin">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="owner-name" class="form-label">Restaurant Owner Full Name</label>
                                                       <input type="text" id="owner-name" class="form-control" placeholder="Full name" value="Randy P. Ralph">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-6">
                                          <div class="mb-3">
                                                <label for="schedule-number" class="form-label">Owner Phone number</label>
                                                <input type="text" id="schedule-number" name="schedule-number" class="form-control" placeholder="Number" value="+ 312-494-3321">
                                          </div>
                                    </div>
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="schedule-email" class="form-label">Owner Email</label>
                                                       <input type="email" id="schedule-email" name="schedule-email" class="form-control" placeholder="Email" value="randypralph@jourrapide.com">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-12">
                                          <div class="mb-3">
                                                <label for="address" class="form-label">Full Address</label>
                                                <textarea class="form-control bg-light-subtle" id="address" rows="3" placeholder="Type address">4822 West Drive Chicago, IL 60610</textarea>
                                          </div>
                                    </div>
                                    <div class="col-lg-4">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="your-zipcode" class="form-label">Zip-Code</label>
                                                       <input type="number" id="your-zipcode" class="form-control" placeholder="zip-code" value="60610">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-4">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="choices-city" class="form-label">City</label>
                                                       <select class="form-select" id="choices-city" data-choices data-choices-groups data-placeholder="Select City" name="choices-city">
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
                                                                   <option value="New York" selected>New York</option>
                                                                   <option value="Washington" disabled>
                                                                         Washington
                                                                   </option>
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
                                          </form>
                                    </div>
                                    <div class="col-lg-4">
                                          <form>
                                                <label for="choices-country" class="form-label">Country</label>
                                                <select class="form-control" id="choices-country" data-choices data-choices-groups data-placeholder="Select Country" name="choices-country">
                                                       <option value="">Choose a country</option>
                                                       <optgroup label="">
                                                             <option value="">United Kingdom</option>
                                                             <option value="Fran">France</option>
                                                             <option value="Netherlands">Netherlands</option>
                                                             <option value="U.S.A" selected>U.S.A</option>
                                                             <option value="Denmark">Denmark</option>
                                                             <option value="Canada">Canada</option>
                                                             <option value="Australia">Australia</option>
                                                             <option value="India">India</option>
                                                             <option value="Germany">Germany</option>
                                                             <option value="Spain">Spain</option>
                                                             <option value="United Arab Emirates">United Arab Emirates</option>
                                                       </optgroup>
                                                </select>
                                          </form>
                                    </div>
                                    <div class="col-lg-6">
                                          <div class="">
                                                <label for="from-time" class="form-label">Restaurant Opening Time</label>
                                                <input type="text" id="preloading-timepicker" class="form-control" placeholder="Pick a time">
                                          </div>
                                    </div>
                                    <div class="col-lg-6">
                                          <div class="">
                                                <label for="to-time" class="form-label">Restaurant Close Time</label>
                                                <input type="text" id="preloading-timepicker2" class="form-control" placeholder="Pick a time">
                                          </div>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
           <div class="col-xl-6 col-lg-8">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title mb-0">General Settings</h4>
                       </div>
                       <div class="card-body">
                              <div class="row">
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="meta-name" class="form-label">Meta Title</label>
                                                       <input type="text" id="meta-name" class="form-control" placeholder="Title">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="meta-tag" class="form-label">Meta Tag Keyword</label>
                                                       <input type="text" id="meta-tag" class="form-control" placeholder="Enter word">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="themes" class="form-label">Restaurant Themes</label>
                                                       <select class="form-control" id="themes" data-choices data-choices-groups data-placeholder="Select Themes">
                                                             <option value="">Default</option>
                                                             <option value="Dark">Dark</option>
                                                             <option value="Minimalist" selected>Minimalist</option>
                                                             <option value="High Contrast">High Contrast</option>
                                                       </select>
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-12">
                                          <div class="">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control bg-light-subtle" id="description" rows="4" placeholder="Type description"></textarea>
                                          </div>
                                    </div>
                              </div>
                       </div>
                 </div>
                 
                 <!-- Tax Settings -->
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title mb-0">Tax Settings</h4>
                       </div>
                       <div class="card-body">
                              <form action="{{ route('admin.settings.update') }}" method="POST">
                                   @csrf
                                   <div class="row">
                                        <div class="col-lg-6">
                                             <div class="mb-3">
                                                  <div class="form-check form-switch form-switch-md">
                                                       <input class="form-check-input" type="checkbox" id="tax-enabled" name="tax_enabled" value="1" {{ $taxEnabled ? 'checked' : '' }}>
                                                       <label class="form-check-label" for="tax-enabled">
                                                            Enable Tax
                                                       </label>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="mb-3">
                                                  <label for="tax-percentage" class="form-label">Tax Percentage (%)</label>
                                                  <input type="number" class="form-control" id="tax-percentage" name="tax_percentage" value="{{ $taxPercentage }}" min="0" max="100" step="0.01" {{ !$taxEnabled ? 'disabled' : '' }}>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-lg-12">
                                             <button type="submit" class="btn btn-primary">Save Tax Settings</button>
                                        </div>
                                   </div>
                              </form>
                       </div>
                 </div>
                 
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title mb-0">Social Settings</h4>
                       </div>
                       <div class="card-body">
                              <div class="row">
                                    <div class="col-lg-4">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="facebook-url" class="form-label">Facebook URL</label>
                                                       <input type="url" id="facebook-url" class="form-control" placeholder="Enter URL" value="facebook.url">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-4">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="instagram-url" class="form-label">Instagram URL</label>
                                                       <input type="url" id="instagram-url" class="form-control" placeholder="Enter URL" value="instagram.url">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-4">
                                          <form>
                                                <div class="mb-3">
                                                       <label for="twitter-url" class="form-label">Twitter URL</label>
                                                       <input type="url" id="twitter-url" class="form-control" placeholder="Enter URL" value="twitter.url">
                                                </div>
                                          </form>
                                    </div>
                                    <div class="col-lg-6">
                                          <form>
                                                <div class="mb-2">
                                                       <label for="website-url" class="form-label">Website URL</label>
                                                       <input type="url" id="website-url" class="form-control" placeholder="Enter URL" value="website.url">
                                                </div>
                                          </form>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
     </div>

     <div class="row">
           <div class="col-lg-6">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title mb-0">Customer Settings</h4>
                       </div>
                       <div class="card-body">
                              <div class="row">
                                    <div class="col-lg-4">
                                          <div class="form-group mb-3">
                                                <p class="fw-medium mb-2">Customers Online</p>
                                                <div class="form-check form-switch">
                                                       <input class="form-check-input" type="checkbox" id="customersOnline" checked="">
                                                       <label class="form-check-label" for="customersOnline">Yes</label>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-lg-4">
                                          <div class="form-group mb-3">
                                                <p class="fw-medium mb-2">Customers Activity</p>
                                                <div class="form-check form-switch">
                                                       <input class="form-check-input" type="checkbox" id="customersActivity" checked="">
                                                       <label class="form-check-label" for="customersActivity">Yes</label>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-lg-4">
                                          <div class="form-group mb-3">
                                                <p class="fw-medium mb-2">Customer Searches</p>
                                                <div class="form-check form-switch">
                                                       <input class="form-check-input" type="checkbox" id="customerSearches" checked="">
                                                       <label class="form-check-label" for="customerSearches">Yes</label>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-lg-4">
                                          <div class="form-group">
                                                <p class="fw-medium mb-2">Allow Guest Checkout</p>
                                                <div class="form-check form-switch">
                                                       <input class="form-check-input" type="checkbox" id="guestCheckout">
                                                       <label class="form-check-label" for="guestCheckout">Yes</label>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-lg-4">
                                          <div class="form-group">
                                                <p class="fw-medium mb-2">Login Display Price</p>
                                                <div class="form-check form-switch">
                                                       <input class="form-check-input" type="checkbox" id="loginDisplayPrice">
                                                       <label class="form-check-label" for="loginDisplayPrice">Yes</label>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
           <div class="col-lg-3">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title mb-0">Categories Settings</h4>
                       </div>
                       <div class="card-body">
                              <div class="form-group mb-3">
                                    <p class="fw-medium mb-2">Category Product Count</p>
                                    <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" id="categoryProductCount" checked>
                                          <label class="form-check-label" for="categoryProductCount">Yes</label>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <form>
                                          <div class="">
                                                <label for="items-par-page" class="form-label">Default Items Per Page</label>
                                                <input type="number" id="items-par-page" class="form-control" placeholder="000">
                                          </div>
                                    </form>
                              </div>
                       </div>
                 </div>
           </div>
           <div class="col-lg-3">
                 <div class="card">
                       <div class="card-header">
                              <h4 class="card-title mb-0">Reviews Settings</h4>
                       </div>
                       <div class="card-body">
                              <div class="form-group mb-3">
                                    <p class="fw-medium mb-2">Allow Reviews</p>
                                    <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" id="allowReviews" checked>
                                          <label class="form-check-label" for="allowReviews">Yes</label>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <p class="fw-medium mb-2">Allow Guest Reviews</p>
                                    <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" id="gaustReviews">
                                          <label class="form-check-label" for="gaustReviews">Yes</label>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
     </div>
@endsection

@section('scripts')
     @vite(['resources/js/pages/setting.js'])
     
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            const taxEnabledCheckbox = document.getElementById('tax-enabled');
            const taxPercentageInput = document.getElementById('tax-percentage');
            
            function toggleTaxPercentage() {
                taxPercentageInput.disabled = !taxEnabledCheckbox.checked;
            }
            
            taxEnabledCheckbox.addEventListener('change', toggleTaxPercentage);
            toggleTaxPercentage(); // Initialize on page load
        });
     </script>
@endsection