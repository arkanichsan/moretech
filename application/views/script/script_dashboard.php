<script src="<?= base_url() ?>templates/kamr/js/dashboard/dashboard-1.js"></script>
<script src="<?= base_url() ?>templates/kamr/vendor/apexchart/apexchart.js"></script>
<script src="<?= base_url() ?>templates/kamr/vendor/peity/jquery.peity.min.js"></script>
<script src="<?= base_url() ?>templates/kamr/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
<script src="https://openlayers.org/en/v3.20.1/build/ol.js"></script>

<script>
    var layer = new ol.layer.Tile({
        source: new ol.source.OSM()
    });

    var map = new ol.Map({
        target: 'map',
        view: new ol.View({
            center: [-6.25006052264367, 107.00856058399],
            zoom: 3
        })
    });

    var pos = ol.proj.fromLonLat([106.92319613, -6.297489017305115]);

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
</script>
<script>
    var swiper = new Swiper(".front-view-slider", {
        slidesPerView: 5,
        spaceBetween: 30,
        centeredSlides: true,
        loop:true,
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