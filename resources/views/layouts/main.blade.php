<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title ?? env('APP_NAME') ?? '' }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}?v{{ \Illuminate\Support\Str::random() }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}?v{{ \Illuminate\Support\Str::random() }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}?v{{ \Illuminate\Support\Str::random() }}" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  @stack('css')

</head>

<body>

  @include('partials._header', ['title' => $title])

  <div style="margin-top: 75px">
    @yield('content')
  </div>

  @include('partials._footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="//code.tidio.co/62bfidlxjjfsw8w0pvg3wxf4rm61zxhc.js" async></script>
  <script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}?v{{ \Illuminate\Support\Str::random() }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="{{ asset('js/global.js') }}?v{{ \Illuminate\Support\Str::random() }}"></script>

  @stack('js')

    <!-- TrustedForm -->
    <script type="text/javascript">
        (function() {
            var tf = document.createElement('script');
            tf.type = 'text/javascript'; tf.async = true;
            tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s);
        })();

        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <noscript>
        <img src="https://api.trustedform.com/ns.gif" />
    </noscript>
    <!-- End TrustedForm -->
</body>

</html>
