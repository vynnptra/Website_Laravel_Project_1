<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('layout.assets')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        @include('layout.loading')
        <!-- Sidebar Start -->
        @include('layout.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            @include('layout.navbar')
            @include('layout.card')

            
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    @yield('content')
                </div>    
            </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('layout.js')
</body>

</html>
