@extends('admin.frontend.master')
@section('content')
    <main>

        <!-- top slider start  -->
        <section class="top-slider">
            <div id="top-slider" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    @foreach ($sliders as $item)
                        <button type="button" data-bs-target="#top-slider" data-bs-slide-to="{{ $loop->iteration }}"
                            class="slider-btn {{ $loop->first ? 'active' : '' }}"
                            aria-current="{{ $loop->first ? 'true' : 'false' }}"
                            aria-label="Slide {{ $loop->iteration }}"></button>
                    @endforeach

                </div>

                <div class="carousel-inner">

                    <!-- carousel-item start  -->
                    @foreach ($sliders as $obj)
                        <div class="carousel-item active">
                            <img src="{{ asset($obj->image) }}" class="d-block slider-img" alt="...">
                            <div class="carousel-caption ">
                                <h1 class="heading text-center">{{ $setting->site_name }}</h1>
                                <h5 class="sub-heading text-center">{{ $setting->address }}</h5>
                                <p class="text text-capitalize text-center">{{ $setting->awards }}</p>
                                <a href="{{$obj->url}}" class="btn btn-secondary rounded-pill ">Explore More </a>
                            </div>
                        </div>
                    @endforeach
                    <!-- carousel-item end  -->
                </div>
            </div>
        </section>
        <!-- top slider end  -->

        <!-- about start  -->
        <section class="about section-padding">
            <div class="container">
                <h1 class="heading text-center">{{ $header->about_title }}</h1>
                <p class="text text-center px-4 px-lg-5">{{ $header->about_note }}</p>
                <h2 class="sub-heading text-center mt-4"></h2>
            </div>
        </section>
        <!-- management start  -->
        <section class="management section-padding">
            <div class="container">
                <h1 class="section-heading">{{ $header->management_title }}</h1>
                <p class="text text-center">{{ $header->management_note }}</p>
                <div class="slider-container overflow-x-hidden mt-md-4 pt-4">
                    <div class="slider-wrapper">
                        @foreach ($managements as $obj)
                            <div class="card border-0 management-card">
                                <img src="{{ asset($obj->bg_image) }}" class="user-cover" wdith ="60%" alt="...">
                                <img src="{{ asset($obj->image) }}" class="user-photo rounded-circle" alt="">
                                <div class="card-body p-lg-4">
                                    <h3 class="title text-capitalize">{{ $obj->name }}</h3>
                                    <h5 class="card-title mb-3 text-capitalize">{{ $obj->designation }}</h5>
                                    <p class="card-text">{!! $obj->description !!}</p>
                                    <p class="card-text mt-2"></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="prev-btn"><i class="fa-solid fa-circle-chevron-left"></i></button>
                    <button class="next-btn"><i class="fa-solid fa-circle-chevron-right"></i></button>
                </div>

            </div>
        </section>

        <!-- our Certification start -->

        <section class="certification section-padding">
            <div class="container">
                <h1 class="section-heading">{{ $header->certification_title }}</h1>
                <p class="text text-center">{{ $header->certification_note }}</p>
                <div class="row g-4 mt-4 mt-lg-5 row-cols-1 row-cols-md-3">
                    @foreach ($certifications as $obj)
                        <div class="col"><img src="{{ asset($obj->image) }}" class="certificate" alt=""></div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- our Certification end -->

        <!-- collections start  -->
        <section class="collections section-padding">
            <div class="container">
                <h1 class="section-heading">{{ $header->collection_title }}</h1>
                <p class="text text-center">{{ $header->collection_note }}</p>
                <div class="item5-slider-container overflow-x-hidden mt-4 mt-lg-5 mt-md-4 pb-4 pb-xl-5">
                    <div class="item5-slider-wrapper">
                        @foreach ($collections as $obj)
                            <div class="item5-card collection-card ">
                                <img src="{{ asset($obj->image) }}" class="collection-item" alt="">
                            </div>
                        @endforeach
                    </div>
                    <button class="prev-btn">&#8249;</button>
                    <button class="next-btn">&#8250;</button>
                </div>
            </div>
        </section>


        <!-- clients start  -->
        <section class="clients section-padding">
            <div class="container">
                <h1 class="section-heading">{{ $header->client_title }}</h1>
                <p class="text text-center">{{ $header->client_note }}</p>

                <div class="item5-slider-container overflow-x-hidden mt-4 mt-lg-5 mt-md-4 pb-4 pb-xl-5">
                    <div class="item5-slider-wrapper">
                        @foreach ($clients as $obj)
                            <div class="item5-card client-card ">
                                <img src="{{ asset($obj->image) }}" class="client-item" width="40%" alt="">
                            </div>
                        @endforeach
                    </div>
                    <button class="prev-btn">&#8249;</button>
                    <button class="next-btn">&#8250;</button>
                </div>
            </div>
        </section>


        <!-- career start  -->
        <section class="career section-padding">
            <div class="bg-img"></div>
            <div class="container">
                <div class="career-wrap">
                    <div class="career-box">
                        <h1 class="section-heading">{{ $header->career_title }}</h1>
                        <p class="text">{{ $header->career_note }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- career end -->

    </main>
@endsection
