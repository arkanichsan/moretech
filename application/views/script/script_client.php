<script type="module">
    import Map from './node_modules/ol/Map.js';
    import View from './node_modules/ol/View.js';
    import TileLayer from './node_modules/ol/layer/Tile.js';
    import XYZ from './node_modules/ol/source/XYZ.js';

    new Map({
        target: 'map',
        layers: [
            new TileLayer({
                source: new XYZ({
                    url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png'
                })
            })
        ],
        view: new View({
            center: [0, 0],
            zoom: 4
        })
    });
</script>