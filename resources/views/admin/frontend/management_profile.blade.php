@extends('admin.frontend.master')
@section('content')

<main>
        <!-- page top start  -->
        <section class="page-top">
            <div class="page-top-bg"><img src="{{ asset($setting->fav_icon) }}" alt="..."></div>

            <div class="container">
                <h1 class="heading text-center">{{ $header->management_title }}</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>Management</span></div>
            </div>
            
        </section>
        <!-- page top end -->
        <!-- page top start  -->
        <section class="management section-padding">
            <div class="container">
                <h1 class="section-heading"></h1>
                <p class="text text-center"></p>
                <div class="slider-container overflow-x-hidden mt-md-4 pt-4">
                    <div class="slider-wrapper">

                        @foreach($managements as $obj) 
                        <div class="card border-0 management-card">
                            <img src="{{ asset($obj->bg_image)}}" class="user-cover" wdith ="60%" alt="...">
                            <img src="{{ asset($obj->image)}}" class="user-photo rounded-circle" alt="">
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


    </main>

@endsection