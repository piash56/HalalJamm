@extends('layouts.vertical', ['title' => 'Offers'])

@section('content')
     <div class="row">
           <div class="col-lg-4">
                 <div class="card">
                       <div class="card-body">
                              <img src="/images/food-icon/offer-1.png" alt="" class="img-fluid rounded">
                       </div>
                 </div>
           </div>
           <div class="col-lg-4">
                 <div class="card">
                       <div class="card-body">
                              <img src="/images/food-icon/offer-2.png" alt="" class="img-fluid rounded">
                       </div>
                 </div>
           </div>
           <div class="col-lg-4">
                 <div class="card">
                       <div class="card-body">
                              <img src="/images/food-icon/offer-3.png" alt="" class="img-fluid rounded">
                       </div>
                 </div>
           </div>
     </div>

     <div class="row">
           <div class="col-xl-12">
                 <div class="card">
                       <div class="card-header d-flex justify-content-between align-items-center">
                              <div>
                                    <p class="card-title mb-0">All Offers</p>
                              </div>
                              <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                          Reports
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                          <!-- item-->
                                          <a href="#!" class="dropdown-item">Export</a>
                                          <!-- item-->
                                          <a href="#!" class="dropdown-item">Import</a>
                                    </div>
                              </div>
                       </div>
                       <div class="">
                              <div class="table-responsive">
                                    <table class="table align-middle mb-0 table-hover table-centered">
                                          <thead class="bg-light-subtle">
                                                <tr>
                                                       <th>Offer Name</th>
                                                       <th>Description</th>
                                                       <th>Validity Period</th>
                                                       <th>Discount Percentage</th>
                                                       <th>Conditions</th>
                                                       <th>Expiry Date</th>
                                                       <th>Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                       <td>Happy Hour</td>
                                                       <td>50% off on all appetizers</td>
                                                       <td>3 PM - 5 PM daily</td>
                                                       <td>50%</td>
                                                       <td>Dine-in only</td>
                                                       <td>15-02-2024</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>Family Feast</td>
                                                       <td>Free dessert with family-sized orders</td>
                                                       <td>Every weekend </td>
                                                       <td>Free dessert</td>
                                                       <td> Min. order $50</td>
                                                       <td>20-02-2024</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>Early Bird</td>
                                                       <td>20% off on breakfast items</td>
                                                       <td>7 AM - 9 AM daily</td>
                                                       <td>20%</td>
                                                       <td>Dine-in and Takeaway</td>
                                                       <td>25-02-2024</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>Seafood Special</td>
                                                       <td>30% off on all seafood dishes</td>
                                                       <td>Fridays</td>
                                                       <td>30%</td>
                                                       <td>Dine-in only</td>
                                                       <td>02-03-2024</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>Pasta Tuesday</td>
                                                       <td>Buy one, get one free on all pastas</td>
                                                       <td>Tuesdays</td>
                                                       <td>BOGO</td>
                                                       <td> Dine-in and takeaway</td>
                                                       <td>05-03-2024</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>Kids Eat Free</td>
                                                       <td>Free kids' meal with adult entree</td>
                                                       <td>Weekdays</td>
                                                       <td>Free kids' meal</td>
                                                       <td>For kids under 12</td>
                                                       <td>10-03-2024</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>Lunch Combo</td>
                                                       <td>Combo meal at $10</td>
                                                       <td>12 PM - 2 PM daily</td>
                                                       <td>Fixed price</td>
                                                       <td>Dine-in only</td>
                                                       <td>15-03-2024</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>Weekend Brunch</td>
                                                       <td>25% off on brunch menu</td>
                                                       <td>Saturdays & Sundays</td>
                                                       <td>25%</td>
                                                       <td> Dine-in only</td>
                                                       <td>20-03-2024</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>Salad Days</td>
                                                       <td>Free drink with any salad order</td>
                                                       <td>Mondays</td>
                                                       <td>Free drink </td>
                                                       <td> Dine-in and takeaway</td>
                                                       <td>25-03-2024</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                          </tbody>
                                    </table>
                              </div>
                              <!-- end table-responsive -->
                       </div>
                       <div class="card-footer border-0">
                              <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mb-0">
                                          <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="ri-arrow-left-s-line"></i></a></li>
                                          <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                          <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                          <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                          <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="ri-arrow-right-s-line"></i></a></li>
                                    </ul>
                              </nav>
                       </div>
                 </div>
           </div>

     </div>
@endsection