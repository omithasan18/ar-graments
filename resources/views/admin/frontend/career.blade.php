@extends('admin.frontend.master')
@section('content')

<main>

        <!-- page top start  -->
        <section class="page-top">
            <div class="page-top-bg"><img src="{{ asset($setting->fav_icon) }}" alt="..."></div>

            <div class="container">
                <h1 class="heading text-center">{{ $header->career_title }}</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>career</span></div>
            </div>
            
        </section>
        <!-- page top end -->


        <!-- career start  -->
        @foreach($careers as $obj)
        <section class="career section-padding">
            <div class="bg-img"></div>
            <div class="container">
                <div class="career-wrap">
                    <div class="career-box">
                        <h1 class="section-heading">{{ $obj->collection_title }}</h1>
                        <p class="text">{!! $obj->description !!}</p>
                    </div>
                </div>
            </div>
         </section>
        @endforeach
        <!-- career end -->


    </main>

@endsection