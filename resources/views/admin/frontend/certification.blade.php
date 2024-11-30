@extends('admin.frontend.master')
@section('content')

 <main>

        <!-- page top start  -->
        <section class="page-top">
            <div class="page-top-bg"><img src="{{ asset($setting->fav_icon) }}" alt="..."></div>

            <div class="container">
                <h1 class="heading text-center">{{ $header->certification_title }}</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>Certification</span></div>
            </div>
            
        </section>
        <!-- page top end -->

        <!-- clients start  -->
        <section class="clients client-page-bg section-padding">
            <div class="container">
                <div class="row g-4 g-lg-5 mt-4 mt-lg-5 row-cols-1 row-cols-md-3">
                    @foreach($certifications as $obj)
                        <div class="col"><img src="{{ asset($obj->image)}}" class="certificate" alt=""></div>
                    @endforeach
                </div>
            </div>
        </section>


    </main>

@endsection