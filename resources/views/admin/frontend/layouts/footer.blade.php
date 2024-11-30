<footer class="footer section-padding">
        <div class="container">
            <div class="row g-4 row-cols-1 row-cols-md-3">
                <div class="col">
                    <div class="footer-box">
                        <h2 class="title"></h2>
                        <img src="{{ $setting->icon }}" class="logo" alt="">

                        <h5 class="card-title mt-3 mt-lg-5">Follow Us</h5>
                        <ul class="social-media mt-3 d-flex">
                            <li><a href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="{{ $setting->instragram }}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{ $setting->youtube }}"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>

                </div>

                <div class="col">
                    <div class="footer-box">
                        <h2 class="title">Contact</h2>

                        <ul class=" footer-items mt-3 ">
                            <li><a href="#"><i class="fa-solid fa-phone me-2"></i>{{ $setting->phone }}</a></li>
                            <li><a href="#"><i class="fa-solid fa-envelope me-2"></i>{{ $setting->email }} </a></li>
                            <li><a href="#"><i class="fa-solid fa-location-dot me-2"></i>{{ $setting->address }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="footer-box">
                        <h2 class="title">Quick Link</h2>

                        <ul class="footer-items mt-3 ">
                            <li class="text-capitalize"><a href="{{ url('client')}}"><i class="fa-solid fa-arrow-right-long me-2"></i>Client</a></li>
                            <li class="text-capitalize"><a href="{{ url('industry')}}"><i class="fa-solid fa-arrow-right-long me-2"></i>Industry</a></li>
                            <li class="text-capitalize"><a href="{{ url('collection')}}"><i class="fa-solid fa-arrow-right-long me-2"></i>Collection</a></li>
                            <li class="text-capitalize"><a href="{{ url('career')}}"><i class="fa-solid fa-arrow-right-long me-2"></i>Career</a></li>
                            <li class="text-capitalize"><a href="{{ url('certification')}}"><i class="fa-solid fa-arrow-right-long me-2"></i>Certification</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <hr class="m-0">
        <div class="copyright text-center p-3 text-primary">
            <span>{{ $header->key_title }}</span>
        </div>
    </footer>