<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">

    <title>www.riki.com</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    {{-- <link rel="icon" href="{{asset('tempassetlanding/assets/img/favicon.png')}}" > --}}
    <link rel="apple-touch-icon" href="{{ asset('tempassetlanding/assets/img/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('tempassetlanding/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tempassetlanding/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('tempassetlanding/assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tempassetlanding/assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tempassetlanding/assets/vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('tempassetlanding/assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('tempassetlanding/assets/css/style.css') }}">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        @include('landingpage.L_header.index')
    </header>
    <!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">
            @include('landingpage.L_about.index')
        </div>
        <!-- End About Me -->

        <!-- ======= Skills  ======= -->
        <div class="skills container">
            @include('landingpage.L_skills.index')
        </div>
        <!-- End Skills -->

        <!-- ======= Testimonials ======= -->
        {{-- <div class="testimonials container">
          @include('landingpage.L_Testi.index')
        </div> --}}
        <!-- End Testimonials  -->

    </section>
    <!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">
            @include('landingpage.L_resume.index')
        </div>
    </section>
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        @include('landingpage.L_porto.index')
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        @include('landingpage.L_contact.index')
    </section>
    <!-- End Contact Section -->
    <!-- /.content-wrapper -->
    <footer class="main-footer text-center">
        <strong>Copyright &copy; 2021 <a href="https://rikisubagja.com">Riki subagja</a>.</strong>
        All rights reserved.
    </footer>




    <!-- Vendor JS Files -->
    <script src="{{ asset('tempassetlanding/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('tempassetlanding/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tempassetlanding/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('tempassetlanding/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('tempassetlanding/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('tempassetlanding/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('tempassetlanding/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('tempassetlanding/assets/js/main.js') }}"></script>

</body>

</html>
