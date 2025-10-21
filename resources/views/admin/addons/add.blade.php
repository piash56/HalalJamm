@extends('layouts.vertical', ['title' => 'Add Addon'])

@section('css')
    @vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')
     @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
               <i class="bx bx-check-circle me-2"></i>
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
     @endif
     @if ($errors->any())
          <div class="alert alert-danger">
               <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
               </ul>
          </div>
     @endif

     <div class="row">
          <div class="col-12">
               <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h4 class="card-title">Add New Addon</h4>
                         <a href="{{ route('admin.addons.index') }}" class="btn btn-secondary btn-sm">
                              <i class="ri-arrow-left-line me-1"></i> Back to Addons
                         </a>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('admin.addons.store') }}" method="POST">
                              @csrf

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="name" class="form-label">Addon Name <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                             @error('name')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
                                             @error('slug')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                             <small class="text-muted">URL-friendly version of the name (auto-generated from name)</small>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="price" class="form-label">Price</label>
                                             <div class="input-group">
                                                  <span class="input-group-text">$</span>
                                                  <input type="number" step="0.01" min="0" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', 0) }}">
                                                  @error('price')
                                                       <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                             </div>
                                             <small class="text-muted">Leave empty or 0 for free addon</small>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                             <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                                                  <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>Active</option>
                                                  <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                             </select>
                                             @error('status')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                             <label for="sort_order" class="form-label">Sort Order</label>
                                             <input type="number" class="form-control @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0">
                                             @error('sort_order')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                        </div>
                                   </div>
                              </div>

                              <!-- Food Selection Section -->
                              <div class="mb-3">
                                   <label class="form-label">Applicable Foods <span class="text-danger">*</span></label>
                                   
                                   <!-- All Foods Checkbox -->
                                   <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="all_foods" name="all_foods" value="1" {{ old('all_foods') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="all_foods">
                                             <strong>All Foods</strong> - This addon will be available for all foods
                                        </label>
                                   </div>

                                   <!-- Food Search and Selection -->
                                   <div id="food-selection-container" style="{{ old('all_foods') ? 'display:none' : '' }}">
                                        <div class="input-group mb-3">
                                             <input type="text" class="form-control" id="food-search" placeholder="Search foods by name...">
                                             <button class="btn btn-outline-secondary" type="button" id="search-btn">
                                                  <i class="ri-search-line"></i> Search
                                             </button>
                                        </div>

                                        <!-- Selected Foods Display -->
                                        <div class="mb-3">
                                             <label class="form-label">Selected Foods:</label>
                                             <div id="selected-foods" class="d-flex flex-wrap gap-2">
                                                  <span class="text-muted" id="no-foods-selected">No foods selected yet</span>
                                             </div>
                                             @error('food_ids')
                                                  <div class="text-danger small">{{ $message }}</div>
                                             @enderror
                                        </div>

                                        <!-- Search Results -->
                                        <div id="search-results" class="list-group" style="max-height: 300px; overflow-y: auto;"></div>
                                   </div>
                              </div>

                              <div class="d-flex gap-2">
                                   <button type="submit" class="btn btn-primary">
                                        <i class="ri-save-line me-1"></i> Create Addon
                                   </button>
                                   <a href="{{ route('admin.addons.index') }}" class="btn btn-secondary">Cancel</a>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
     // Auto-slug generation
     const nameInput = document.getElementById('name');
     const slugInput = document.getElementById('slug');
     
     nameInput.addEventListener('input', function() {
          if (!slugInput.value || slugInput.dataset.autoGenerated === 'true') {
               slugInput.value = this.value.toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .trim('-');
               slugInput.dataset.autoGenerated = 'true';
          }
     });
     
     slugInput.addEventListener('input', function() {
          this.dataset.autoGenerated = 'false';
     });

     // All Foods checkbox toggle
     const allFoodsCheckbox = document.getElementById('all_foods');
     const foodSelectionContainer = document.getElementById('food-selection-container');
     
     allFoodsCheckbox.addEventListener('change', function() {
          if (this.checked) {
               foodSelectionContainer.style.display = 'none';
               document.getElementById('food-search').disabled = true;
               document.getElementById('search-btn').disabled = true;
               // Clear selected foods
               selectedFoods = [];
               updateSelectedFoodsDisplay();
          } else {
               foodSelectionContainer.style.display = 'block';
               document.getElementById('food-search').disabled = false;
               document.getElementById('search-btn').disabled = false;
          }
     });

     // Food Search and Selection
     let selectedFoods = [];
     const searchInput = document.getElementById('food-search');
     const searchBtn = document.getElementById('search-btn');
     const searchResults = document.getElementById('search-results');
     const selectedFoodsContainer = document.getElementById('selected-foods');

     // Load initial 5 latest foods
     loadInitialFoods();

     function loadInitialFoods() {
          fetch('{{ route('admin.addons.search-foods') }}')
               .then(response => response.json())
               .then(foods => {
                    displaySearchResults(foods);
               })
               .catch(error => console.error('Error loading foods:', error));
     }

     // Search foods
     function searchFoods() {
          const searchTerm = searchInput.value;
          fetch(`{{ route('admin.addons.search-foods') }}?search=${encodeURIComponent(searchTerm)}`)
               .then(response => response.json())
               .then(foods => {
                    displaySearchResults(foods);
               })
               .catch(error => console.error('Error searching foods:', error));
     }

     searchBtn.addEventListener('click', searchFoods);
     searchInput.addEventListener('keypress', function(e) {
          if (e.key === 'Enter') {
               e.preventDefault();
               searchFoods();
          }
     });

     function displaySearchResults(foods) {
          if (foods.length === 0) {
               searchResults.innerHTML = '<div class="list-group-item text-muted">No foods found</div>';
               return;
          }

          searchResults.innerHTML = foods.map(food => {
               const isSelected = selectedFoods.some(f => f.id === food.id);
               return `
                    <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center ${isSelected ? 'active' : ''}" 
                            onclick="toggleFood(${food.id}, '${food.name.replace(/'/g, "\\'")}', this)" 
                            ${isSelected ? 'disabled' : ''}>
                         <div>
                              <strong>${food.name}</strong>
                              <small class="text-muted d-block">${food.category} - ${food.price}</small>
                         </div>
                         ${isSelected ? '<i class="ri-check-line"></i>' : '<i class="ri-add-line"></i>'}
                    </button>
               `;
          }).join('');
     }

     window.toggleFood = function(id, name, element) {
          const food = { id, name };
          selectedFoods.push(food);
          element.classList.add('active');
          element.disabled = true;
          element.querySelector('i').className = 'ri-check-line';
          updateSelectedFoodsDisplay();
     };

     window.removeFood = function(id) {
          selectedFoods = selectedFoods.filter(f => f.id !== id);
          updateSelectedFoodsDisplay();
          // Re-enable in search results
          const buttons = searchResults.querySelectorAll('button');
          buttons.forEach(btn => {
               if (btn.textContent.includes(selectedFoods.find(f => f.id === id)?.name || '')) {
                    btn.classList.remove('active');
                    btn.disabled = false;
                    btn.querySelector('i').className = 'ri-add-line';
               }
          });
          // Refresh search results
          if (searchInput.value || selectedFoods.length === 0) {
               searchFoods();
          } else {
               loadInitialFoods();
          }
     };

     function updateSelectedFoodsDisplay() {
          if (selectedFoods.length === 0) {
               selectedFoodsContainer.innerHTML = '<span class="text-muted" id="no-foods-selected">No foods selected yet</span>';
          } else {
               selectedFoodsContainer.innerHTML = selectedFoods.map(food => `
                    <span class="badge bg-primary-subtle border border-primary text-primary px-3 py-2 fs-14 d-flex align-items-center gap-2">
                         ${food.name}
                         <input type="hidden" name="food_ids[]" value="${food.id}">
                         <button type="button" class="btn-close btn-close-sm" onclick="removeFood(${food.id})" style="font-size: 0.75rem;"></button>
                    </span>
               `).join('');
          }
     }
});
</script>
@endsection
