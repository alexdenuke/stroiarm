const center = [55.83643806888584, 37.2959304999999];

ymaps.ready(init);

function init() {
    let map = new ymaps.Map('map-test', {
        center: center,

        zoom: 17
    })

    let placemark = new ymaps.Placemark(center, {
        iconContent: 'Ул ленина, 63',
        

    },
        {
            preset: 'islands#yellowStretchyIcon',

        });

    map.geoObjects.add(placemark);
    map.behaviors.disable('scrollZoom');
}