<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        @foreach ($portofolio as $portof)
        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">This is an example of portfolio detail</h2>

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{asset('tempassetlanding/assets/img/portfolio/portfolio-details-1.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('tempassetlanding/assets/img/portfolio/portfolio-details-2.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('tempassetlanding/assets/img/portfolio/portfolio-details-3.jpg')}}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>{{$portof->name_app}}</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
            </ul>

            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
          </div>

        </div>

        @endforeach
       
      </div>
    </div>
    <!-- End Portfolio Details -->

  </main><!-- End #main -->


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