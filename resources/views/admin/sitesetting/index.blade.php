@extends('admin.layouts.app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="app-content content" >
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body" >
            <section id="basic-vertical-layouts">
                <div class="row match-height">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Site Setting</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @include('admin.layouts.notify')
                                    <form class="form form-vertical" action="{{route('admin.sitesetting.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">



                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Site Name</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="site_name" value="{{ $data->site_name ??'' }}" placeholder="Site Name" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Icon</label>
                                                        @if(!empty($data->icon))
                                                        <img src="{{ asset($data->icon) }}" style="width:80px;height:80px;margin-top:5px;margin-bottom:5px" alt="">
                                                        @endif
                                                        <input type="file" id="contact-info-vertical" class="form-control" name="icon">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Favicon</label>
                                                        @if(!empty($data->fav_icon))
                                                        <img src="{{ asset($data->fav_icon) }}" style="width:80px;height:80px;margin-top:5px;margin-bottom:5px" alt="">
                                                        @endif
                                                        <input type="file" id="contact-info-vertical" class="form-control" name="fav_icon">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Phone</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="phone" value="{{ $data->phone ??'' }}" placeholder="Phone" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Email</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="email" value="{{ $data->email ??'' }}" placeholder="email" >
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Address</label>
                                                        <textarea name="address" class="form-control">{{ $data->address ??'' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Facebook</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="facebook" value="{{ $data->facebook ??'' }}" placeholder="Facebook" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Twitter</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="twitter" value="{{ $data->twitter ??'' }}" placeholder="Twitter" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Linkedin</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="linkedin" value="{{ $data->linkedin ??'' }}" placeholder="Linkedin" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Instragram</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="instragram" value="{{ $data->instragram ??'' }}" placeholder="Instragram" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Whatsapp</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="whatsapp" value="{{ $data->instragram ??'' }}" placeholder="Instragram" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">YouTube</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="youtube" value="{{ $data->youtube ??'' }}" placeholder="Youtube" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Years of Experience</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="years_of_experience" value="{{ $data->years_of_experience ??'' }}" placeholder="Years of Experience" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Total Customers</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="customers" value="{{ $data->customers ??'' }}" placeholder="Customers" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Projects</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="projects" value="{{ $data->projects ??'' }}" placeholder="Projects" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Awards</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="awards" value="{{ $data->awards ??'' }}" placeholder="Awards" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Opening Day</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="opening_day" value="{{ $data->opening_day ??'' }}" placeholder="Opening Day" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Opening Time</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="opening_time" value="{{ $data->opening_time ??'' }}" placeholder="Opening Time" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Meta Title</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="meta_title" value="{{ $data->meta_title ??'' }}" placeholder="Meta Title" >
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Map</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="map" value="{{ $data->map ??'' }}" placeholder="Map">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Meta Description</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="meta_description" value="{{ $data->meta_description ??'' }}" placeholder="Meta Description" >
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Meta Keywords</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="meta_keywords" value="{{ $data->meta_keywords ??'' }}" placeholder="Meta Keywords" >
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Save</button>
                                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    $('#summernote').summernote({
      placeholder: 'Description Text here',
      tabsize: 2,
      styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>


@endsection
