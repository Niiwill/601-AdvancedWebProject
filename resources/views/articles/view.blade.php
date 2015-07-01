@extends('app')

@section('content')

    <div class="container view">
        <div class="row-fluid">
            <div class="col-xs-8" style="padding-left: 0px;padding-right: 0px;">





                <script>



                       var Lat= {{$Lat}};
                        var Lng={{$Lng}};



                    function initialize() {
                        var myLatlng = new google.maps.LatLng(Lat,Lng);
                        var mapOptions = {
                            zoom: 8,
                            center: myLatlng
                        }

                        var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);

                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: 'Location'
                        });
                    }

                    function loadScript() {
                        var script = document.createElement('script');
                        script.type = 'text/javascript';
                        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp' +
                        '&signed_in=true&callback=initialize';
                        document.body.appendChild(script);
                    }

                    window.onload = loadScript;
                    marker.setMap(map);

                </script>

                <div id="map-canvas" style="width: 100%; height: 100%"></div>
            </div>

            <div class="col-xs-4 infoCard">
                <div class="hederView">
                <h2>{{$order->user->name}}</h2>
                </div>
                <address>
                    <h1>{{$order->adresa}}</h1>
                    <p>{{$order->telefon}}</p>
                    <p><small>{{$order->created_at}}</small></p>
                </address>
            </div>
        </div>
    </div>
@endsection
