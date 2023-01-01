<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Deuwi Satriya Irawan">
  <meta name="webgis Bengkel" content="webgis Bengkel and jquery leaflet">
  <title>SIG Bengkel</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Leaflet JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <link rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}">
  <script src="{{ asset('leaflet/leaflet.js') }}"></script>
  <!-- Leaflet Search -->
  <link rel="stylesheet" href="{{ asset('leaflet-search/dist/leaflet-search.min.css') }}">
  <script src="{{ asset('leaflet-search/dist/leaflet-search.min.js') }}"></script>
  <!-- jQuery -->
  <!--
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('jQuery/jquery-3.6.0.js') }}"></script>
    -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('jQuery/jquery-3.6.0.min.js') }}"></script>
  <!-- Leaflet Routing Machine -->
  <link rel="stylesheet" href="{{ asset('leaflet-routing-machine/dist/leaflet-routing-machine.css')}}" />
  <!--link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" /-->
  <script src="{{asset('leaflet-routing-machine/dist/leaflet-routing-machine.js')}}"></script>
  <script src="{{asset('leaflet-routing-machine/examples/Control.Geocoder.js')}}"></script>

  <!-- Custom fonts for this template-->
  <link href="sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  {{-- <link href="sbadmin2/css/sb-admin-2.min.css" rel="stylesheet"> --}}

  <!-- Custom styles for this template -->
  {{-- <link href="{{ asset('bootstrap/sign-in/signin.css') }}" rel="stylesheet"> --}}
</head>
<body>

  @include('layouts.navbar')

  <!-- Main Content -->
  <div class="container container-fluid">
    @yield('content')
  </div>

 

  <!-- Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Feather Icon -->
  <!-- <script src="https://unpkg.com/feather-icons"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script src="{{ asset('feather/feather.min.js') }}"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script> -->
  <script>
    feather.replace()
  </script>

  <!-- Core plugin JavaScript-->
  <script src="sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="sbadmin2/js/sb-admin-2.min.js"></script>
</body>
</html>
