@extends('admin.frontend.master')
@section('content')

 <main class="">
        
        <!-- page top start  -->
        <section class="page-top">
            <div class="page-top-bg"><img src="{{ asset($setting->fav_icon) }}" alt="..."></div>

            <div class="container">
                <h1 class="heading text-center">{{ $header->contact_title }}</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>contact</span></div>
            </div>
            
        </section>
        <!-- page top end -->

        <section class="contact-us">
            <div class="container">
                <div class="contact-wrap">

                    <div class="row g-4 row-cols-2 row-cols-lg-4">
                        <div class="col">
                            <div class="contact-card">
                                <img src="{{ asset($setting->icon) }}" alt="...">
                                <h2 class="title mt-2 mt-lg-4">{{ $setting->address }} </h2>
                                <p class="text mt-2"></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="contact-card">
                                <img src="{{ asset($setting->icon) }}" alt="...">
                                <h2 class="title mt-2 mt-lg-4">{{ $setting->phone }}</h2>
                                <p class="text mt-2"></p>
                                <p class="text mt-2"></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="contact-card">
                                <img src="{{ asset($setting->icon) }}" alt="...">
                                <h2 class="title mt-2 mt-lg-4">{{ $setting->email }} </h2>
                                <p class="text mt-2"></p>
                                <p class="text mt-2"></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="contact-card">
                                <img src="{{ asset($setting->icon) }}" alt="...">
                                <h2 class="title mt-2 mt-lg-4">Working Hours </h2>
                                <p class="text mt-2"> {{ $setting->opening_day }}</p>
                                <p class="text mt-2"> {{ $setting->opening_time }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="google-map">
            <iframe src="{{ asset($setting->map) }}" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <!--  start  -->
        <section class="support-form">
            <div class="object-right"><img src="asset/img/contact-form-in-object-one.png" alt="..."></div>
            <div class="container">
                <div class="row g-0 g-md-5">

                    <div class="col-12 col-md-5">
                        <!-- section heading start  -->
                        <div class="section-heading">
                            <div class="heading-style d-flex align-items-center">
                                <div class="left">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                                <div class="right">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                                <h2 class="sub-heading ms-2">Support Form</h2>
                            </div>
                        </div>

                        <h1 class="heading"> Message Us</h1>
                        <p class="text mb-5">{{ $header->contact_note }}</p>

                        
                    </div>

                    <!-- form start  -->
                    <div class="col-12 col-md-7">
                        <form class="form form-vertical" action="{{url('message/submit')}}" method="POST">
                            @csrf

                            <div class="row row-cols-2 g-3 g-md-4">
                                <div class="col">
                                    <input type="text" class="form-control rounded-3 " name="first_name" id="first_name" placeholder="First Name * " required = "required">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded-3 " name="last_name" id="last_name" placeholder="Last Name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded-3 " name="company" id="company" placeholder="Comphany">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded-3 " required = "required" name="phone" id="phone" placeholder="Mobile No * ">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded-3 " name="email" id="mobile" placeholder="Email * " required = "required">
                                </div>
                            </div>

                            <div class="mb-md-5 mb-4 mt-3 mt-md-4">
                                <textarea class="form-control rounded-3" id="message" rows="5" name="message" placeholder="Your message *" required = "required"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary rounded-pill" >Submit Now</button>
                        </form>
                    </div>


                </div>
            </div>
        
        </section>
        <!--  end -->


     </main>

@endsection