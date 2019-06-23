/*
 the script mus be loaded after the map div is defined.
 otherwise this will not work (we would need a listener to
 wait for the DOM to be fully loaded).

 Just put the script tag below the map div.

 The source code below is the example from the leaflet start page.
 */

var map = L.map('map', {
			center: [48, -3],
			zoom: 5,
			zoomControl: true
		});

var defaultLayer = L.tileLayer.provider('Hydda.Base').addTo(map);

L.marker([51.5, -0.09]).addTo(map)
		.bindPopup('A pretty CSS3 popup.<br> Easily customizable.');