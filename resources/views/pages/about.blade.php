@extends('layouts.app')
@section('content')

<!-- #Image -->
<div class="container-fluid">
    <img class="card-img-top" src="/pizza/storage/images/ab0.jpg"  style="height:600px;">
</div>
<hr>

<!-- Icons Grid -->
<div class="features-icons bg-light text-center">
        <div class="container">
                <div class="row">
                        <div class="col-lg-4">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                        <div class="features-icons-icon d-flex">
                                            <img class="rounded-circle" src="/pizza/storage/images/ab1.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;">
                                        </div>
                                        <br><br><br><br><br><br>
                                        <h3>Fully Responsive Team</h3>
                                        <p class="lead mb-0">We strive to create an open,engaging and employee-friendly workplace.</p>
                                </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                        <div class="features-icons-icon d-flex">
                                          <img class="rounded-circle" src="/pizza/storage/images/ab2.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;">
                                        </div>
                                        <br><br><br><br><br><br>
                                        <h3>YOUR CONSENT</h3>
                                        <p class="lead mb-0">Featuring the latest build of the new #Pizzy for you</p>
                                </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                          <img class="rounded-circle" src="/pizza/storage/images/ab3.jpg" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;">
                        </div>
                        <br><br><br><br><br><br>
                        <h3>Cancellations and Refunds</h3>
                        <p class="lead mb-0">We reserve the sole right to cancel your order</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
              <!-- Image Showcases -->
              <div class="showcase">
                <div class="container-fluid p-0">
                  <div class="row no-gutters">
            
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/pizza/storage/images/ab4.jpg');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                      <h2>Culture at Pizzy</h2>
                      <p class="lead mb-0">A comfortable working atmosphere that follows a flat and open culture along with a great office space was why we were voted as one of India's top firms to work in 2017 by LinkedIn! We know you work best when you are happy.</p>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('/pizza/storage/images/ab5.jpg');"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                      <h2>The Environment</h2>
                      <p class="lead mb-0">When your goal is to change the way the country eats, you need all the help you can get. Pizzy is an equal-opportunity employer offering competitive salaries, comprehensive health benefits and equity opportunities.</p>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/pizza/storage/images/ab6.jpg');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                      <h2>Easy to Use &amp; Customize</h2>
                      <p class="lead mb-0">The business of food delivery is undergoing rapid change every day as we are capturing markets and customers across the country. So as we grow along with the times, we are always looking for great people to join us on this exciting journey.</p>
                    </div>
                  </div>
                </div>
              </div>
            
              <!-- Testimonials -->
              <div class="testimonials text-center bg-light">
                <div class="container">
                  <h2 class="mb-5">What people are saying...</h2>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="/pizza/storage/images/a.jpg" alt="">
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="/pizza/storage/images/b.jpg" alt="">
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">"Pizzy is amazing. I've been definately prefer it to eat lots of super nice and tasty Pizzas."</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="/pizza/storage/images/c.jpg" alt="">
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">"Thanks so much for making these Pizzas available to us!"</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
              <!-- Call to Action -->
              <div class="call-to-action text-white text-center">
                <div class="overlay"></div>
                <div class="container">
                  <div class="row">
                    <div class="col-xl-9 mx-auto">
                      <h2 class="mb-4">Ready to get started? Have any queries!</h2>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                      <form>
                        <div class="form-row">
                          <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                          </div>
                          <div class="col-12 col-md-3">
                            <a href="/pizza/public/contact" class="btn btn-block btn-lg btn-primary">Contact Us!</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
@endsection