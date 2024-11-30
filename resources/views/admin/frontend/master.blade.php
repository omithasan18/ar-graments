<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font-awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap cdn css link  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    
    <!-- animate link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
    <!-- custom css link  -->
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.min.css') }}">


    <title>Home </title>


</head>
<body class="bg-im ">
    
    <!--Main Navigation start-->
    @include('admin.frontend.layouts.header')
    <!--Main Navigation end-->

    <!-- main content start -->
     @yield('content')
    <!-- main content end -->

    <!-- got to top btn  -->
    <button id="scrollBtn" class="progress-btn">
        <span id="progressBorder"></span>↑
    </button>
    
    <!-- footer start  -->
    @include('admin.frontend.layouts.footer')


  <!-- boostrap cdn js link  -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

  <!-- boostrap js link  -->
   <script src="{{ asset('frontend/asset/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
   <!-- custom js link  -->
   <script src="{{ asset('frontend/asset/js/app.js') }}"></script>


</body>
</html>