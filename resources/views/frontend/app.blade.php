@include('frontend.include.head')
<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
@include('frontend.include.header')
@yield('content')
@include('frontend.include.footer')
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/frontend/assets/vendor/aos/aos.js"></script>
  <script src="/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/frontend/assets/js/main.js"></script>
</body>
</html>