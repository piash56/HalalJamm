@extends('layouts.vertical', ['title' => 'Faq'])

@section('content')
     <div class="row mt-4 justify-content-center text-center">
           <div class="col-lg-12">
                 <div class="card bg-faq bg-primary-subtle p-lg-5 p-3 rounded">
                       <div class="row justify-content-center">
                              <div class="col-lg-5">
                                    <div class="avatar rounded bg-primary bg-opacity-10 border border-primary-subtle mx-auto mb-4">
                                          <i class="ri-question-answer-line fs-28 text-primary avatar-title"></i>
                                    </div>
                                    <h2 class="fw-semibold text-dark">What Can We Help You Find ?</h2>
                                    <p class="mb-4">Everything you need to know about the product and billing. Can't find the answer you're looking for? Please chat to our friendly team.</p>
                                    <div class="search-bar">
                                          <span><i class="ri-search-line mt-1"></i></span>
                                          <input type="search" class="form-control rounded-pill bg-light bg-opacity-75 border-0 py-2" id="search" placeholder="Search ...">
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
     </div>

     <div class="row my-4">
           <div class="col-lg-4">
                 <h3 class="fw-semibold text-dark">General FAQs</h3>
                 <p class="mb-0">Everything you need to know about the product and how it works. Can't find an answer? <a href="#!" class="link-primary fw-medium text-decoration-underline">Chat to our team</a>.</p>
           </div>
     </div>

     <div class="row justify-content-center g-xl-4">
           <div class="col-xl-6 col-lg-12">
                 <!-- FAQs -->
                 <div class="accordion">
                       <div class="accordion-item mb-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                          <i class="ri-question-fill me-1"></i>What are your opening hours?
                                    </button>
                              </h2>
                              <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i>We are open from 10 AM to 10 PM, Monday through Sunday.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                          <i class="ri-question-fill me-1"></i>Do you offer delivery services?
                                    </button>
                              </h2>
                              <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i>Yes, we offer delivery services within a 10-mile radius of our location.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                          <i class="ri-question-fill me-1"></i>How can I make a reservation?
                                    </button>
                              </h2>
                              <div id="faq3" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i>You can make a reservation by calling us at (123) 456-7890 or through our website's reservation page.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="true" aria-controls="faq4">
                                          <i class="ri-question-fill me-1"></i>Do you accommodate dietary restrictions?
                                    </button>
                              </h2>
                              <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i>Yes, we have options for vegetarians, vegans, and those with gluten or dairy allergies. Please inform your server of any dietary restrictions.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                          <i class="ri-question-fill me-1"></i>Is there parking available?
                                    </button>
                              </h2>
                              <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i>Yes, we have a parking lot available for our customers.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                          <i class="ri-question-fill me-1"></i>Do you have outdoor seating?
                                    </button>
                              </h2>
                              <div id="faq6" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i> Yes, we offer outdoor seating on our patio, weather permitting.
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
           <div class="col-xl-6 col-lg-12">
                 <!-- FAQs -->
                 <div class="accordion">
                       <div class="accordion-item mb-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="true" aria-controls="faq7">
                                          <i class="ri-question-fill me-1"></i>Can I host a private event at your restaurant?
                                    </button>
                              </h2>
                              <div id="faq7" class="accordion-collapse collapse show" aria-labelledby="faq7">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i> Yes, we have a private dining area available for events. Please contact us for more details and availability.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                                          <i class="ri-question-fill me-1"></i>Do you offer gift cards?
                                    </button>
                              </h2>
                              <div id="faq8" class="accordion-collapse collapse" aria-labelledby="faq8">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i>Yes, gift cards are available for purchase at the restaurant and on our website.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9">
                                          <i class="ri-question-fill me-1"></i>What payment methods do you accept?
                                    </button>
                              </h2>
                              <div id="faq9" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i>We accept cash, credit/debit cards, and mobile payment options like Apple Pay and Google Pay.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="true" aria-controls="faq10">
                                          <i class="ri-question-fill me-1"></i>Are pets allowed in the restaurant?
                                    </button>
                              </h2>
                              <div id="faq10" class="accordion-collapse collapse" aria-labelledby="faq10">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i>Pets are not allowed inside the restaurant, but we do have a designated pet-friendly area on our patio.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq11" aria-expanded="false" aria-controls="faq11">
                                          <i class="ri-question-fill me-1"></i>Is customer support available 24/7?
                                    </button>
                              </h2>
                              <div id="faq11" class="accordion-collapse collapse" aria-labelledby="faq11">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i>Our customer support is available during regular business hours, Monday through Friday. However, you can leave us a message outside of these hours, and we'll respond to you as soon as possible.
                                    </div>
                              </div>
                       </div>
                       <div class="accordion-item my-2 rounded">
                              <h2 class="accordion-header">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq12" aria-expanded="false" aria-controls="faq12">
                                          <i class="ri-question-fill me-1"></i>How long does it take to receive a response from customer support?
                                    </button>
                              </h2>
                              <div id="faq12" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                          <i class="ri-question-answer-fill text-success me-1"></i> We strive to respond to all customer inquiries within 24 hours during regular business hours. Response times may vary depending on the volume of inquiries received.
                                    </div>
                              </div>
                       </div>
                 </div>
           </div>
     </div>

     <div class="row my-4">
           <div class="col-lg-4">
                 <h3 class="fw-semibold text-dark">Ask Your Question</h3>
                 <p class="mb-0">Everything you need to know about the product and how it works. Can't find an answer? <a href="#!" class="link-primary fw-medium text-decoration-underline">Chat to our team</a>.</p>
           </div>
     </div>

     <div class="row">
           <div class="col-lg-12">
                 <div class="card faq-bg">
                       <div class="card-body">
                              <div class="row">
                                    <div class="col-xl-3 col-lg-6">
                                          <div class="border p-3 rounded bg-light-subtle">

                                                <form>
                                                       <div class="mb-2">
                                                             <label for="your-name" class="form-label">Your Name</label>
                                                             <input type="text" id="your-name" name="your-name" class="form-control" placeholder="Full Name">
                                                       </div>
                                                       <div class="mb-2">
                                                             <label for="email-email" class="form-label">Email</label>
                                                             <input type="email" id="email-email" name="email-email" class="form-control" placeholder="Email">
                                                       </div>
                                                       <div class="mb-2">
                                                             <label for="phone-number" class="form-label">Phone number</label>
                                                             <input type="number" id="phone-number" name="phone-number" class="form-control" placeholder="Number">
                                                       </div>
                                                       <div>
                                                             <label for="question-textarea" class="form-label">Enter Your Question</label>
                                                             <textarea class="form-control" id="question-textarea" rows="3" placeholder="Message"></textarea>
                                                       </div>
                                                </form>
                                                <div class="mt-3 pt-1">
                                                       <a href="#!" class="btn btn-primary w-100">Send</a>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                          <div class="row text-center">
                                                <div class="col-lg-12">
                                                       <div class="border p-3 rounded bg-light-subtle">
                                                             <h4>Login And Password</h4>
                                                             <p class="mb-0">If you have a FoxPixel. account and can't log in, try to reset your password. If you're still having trouble, you can try these tips.</p>
                                                       </div>
                                                       <div class="border p-3 rounded bg-light-subtle my-3">
                                                             <h4>Your Profile And Setting</h4>
                                                             <p class="mb-0">Your profile tells your story. You can choose what to share, such as, photos and personal information like your hometown, and who to share it with.</p>
                                                       </div>
                                                       <div class="border p-3 rounded bg-light-subtle">
                                                             <h4>Mobile And Desktop Apps</h4>
                                                             <p class="mb-0">You can use FoxPixel. to stay connected on many devices including iPhone, iPad, Android, Windows and feature phones.</p>
                                                       </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                       </div>

                 </div>
           </div>
     </div>
@endsection