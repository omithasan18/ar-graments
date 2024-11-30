@extends('admin.frontend.master')
@section('content')

 <main>

        <!-- page top start  -->
        <section class="page-top">
            <div class="page-top-bg"><img src="{{ asset($setting->fav_icon) }}" alt="..."></div>

            <div class="container">
                <h1 class="heading text-center">{{ $header->industry_title }}</h1>
                <div class="text-center mt-4"><span class="btn-nav  rounded-pill text-uppercase ">home<i class="fa-solid fa-angle-right mx-2"></i>Industries</span></div>
            </div>
            
        </section>
        <!-- page top end -->

        <section class="industries section-padding">
            <div class="container">
                
                <div class="row g-3 g-lg-4 row-cols-1 row-cols-lg-2 ">

                    <!-- industries-card start  -->
                    @foreach($industries as $obj)
                    <div class="col">
                        <div class="card border-0 industries-card">
                            <img src="{{asset( $obj->bg_image )}}" class="industries-cover" alt="...">
                            <img src="{{asset( $obj->image )}}" class="industries-logo rounded-circle" alt="">
                            <div class="card-body p-lg-4">
                                <h3 class="title text-capitalize">{{ $obj->name }}</h3>
                                <div class="d-flex mb-3 justify-content-between">
                                    <h5 class="card-title  text-capitalize">{{ $obj->category }}</h5>
                                    <h5 class="card-title  text-capitalize ">Employee: <span>{{ $obj->total_employee }}</span></h5>
                                    <h5 class="card-title  text-capitalize">Established: <span>{{ $obj->establish }}</span></h5>
                                </div>
                                <p class="card-text mt-2">{!! $obj->description !!}</p>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>

            </div>
        </section>


    </main>

@endsection