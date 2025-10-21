@extends('layouts.vertical', ['title' => 'Product List'])

@section('content')
     <div class="row">
           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/c-2.png" alt="" class="img-fluid">
                                    <div>
                                          <a href="#!" class="fw-bold text-dark fs-15">Starter Course</a>
                                          <p>23 Items Available</p>
                                          <span class="text-success me-1"><i class="ri-circle-fill fs-10"></i> Veg</span>
                                          <span class="text-danger ms-1"><i class="ri-circle-fill fs-10"></i> Non Veg</span>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/c-5.png" alt="" class="img-fluid">
                                    <div>
                                          <a href="#!" class="fw-bold text-dark fs-15">Main Course</a>
                                          <p>20 Items Available</p>
                                          <span class="text-success me-1"><i class="ri-circle-fill fs-10"></i> Veg</span>
                                          <span class="text-danger ms-1"><i class="ri-circle-fill fs-10"></i> Non Veg</span>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/c-9.png" alt="" class="img-fluid">
                                    <div>
                                          <a href="#!" class="fw-bold text-dark fs-15">Coldrinks</a>
                                          <p> 18 Items Available</p>
                                          <span class="text-success me-1"><i class="ri-circle-fill fs-10"></i> Veg</span>
                                    </div>
                                    <div class="ms-auto">
                                          <a href="#!" class="btn btn-primary avatar-sm rounded-circle d-flex align-items-center justify-content-center"><i class="ri-eye-line align-middle fs-16 text-white"></i></a>
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>

           <div class="col-md-6 col-xl-3">
                 <div class="card card-full-height">
                       <div class="card-body ">
                              <div class="d-flex align-items-center gap-3">
                                    <img src="/images/food-icon/c-6.png" alt="" class="img-fluid">
                                    <div>
                                          <a href="#!" class="fw-bold text-dark fs-15">Sweet Desserts</a>
                                          <p>30 Items Available</p>
                                          <span class="text-success me-1"><i class="ri-circle-fill fs-10"></i> Veg</span>
                                          <span class="text-danger ms-1"><i class="ri-circle-fill fs-10"></i> Non Veg</span>
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
                                    <p class="card-title mb-0">Menu Products</p>
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
                                          <thead class="bg-light-subtle fs-12 text-uppercase">
                                                <tr>
                                                       <th class="py-2">Photo</th>
                                                       <th class="py-2">Product Name</th>
                                                       <th class="w-25 py-2">Description</th>
                                                       <th class="w-25 py-2">Ingredients</th>
                                                       <th class="py-2">Price</th>
                                                       <th class="py-2">Rating</th>
                                                       <th class="py-2">Cuisine Type</th>
                                                       <th class="py-2">Food Type</th>
                                                       <th class="py-2">Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <tr>
                                                       <td>
                                                             <a href="/images/food-icon/pic12.png">
                                                                   <img src="/images/food-icon/pic12.png" alt="" class="avatar-lg">
                                                             </a>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex align-items-center gap-1">

                                                                   <div>
                                                                         <a href="#!" class="link-dark fw-semibold fs-15">Italian Burata Pizza</a>
                                                                         <p class="mb-0 mt-1">12-Inch</p>
                                                                   </div>
                                                             </div>
                                                       </td>
                                                       <td>Pizza is a traditional Italian dish typically consisting of a flat base of... </td>
                                                       <td>Mushrooms , Bell Peppers , Onions , Italian Sausage , Olives , Fresh Basil , Fresh Mozzarella...</td>
                                                       <td>$12.00</td>
                                                       <td>
                                                             <p class="mb-0"><i class="ri-star-fill text-warning me-1 fs-16"></i>4.3/5</p>
                                                       </td>
                                                       <td>Italian</td>
                                                       <td>
                                                             <div class="avatar-sm">
                                                                   <span class="avatar-title rounded-2 fw-semibold border border-danger text-danger">
                                                                         <i class="ri-circle-fill fs-16"></i>
                                                                   </span>
                                                             </div>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>

                                                <tr>
                                                       <td>
                                                             <a href="/images/food-icon/pic13.png">
                                                                   <img src="/images/food-icon/pic13.png" alt="" class="avatar-lg">
                                                             </a>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex align-items-center gap-1">
                                                                   <div>
                                                                         <a href="#!" class="link-dark fw-semibold fs-15">Shanghai Noodles</a>
                                                                         <p class="mb-0 mt-1">Large bowl</p>
                                                                   </div>
                                                             </div>
                                                       </td>
                                                       <td>Shanghai noodles are a specific type of noodle that are a wheat flour...</td>
                                                       <td>Green Onions , Sesame Seeds , Soy Sauce , Sesame Oil , Cilantro , Chili Oil or Sriracha , Bean Sprouts...</td>
                                                       <td>$13.00</td>
                                                       <td>
                                                             <p class="mb-0"><i class="ri-star-fill text-warning me-1 fs-16"></i>4.1/5</p>
                                                       </td>
                                                       <td>Thai</td>
                                                       <td>
                                                             <div class="avatar-sm">
                                                                   <span class="avatar-title rounded-2 fw-semibold border border-success text-success">
                                                                         <i class="ri-circle-fill fs-16"></i>
                                                                   </span>
                                                             </div>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>

                                                <tr>
                                                       <td>
                                                             <a href="/images/food-icon/pic14.png">
                                                                   <img src="/images/food-icon/pic14.png" alt="" class="avatar-lg">
                                                             </a>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex align-items-center gap-1">
                                                                   <div>
                                                                         <a href="#!" class="link-dark fw-semibold fs-15">Gourmet Burger</a>
                                                                         <p class="mb-0 mt-1">-</p>
                                                                   </div>
                                                             </div>
                                                       </td>
                                                       <td>A burger is a patty of ground meat grilled and placed between two...</td>
                                                       <td>Lettuce , Tomato , Onion , Avocado , Roasted Bell Peppers , Mushrooms , Sprouts or Micrograms , Coleslaw...</td>
                                                       <td>$14.00</td>
                                                       <td>
                                                             <p class="mb-0"><i class="ri-star-fill text-warning me-1 fs-16"></i>4.5/5</p>
                                                       </td>
                                                       <td>Hamburger</td>
                                                       <td>
                                                             <div class="avatar-sm">
                                                                   <span class="avatar-title rounded-2 fw-semibold border border-success text-success">
                                                                         <i class="ri-circle-fill fs-16"></i>
                                                                   </span>
                                                             </div>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>

                                                <tr>
                                                       <td>
                                                             <a href="/images/food-icon/pic15.png">
                                                                   <img src="/images/food-icon/pic15.png" alt="" class="avatar-lg">
                                                             </a>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex align-items-center gap-1">
                                                                   <div>
                                                                         <a href="#!" class="link-dark fw-semibold fs-15">Meat Tacos</a>
                                                                         <p class="mb-0 mt-1">3 tacos</p>
                                                                   </div>
                                                             </div>
                                                       </td>
                                                       <td>Tacos, an popular hand-sized food item of Mexican origin combining...</td>
                                                       <td>Ground Meat , Shredded Lettuce , Diced Tomatoes , Shredded Cheese , Vegetables...</td>
                                                       <td>$15.00</td>
                                                       <td>
                                                             <p class="mb-0"><i class="ri-star-fill text-warning me-1 fs-16"></i>4.3/5</p>
                                                       </td>
                                                       <td>Mexican</td>
                                                       <td>
                                                             <div class="avatar-sm">
                                                                   <span class="avatar-title rounded-2 fw-semibold border border-danger text-danger">
                                                                         <i class="ri-circle-fill fs-16"></i>
                                                                   </span>
                                                             </div>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>

                                                <tr>
                                                       <td>
                                                             <a href="/images/food-icon/pic16.png">
                                                                   <img src="/images/food-icon/pic16.png" alt="" class="avatar-lg">
                                                             </a>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex align-items-center gap-1">
                                                                   <div>
                                                                         <a href="#!" class="link-dark fw-semibold fs-15">Spaghetti </a>
                                                                         <p class="mb-0 mt-1">Large bowl</p>
                                                                   </div>
                                                             </div>
                                                       </td>
                                                       <td>Spaghetti is a long, thin, solid, cylindrical pasta. It is a staple food ...</td>
                                                       <td>Spaghetti , Garlic , Onion , Zucchini , Mushrooms , Italian Seasoning , Cheddar cheese...</td>
                                                       <td>$13.00</td>
                                                       <td>
                                                             <p class="mb-0"><i class="ri-star-fill text-warning me-1 fs-16"></i>4.2/5</p>
                                                       </td>
                                                       <td>Italian</td>
                                                       <td>
                                                             <div class="avatar-sm">
                                                                   <span class="avatar-title rounded-2 fw-semibold border border-success text-success">
                                                                         <i class="ri-circle-fill fs-16"></i>
                                                                   </span>
                                                             </div>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>

                                                <tr>
                                                       <td>
                                                             <a href="/images/food-icon/pic17.png">
                                                                   <img src="/images/food-icon/pic17.png" alt="" class="avatar-lg">
                                                             </a>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex align-items-center gap-1">
                                                                   <div>
                                                                         <a href="#!" class="link-dark fw-semibold fs-15">Chocolate Lava Cake </a>
                                                                         <p class="mb-0 mt-1">Single</p>
                                                                   </div>
                                                             </div>
                                                       </td>
                                                       <td>Spaghetti is a long, thin, solid, cylindrical pasta. It is a staple food ...</td>
                                                       <td>Chocolate, Flour, Eggs , Milk...</td>
                                                       <td>$10.00</td>
                                                       <td>
                                                             <p class="mb-0"><i class="ri-star-fill text-warning me-1 fs-16"></i>4.2/5</p>
                                                       </td>
                                                       <td>Global</td>
                                                       <td>
                                                             <div class="avatar-sm">
                                                                   <span class="avatar-title rounded-2 fw-semibold border border-danger text-danger">
                                                                         <i class="ri-circle-fill fs-16"></i>
                                                                   </span>
                                                             </div>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex gap-3">
                                                                   <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                                                   <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                                             </div>
                                                       </td>
                                                </tr>

                                                <tr>
                                                       <td>
                                                             <a href="/images/food-icon/pic18.png">
                                                                   <img src="/images/food-icon/pic18.png" alt="" class="avatar-lg rounded-circle border border-light border-5">
                                                             </a>
                                                       </td>
                                                       <td>
                                                             <div class="d-flex align-items-center gap-2">
                                                                   <div>
                                                                         <a href="#!" class="link-dark fw-semibold fs-15">Cocktail</a>
                                                                         <p class="mb-0 mt-1">300 ML</p>
                                                                   </div>
                                                             </div>
                                                       </td>
                                                       <td>A cocktail is any beverage that mixes one or more alcoholic drinks and other flavors ...</td>
                                                       <td>White Rum , Fresh Lime Juice , Fresh Mint Leaves , Ice ...</td>
                                                       <td>$21.00</td>
                                                       <td>
                                                             <p class="mb-0"><i class="ri-star-fill text-warning me-1 fs-16"></i>4.5/5</p>
                                                       </td>
                                                       <td>Global</td>
                                                       <td>
                                                             <div class="avatar-sm">
                                                                   <span class="avatar-title rounded-2 fw-semibold border border-success text-success">
                                                                         <i class="ri-circle-fill fs-16"></i>
                                                                   </span>
                                                             </div>
                                                       </td>
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