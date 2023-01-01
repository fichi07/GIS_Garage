<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Deuwi Satriya Irawan">
  <meta name="webgis umkm laundry" content="webgis umkm laundry using bootstrap and jquery leaflet">
  <title>GIS Bengkel</title>
  <!-- Bootstrap CSS -->
  <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Leaflet JS -->
  <link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <script type="text/javascript" src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <link type="text/css" rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}">
  <script type="text/javascript" src="{{ asset('leaflet/leaflet.js') }}"></script>
  <!-- Leaflet Search -->
  <link type="text/css" rel="stylesheet" href="{{ asset('leaflet-search/dist/leaflet-search.min.css') }}">
  <script type="text/javascript" src="{{ asset('leaflet-search/dist/leaflet-search.min.js') }}"></script>
  <!-- jQuery -->
  <!--
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('jQuery/jquery-3.6.0.js') }}"></script>
    -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('jQuery/jquery-3.6.0.min.js') }}"></script>
  <!-- Style for yajra datatable-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/r-2.3.0/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('datatable/datatables.min.css') }}">
  <!-- Leaflet Routing Machine -->
  <link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
  <script type="text/javascript" src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
  <link type="text/css" rel="stylesheet" href="{{ asset('leaflet-routing-machine/dist/leaflet-routing-machine.css') }}" />
  <!--link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" /-->
  <script type="text/javascript" src="{{ asset('leaflet-routing-machine/dist/leaflet-routing-machine.js') }}"></script>
  <script type="text/javascript" src="{{ asset('leaflet-routing-machine/examples/Control.Geocoder.js') }}"></script>

  <!-- Bootstrap Dashboard -->
  <link rel="canonical" type="text/css" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
  <link rel="canonical" type="text/css" href="https://getbootstrap.com/docs/5.2/examples/footers/">

  <style type="text/css">
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

  </style>

  <!-- Custom styles for this template -->
  <link type="text/css" href="{{ asset('bootstrap/dashboard/dashboard.css') }}" rel="stylesheet">

</head>
<body>
