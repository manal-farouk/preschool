@include('dashIncludes.head');
<body>

  <!-- ======= Header ======= -->
  @include('dashIncludes.header');
 <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('dashIncludes.sidebar');
  <!-- End Sidebar-->
  @include('dashIncludes.main');
 <!-- End #main -->

 @yield('header')

  <!-- ======= Footer ======= -->
  @include('dashIncludes.footer');
 <!-- End Footer -->
 @include('dashIncludes.footerJs');

</body>

</html>
