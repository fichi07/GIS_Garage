@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="text-center my-3">
    @if($kor[0]->image)
      <img src="{{ asset('storage/'. $kor[0]->image) }}" class="card-img-top" alt="{{ $kor[0]->nama }}">
    @else
      <img src="https://source.unsplash.com/1200x400?{{ $kor[0]->nama }}" class="card-img-top" alt="{{ $kor[0]->nama }}">
    @endif
      <div class="card-body">
        <h5 class="card-title">{{ $kor[0]->nama }}</h5>
        <p class="card-text">{{ $kor[0]->alamat }}</p>
        <div class="row">
            <p class="card-text col-md-6"><small class="text-dark"><i data-feather="clock"></i> Jam buka : {!! \Carbon\Carbon::parse($kor[0]->jam_buka)->format('H:i') !!} WIB</small></p>
            <p class="card-text col-md-6"><small class="text-dark"><i data-feather="clock"></i> Jam tutup : {!! Carbon\Carbon::parse($kor[0]->jam_tutup)->format('H:i') !!} WIB</small></p>
        </div>
        <div class="row">
            <p class="card-text col-md-6"><small class="text-muted"><i data-feather="plus"></i> {{ $kor[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text col-md-6"><small class="text-muted"><i data-feather="edit"></i> {{ $kor[0]->updated_at->diffForHumans() }}</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div id="map" style="height: 500px; margin: 50px;">
        <script>
            // var map = L.map('map').setView([-0.471852, 117.160556], 13);
            var curLocation = [0, 0];
            if (curLocation[0] == 0 && curLocation[1] == 0) {
                curLocation = [<?= $kor[0]->x ?>, <?= $kor[0]->y ?>]
            }
            var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                osm = L.tileLayer(osmUrl, {
                    maxZoom: 18,
                    attribution: osmAttrib
                });
            var map = L.map('map').setView([<?= $kor[0]->x ?>, <?= $kor[0]->y ?>], 15).addLayer(osm);

            var redIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            <?php foreach ($kor as $data) { ?>
                  var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>],{icon: redIcon}).addTo(map);
                    markerLayers.bindPopup('<?= $data->nama ?>'+ '<br>' + '<?= $data->alamat ?>' + '<br>' + '<?= $data->no_hp ?>' +'<br> Jam Operasional : '+' <?= $data->jam_buka ?>' +' : '+'<?= $data->jam_tutup ?>' +
                        '<br><button class="btn btn-info btn-sm mb-2" onclick="keSini(<?= $data->x ?>, <?= $data->y ?>)">Ke Sini</button>');
                <?php } ?>

        </script>
    </div>
</div>
@endsection
