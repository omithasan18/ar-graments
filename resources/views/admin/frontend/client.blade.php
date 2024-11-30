@extends('admin.frontend.master')
@section('content')

<main>

        <!-- page top start  -->
        <section class="page-top">
            <div class="page-top-bg"><img src="{{ asset($setting->fav_icon) }}" alt="..."></div>
            <div class="container">
                <h1 class="heading text-center">{{ $header->client_title }}</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>clients</span></div>
            </div>
        </section>
     
        <!-- page top end -->

        <!-- clients start  -->
        <section class="clients client-page-bg section-padding">
            <div class="container">
                <div class="row g-3 g-lg-4  mt-3 mt-lg-4 row-cols-2 row-cols-lg-5">
                    @foreach($clients as $obj)
                    <div class="col">
                        <div class=" client-card ">
                            <img src="{{ asset($obj->image)}}" class="client-item" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>

@endsection