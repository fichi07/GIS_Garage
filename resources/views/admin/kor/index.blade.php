@extends('admin.layouts.main')

@section('content')
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
                var map = L.map('map').setView([<?= $kor[0]->x ?>, <?= $kor[0]->y ?>], 13).addLayer(osm);

                var data = [
                    <?php foreach ($kor as $key => $value) { ?>
                        {"lokasi":[<?= $value->x ?>, <?= $value->y ?>], "nama":"<?= $value->nama ?>"
                        },
                    <?php } ?>
                ];

                //layer contain searched elements
                var markersLayer = new L.LayerGroup();
                map.addLayer(markersLayer);

                //Routing Machine Liedman
                var control=L.Routing.control({
                    waypoints: [
                    ],
                    routeWhileDragging: true,
                    geocoder: L.Control.Geocoder.nominatim()
                })
                .on('routesfound', function(e) {
                    var routes = e.routes;
                    alert('Found ' + routes.length + ' route(s).');
                })
                .addTo(map);

                function dariSini(lat,lng){
                var latLng= L.latLng(lat, lng);
                control.spliceWaypoints(0, 1, latLng);
                }

                function keSini(lat,lng){
                var latLng= L.latLng(lat, lng);
                control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
                }

                //Search dengan menandai titik yang dicari
                map.addControl( new L.Control.Search({
                    layer: markersLayer,
                    initial: false,
                    zoom: 18,
                    collapsed: true,
                }) );

                ////////////populate map with markers from sample data
                for(i in data) {
                    var nama = data[i].nama;  //value searched
                    var lokasi = data[i].lokasi;      //position found
                    var marker = new L.circleMarker(new L.latLng(lokasi), {title: nama} );//see property searched
                    marker.bindPopup('Nama: '+ nama );
                    markersLayer.addLayer(marker);
                }


            </script>
            @foreach ($kor as $data)
                <script>
                    var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);

                    L.marker([ <?= $data->x ?>, <?= $data->y ?>]).addTo(map).bindPopup('<?= $data->nama ?>'+ '<br>' + '<?= $data->alamat ?>' + '<br>' + '<?= $data->no_hp ?>' +'<br> Jam Operasional : '+' <?= $data->jam_buka ?>' +' : '+'<?= $data->jam_tutup ?>' +'<br>'+'{!! \Carbon\Carbon::now()->format('H:i:s')>=$data->jam_buka&&\Carbon\Carbon::now()->format('H:i:s')<$data->jam_tutup?'<span class="text-success"> Buka</span>':'<span class=" text-danger"> Tutup</span>' !!}' +'<br><br>'+
                        '<button class="btn btn-info btn-sm mb-2" onclick="dariSini(<?= $data->x ?>, <?= $data->y ?>)">Dari Sini</button>'+
                        '<br><button class="btn btn-info btn-sm mb-2" onclick="keSini(<?= $data->x ?>, <?= $data->y ?>)">Ke Sini</button>'+
                        '<br><a href="/dashboard/titik/<?= $data->id ?>" class="text-decoration-none text-dark">Selengkapnya</a>').openPopup();

                </script>
            @endforeach
        </div>
    </div>
@endsection
