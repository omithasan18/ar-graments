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
                                <h4 class="card-title">Header Setting</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @include('admin.layouts.notify')
                                    <form class="form form-vertical" action="{{route('admin.headersetting.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">About Title</label>
                                                        <input type="text" id="about_title-vertical" class="form-control" name="about_title" value="{{ $data->about_title ??'' }}" placeholder="About Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> About Note </label>
                                                        <textarea type="text" id="about_note"  class="form-control" name="about_note"  placeholder="About Note">{!! $data->about_note ??'' !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Management Title</label>
                                                        <input type="text" id="management-title-vertical" class="form-control" name="management_title" value="{{ $data->management_title ??'' }}" placeholder="Mangement Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> Management Note </label>
                                                        <textarea type="text" id="management_note"  class="form-control" name="management_note"  placeholder="Mangement Note">{!! $data->management_note ??'' !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Certification Title</label>
                                                        <input type="text" id="certification-title-vertical" class="form-control" name="certification_title" value="{{ $data->certification_title ??'' }}" placeholder="Certification Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> Certification Note </label>
                                                        <textarea type="text" id="certification_note"  class="form-control" name="certification_note"  placeholder="Certification Note">{!! $data->certification_note ??'' !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Collection Title</label>
                                                        <input type="text" id="collection_title-vertical" class="form-control" name="collection_title" value="{{ $data->collection_title ??'' }}" placeholder="Collection Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> Collection Note </label>
                                                        <textarea type="text" id="collection_note"  class="form-control" name="collection_note"  placeholder="Collection Note">{!! $data->collection_note ??'' !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Client Title</label>
                                                        <input type="text" id="client_title-vertical" class="form-control" name="client_title" value="{{ $data->client_title ??'' }}" placeholder="Client Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> Client Note </label>
                                                        <textarea type="text" id="client_note"  class="form-control" name="client_note"  placeholder="Client Note">{!! $data->client_note ??'' !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Career Title</label>
                                                        <input type="text" id="career_title-vertical" class="form-control" name="career_title" value="{{ $data->career_title ??'' }}" placeholder="Career Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> Career Note </label>
                                                        <textarea type="text" id="career_note"  class="form-control" name="career_note"  placeholder="Career Note">{!! $data->career_note ??'' !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Contact Title</label>
                                                        <input type="text" id="contact_title-vertical" class="form-control" name="contact_title" value="{{ $data->contact_title ??'' }}" placeholder="Contact Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> Career Note </label>
                                                        <textarea type="text" id="contact_note"  class="form-control" name="contact_note"  placeholder="Contact Note">{!! $data->contact_note ??'' !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Industry Title</label>
                                                        <input type="text" id="industry_title-vertical" class="form-control" name="industry_title" value="{{ $data->industry_title ??'' }}" placeholder="Industry Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> Industry Note </label>
                                                        <textarea type="text" id="industry_note"  class="form-control" name="industry_note"  placeholder="Industry Note">{!! $data->industry_note ??'' !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Key Title</label>
                                                        <input type="text" id="key_title-vertical" class="form-control" name="key_title" value="{{ $data->key_title ??'' }}" placeholder="Key Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> Key Note </label>
                                                        <textarea type="text" id="key_note"  class="form-control" name="key_note"  placeholder="Key Note">{!! $data->key_note ??'' !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Footer Title</label>
                                                        <input type="text" id="footer_title-vertical" class="form-control" name="footer_title" value="{{ $data->footer_title ??'' }}" placeholder="Footer Title" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical"> Footer Note </label>
                                                        <textarea type="text" id="footer_note"  class="form-control" name="footer_note"  placeholder="Footer Note">{!! $data->footer_note ??'' !!}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-6">
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
