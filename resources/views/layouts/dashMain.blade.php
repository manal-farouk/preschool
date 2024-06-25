<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('includes.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('includes.sidebar')
  <!-- End Sidebar-->

  @include('includes.main')
 <!-- End #main -->
 
@yield('header')

  <!-- ======= Footer ======= -->
  @include('includes.footer')
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  @include('includes.footerJs')
</body>

</html>
