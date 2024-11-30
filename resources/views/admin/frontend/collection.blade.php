@extends('admin.frontend.master')
@section('content')

<main>

        <!-- page top start  -->
        <section class="page-top">
            <div class="page-top-bg"><img src="{{ asset($setting->fav_icon) }}" alt="..."></div>

            <div class="container">
                <h1 class="heading text-center">{{ $header->collection_title }}</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>collections</span></div>
            </div>
            
        </section>
        <!-- page top end -->

        <!-- collections start  -->
        <section class="collections section-padding" >
            <div class="container">
                <div class="row g-3 g-lg-4 row-cols-2 row-cols-lg-5">
                    @foreach($collections as $obj)
                    <div class="col">
                        <div class="item5-card collection-card ">
                            <img src="{{ asset( $obj->image )}}" class="collection-item" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


    </main>

@endsection