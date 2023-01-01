@extends('layouts.main')

@section('content')

<div class="container">
  <div id="map" style="height: 500px; margin: 50px;">
        <script>
            // var map = L.map('map').setView([-0.471852, 117.160556], 13);
            var curLocation = [0, 0];
            if (curLocation[0] == 0 && curLocation[1] == 0) {
                curLocation = [<?= $maps[0]->x ?>, <?= $maps[0]->y ?>]
            }
            var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                osm = L.tileLayer(osmUrl, {
                    maxZoom: 18,
                    attribution: osmAttrib
                });
            var map = L.map('map').setView([<?= $maps[0]->x ?>, <?= $maps[0]->y ?>], 15).addLayer(osm);

        </script>
       
    </div>
</div>
@endsection
