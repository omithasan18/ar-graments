<header class="">
        <!-- main categories start -->
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container">

                <a class="navbar-brand " href="{{ url('admin/login') }}" >
                    <img src="{{ asset($setting->icon) }}" class="object-fit-cover logo" alt="logo">
                </a>

                <button  class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body overflow-visible">

                        <!-- navbar-nav  -->
                        <ul class="navbar-nav justify-content-end flex-grow-1 p-0 m-0">

                            <li class="nav-item " data-bs-dismiss="offcanvas" data-bs-dismiss="offcanvas">
                                <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ url('ar-garments') }}"> Home </a>
                            </li>
                            <li class="nav-item " data-bs-dismiss="offcanvas">
                                <a class="nav-link text-capitalize p-0" aria-current="page" href="#"> About
                                    <ul class="sub-item-wrap">
                                        <li class="sub-item"><a href="{{ url('comphany-profile') }}">Comphany Profile</a></li>
                                        <li class="sub-item"><a href="{{ url('management-profile') }}">Our Managements</a></li>
                                        <li class="sub-item"><a href="#"></a></li>
                                    </ul>
                                </a>
                            </li>
                            <li class="nav-item " data-bs-dismiss="offcanvas">
                                <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ url('client') }}"> Clients</a>
                            </li>
                            <li class="nav-item " data-bs-dismiss="offcanvas">
                                <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ url('industry') }}"> Industries</a>
                            </li>
                            <li class="nav-item " data-bs-dismiss="offcanvas">
                                <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ url('collection') }}"> Collections</a>
                            </li>
                            <li class="nav-item " data-bs-dismiss="offcanvas">
                                <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ url('career') }}"> Career</a>
                            </li>
                            <li class="nav-item " data-bs-dismiss="offcanvas">
                                <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ url('certification') }}"> Certification</a>
                            </li>
                            <!-- <li class="nav-item " data-bs-dismiss="offcanvas">
                                <a class="nav-link text-capitalize p-0" aria-current="page" href="#"> Webmail</a>
                            </li> -->
                            <li class="nav-item " data-bs-dismiss="offcanvas">
                                <a class="nav-link text-capitalize p-0" aria-current="page" href="{{ url('contact') }}"> Contact</a>
                            </li>
                        </ul>

                        <!-- book an appoinment btn  -->
                        <!-- <a href="#" class="btn btn-primary rounded-pill text-uppercase">Certification</a> -->

                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar top end-->

        <!-- nav bottom start  -->
        <nav class="fixed-bottom bg-white nav-bottom" >
        
            <div class="container">
                <div class=" " >
                    <ul class="d-flex justify-content-between " >
                        <li class="nav-item">
                            <a class="nav-link nav-link-sm text-center active" aria-current="page" href="index.html"><i class="fa-solid fa-house"></i><span class="d-block">Home</span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link nav-link-sm" href="management.html"><i class="fa-brands fa-servicestack"></i><span class="d-block">Managements</span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link nav-link-sm " href="collections.html"><i class="fa-solid fa-bars"></i><span class="d-block">Collections</span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link nav-link-sm " href="industries.html"><i class="fa-solid fa-briefcase"></i><span class="d-block">Industries</span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link nav-link-sm " href="contact.html"><i class="fa-solid fa-address-card"></i><span class="d-block">Contact</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav bottom end  -->

    
    </header>