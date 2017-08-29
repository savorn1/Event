@extends('layouts.app')
@section('after-styles')
    <style type="text/css">
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 400px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }
        #target {
            width: 345px;
        }
    </style>
    @endsection
@section('content')
    <header>
        <div class="container">
            <div class="row">
               <div class="nav1">
                   <div class="col-md-12">
                   </div>
               </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Course:
                        <span>"Marketing Principles - Learning Outcome 1 (1.1) Marketing Process"</span>
                    </h2>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <a href="" class="btn btn-success btn-lg btn-block">Register</a>
                    </div>
                </div>

            </div>


            <div class="clearfix"></div>
            <br>
            <div class="col-md-12">
                <div class="contentInner themeScroll">
                    <div class="col-xs-8" style="width: 600px; height: 350px">
                        <img style=" width:600px; height: 350px; float: left"
                             src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg"
                             class="img-responsive center-block">
                    </div>

                    <div class="col-md-4">
                        <label> Date: </label>
                        <br>
                        <br>
                        <label>Title of Event</label>
                        <p>
                            created by
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <hr>
                                <label>Description:</label>
                                <p>
                                    The rapid change in the market especially in Cambodia demands for more creative
                                    communication strategies to connect with these emerging millenial. The lecture
                                    series will give
                                    you the nuts and bolts in today's advertising field. Each session runs for 1.5hrs
                                    every Saturday.
                                    Once you have completed the four sessions, you will be given a certificate both from
                                    PUC and PHIBIOUS.
                                    Speakers will come from PHIBIOUS Cambodia, Campaign Asia's most awarded Independent
                                    Agency in Southeast Asia.
                                    This is an opportunity for you to learn the real industry practice from advertising
                                    professionals. Our big THANKS
                                    to PHIBIOUS for making this happen. For details, contact 010 251 248.
                                    The rapid change in the market especially in Cambodia dema
                                    The rapid change in the market especially in Cambodia dema
                                    The rapid change in the market especially in Cambodia dema The rapid change in the
                                    market especially in Cam
                                    bodia dema The rapid change in the market especially in Cambodia dema
                                    The rapid change in the market especially in Cambodia dema The rapid change in the
                                    market espec
                                    ially in Cambodia dema The rapid change in the market especially in Cambodia dema
                                    The rapid chan
                                    ge in the market especially in Cambodia dema
                                    The rapid change in the market especially in Cambodia dema The rapid change in the
                                    market especi
                                    ally in Cambodia dema The rapid change in the market especially in Cambodia dema The
                                    rapid change i
                                    n the market especially in Cambodia dema The rapid change in the market especially
                                    in Cambodia dema

                                </p>


                                <label>Tags</label>
                                <br>
                                <br>

                                <label>Share with </label>
                                <br>
                                <br>
                                <div class="wrapper">
                                    <i class="fa fa-5x fa-facebook-square"></i>
                                    <i class="fa fa-5x fa-twitter-square"></i>
                                    <i class="fa fa-5x fa-instagram"></i>
                                    <i class="fa fa-5x fa-snapchat-square"></i>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-5">
                            <hr>
                            <label>
                                Date and Time
                            </label>
                            <p>
                                It is influenced heavily by the company’s culture, its attitudes and beliefs about
                                the marketing concept. For some, marketing isn’t planned in a proactive way, rather
                                it reacts to market forces. For others, the planning process is constant, formal and
                                integral to the organisation’s systems.
                            </p>
                            <p>
                                Of course, marketing today is a far more complex process, but it’s not just a
                                discipline carried out only by large businesses. All organisations need to employ
                                some form of marketing, whether they are sole traders or global brand giants.
                            </p>
                            <label>
                                LOCATION
                            </label>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <img src="http://i.imgur.com/HB96qd8.jpg" alt=""
                                     class="img-responsive center-block">
                            </div>
                        </div>
                        <div class="col-md-12">
                            {{--<p>--}}
                                {{--And there are many different approaches to planning the marketing strategy. Again,--}}
                                {{--this approach is not influenced by the size of the business, nor the type of--}}
                                {{--product/service.--}}
                            {{--</p>--}}
                            <input id="pac-input" class="form-controll" type="text" placeholder="Search Box">
                            <div id="map"></div>
                            <script>
                                // This example adds a search box to a map, using the Google Place Autocomplete
                                // feature. People can enter geographical searches. The search box will return a
                                // pick list containing a mix of places and predicted search terms.

                                // This example requires the Places library. Include the libraries=places
                                // parameter when you first load the API. For example:
                                // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

                                function initAutocomplete() {
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        center: {lat: -33.8688, lng: 151.2195},
                                        zoom: 13,
                                        mapTypeId: 'roadmap'
                                    });

                                    // Create the search box and link it to the UI element.
                                    var input = document.getElementById('pac-input');
                                    var searchBox = new google.maps.places.SearchBox(input);
                                    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                                    // Bias the SearchBox results towards current map's viewport.
                                    map.addListener('bounds_changed', function() {
                                        searchBox.setBounds(map.getBounds());
                                    });

                                    var markers = [];
                                    // Listen for the event fired when the user selects a prediction and retrieve
                                    // more details for that place.
                                    searchBox.addListener('places_changed', function() {
                                        var places = searchBox.getPlaces();

                                        if (places.length == 0) {
                                            return;
                                        }

                                        // Clear out the old markers.
                                        markers.forEach(function(marker) {
                                            marker.setMap(null);
                                        });
                                        markers = [];

                                        // For each place, get the icon, name and location.
                                        var bounds = new google.maps.LatLngBounds();
                                        places.forEach(function(place) {
                                            if (!place.geometry) {
                                                console.log("Returned place contains no geometry");
                                                return;
                                            }
                                            var icon = {
                                                url: place.icon,
                                                size: new google.maps.Size(71, 71),
                                                origin: new google.maps.Point(0, 0),
                                                anchor: new google.maps.Point(17, 34),
                                                scaledSize: new google.maps.Size(25, 25)
                                            };

                                            // Create a marker for each place.
                                            markers.push(new google.maps.Marker({
                                                map: map,
                                                icon: icon,
                                                title: place.name,
                                                position: place.geometry.location
                                            }));

                                            if (place.geometry.viewport) {
                                                // Only geocodes have viewport.
                                                bounds.union(place.geometry.viewport);
                                            } else {
                                                bounds.extend(place.geometry.location);
                                            }
                                        });
                                        map.fitBounds(bounds);
                                    });
                                }
                            </script>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('after-script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCE9rYyj-NUbxuvSJItH1ZI89FxtsYUxgs&libraries=places&callback=initAutocomplete"
            async defer></script>

@endsection