@extends('layouts.vertical', ['title' => 'Customers'])

@section('content')
     <div class="row">
           <div class="col-md-6 col-xl-3">
                 <div class="card">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/cus-1.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">2301</p>
                                          <p class="card-title mb-0">Customers</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
           <div class="col-md-6 col-xl-3">
                 <div class="card">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/i-2.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">1896</p>
                                          <p class="card-title mb-0">Total Orders</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
           <div class="col-md-6 col-xl-3">
                 <div class="card">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/cus-2.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">$46,770</p>
                                          <p class="card-title mb-0">Total Revenue</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                 <div class="card">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/cus-3.png" alt="" class="img-fluid">
                                    <div>
                                          <p class="text-dark fw-semibold fs-26 mb-1">$1,342</p>
                                          <p class="card-title mb-0">Tip Amount</p>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
     </div>

     <div class="row">
           <div class="col-xl-12">
                 <div class="card">
                       <div class="card-header d-flex justify-content-between align-items-center">
                              <div>
                                    <p class="card-title mb-0">Customers</p>
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
                                                       <th>ID</th>
                                                       <th>Customer Name</th>
                                                       <th>Contact No.</th>
                                                       <th>Address</th>
                                                       <th>Date</th>
                                                       <th>Total Spent</th>
                                                       <th>Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                       <td>#CUS-001</td>
                                                       <td><img src="/images/users/avatar-2.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Mike S. Witt</a> </td>
                                                       <td>+ 717-744-2352</td>
                                                       <td>44 Hide A Way Orlando. </td>
                                                       <td>04/5/2024</td>
                                                       <td>$390.00</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>#CUS-002</td>
                                                       <td><img src="/images/users/avatar-3.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Amy G. Coggins</a> </td>
                                                       <td>+ 336-409-9443</td>
                                                       <td>4668 Havanna Street Winston Salem, NC 27107 </td>
                                                       <td>02/5/2024</td>
                                                       <td>$230.00</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>#CUS-003</td>
                                                       <td><img src="/images/users/avatar-4.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Bennie S. Littlefi</a> </td>
                                                       <td>+ 574-773-8792</td>
                                                       <td>657 Sand Fork Road Nappanee, IN 4655 </td>
                                                       <td>29/4/2024</td>
                                                       <td>$340.00</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>#CUS-004</td>
                                                       <td><img src="/images/users/avatar-5.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Juliana Strickland</a> </td>
                                                       <td>+ 619-204-6604</td>
                                                       <td>27 Holden Street San Diego, CA 92117</td>
                                                       <td>28/4/2024</td>
                                                       <td>$483.00</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>#CUS-005</td>
                                                       <td><img src="/images/users/avatar-6.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Imelda M. Metcalf</a> </td>
                                                       <td>+ 785-650-9186</td>
                                                       <td>691 Sigley Road Hays, KS 67601</td>
                                                       <td>25/4/2024</td>
                                                       <td>$286.00</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>#CUS-006</td>
                                                       <td><img src="/images/users/avatar-7.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Arturo M. Forrest</a> </td>
                                                       <td>+ 719-651-0296</td>
                                                       <td> Berry Street Colorado Springs, CO 80</td>
                                                       <td>23/4/2024</td>
                                                       <td>$594.00</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>#CUS-007</td>
                                                       <td><img src="/images/users/avatar-8.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Derek K. Reyer</a> </td>
                                                       <td>+ 803-306-7753</td>
                                                       <td>Wexford Way Columbia, SC 29</td>
                                                       <td>20/4/2024</td>
                                                       <td>$423.00</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>#CUS-008</td>
                                                       <td><img src="/images/users/avatar-9.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Martha Peiffer</a> </td>
                                                       <td>+ 914-469-0980</td>
                                                       <td>1 Mount Tabor Elmsford, NY 10</td>
                                                       <td>14/4/2024</td>
                                                       <td>$239.00</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>#CUS-009</td>
                                                       <td><img src="/images/users/avatar-10.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Lucia C. McAnu</a> </td>
                                                       <td>+ 218-766-6544</td>
                                                       <td>44 Eagle Lane Bemidji, MN 566</td>
                                                       <td>11/4/2024</td>
                                                       <td>$530.00</td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>
                                                <tr>
                                                       <td>#CUS-0010</td>
                                                       <td><img src="/images/users/avatar-1.jpg" class="avatar-sm rounded-circle me-2" alt="..."><a href="#!" class="link-dark fw-semibold">Eufemia M. Lee</a> </td>
                                                       <td>+ 410-309-6920</td>
                                                       <td>Blue Spruce Lane Columbia, MD </td>
                                                       <td>05/4/2024</td>
                                                       <td>$476.00</td>
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