<script src="<?= base_url() ?>templates/kamr/js/dashboard/dashboard-1.js"></script>
<script src="<?= base_url() ?>templates/kamr/vendor/apexchart/apexchart.js"></script>
<script src="<?= base_url() ?>templates/kamr/vendor/peity/jquery.peity.min.js"></script>
<script src="<?= base_url() ?>templates/kamr/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
<script src="https://openlayers.org/en/v3.20.1/build/ol.js"></script>
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>


<script>
    var map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([121.62, -1.66]),
            zoom: 4.7
        })
    });
    var pos = ol.proj.fromLonLat([113.9213, 113.9213]);

    var layer = new ol.layer.Vector({
        source: new ol.source.Vector({
            features: [
                new ol.Feature({
                    geometry: new ol.geom.Point
                    (ol.proj.fromLonLat([105.25936749853341, -5.434311380205979]))
                })
            ]
        }),
            style: new ol.style.Style({
                image: new ol.style.Icon({
                    src:'images/location.png'
                })
            })
    });

    map.on('singleclick', function (event) {
     if (map.hasFeatureAtPixel(event.pixel) === true) {
         var coordinate = event.coordinate;

         content.innerHTML = '<b>Hello world!</b><br />I am a popup.';
         overlay.setPosition(coordinate);
     } else {
         overlay.setPosition(undefined);
         closer.blur();
     }
 });
    map.addLayer(layer);

    // Vienna marker
    var marker = new ol.Overlay({
        position: pos,
        positioning: 'center-center',
        element: document.getElementById('marker'),
        stopEvent: false
    });
    map.addOverlay(marker);

    // Vienna label
    var vienna = new ol.Overlay({
        position: pos,
        element: document.getElementById('vienna')
    });
    map.addOverlay(vienna);

    // Popup showing the position the user clicked
    var popup = new ol.Overlay({
        element: document.getElementById('popup')
    });
    map.addOverlay(popup);

    map.on('click', function(evt) {
        var element = popup.getElement();
        var coordinate = evt.coordinate;
        var hdms = ol.coordinate.toStringHDMS(ol.proj.transform(
            coordinate, 'EPSG:3857', 'EPSG:4326'));

        $(element).popover('destroy');
        popup.setPosition(coordinate);
        // the keys are quoted to prevent renaming in ADVANCED mode.
        $(element).popover({
            'placement': 'top',
            'animation': false,
            'html': true,
            'content': '<p>The location you clicked was:</p><code>' + hdms + '</code>'
        });
        $(element).popover('show');
    });

    map.on('wheel', function(evt) {
        wheelZoomHandler(evt);
    });
    wheelZoomHandler(evt); {
        if (ol.events.condition.shiftKeyOnly(evt) !== true) {
            evt.browserEvent.preventDefault();
        }
    };

    var iconFeature = new Feature({
        geometry: new Point([0, 0]),
        name: 'Null Island',
        population: 4000,
        rainfall: 500,
    });

    var iconStyle = new Style({
        image: new Icon({
            anchor: [0.5, 46],
            anchorXUnits: 'fraction',
            anchorYUnits: 'pixels',
            src: 'image/5968841.png',
        }),
    });

    iconFeature.setStyle(iconStyle);

    var vectorSource = new VectorSource({
        features: [iconFeature],
    });

    var vectorLayer = new VectorLayer({
        source: vectorSource,
    });

    var rasterLayer = new TileLayer({
        source: new TileJSON({
            url: 'https://a.tiles.mapbox.com/v3/aj.1x1-degrees.json?secure=1',
            crossOrigin: '',
        }),
    });

     var container = document.getElementById('popup');
    var content = document.getElementById('popup-content');
    var closer = document.getElementById('popup-closer');

    var overlay = new ol.Overlay({
        element: container,
        autoPan: true,
        autoPanAnimation: {
            duration: 250
        }
    });
    map.addOverlay(overlay);

    closer.onclick = function() {
        overlay.setPosition(undefined);
        closer.blur();
        return false;
    };
</script>
<script>
    var swiper = new Swiper(".front-view-slider", {
        slidesPerView: 5,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        pagination: {
            el: ".room-swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            360: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            575: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
            },
            1400: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1600: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        }
    });
</script>