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

//CESGA
L.marker([42.8755536, -8.5532895]).addTo(map)
		.bindPopup(' <button type="button">Click Me!</button> ');

//ETSE
L.marker([42.873175, -8.5602546]).addTo(map)
		.bindPopup(' <button type="button">Click Mer!</button> ');

//ETSE - GDG
L.marker([42.873005, -8.5609546]).addTo(map)
		.bindPopup(' <button type="button">Click Mer!</button> ');

//Summer Xperience
L.marker([40.4521491, -3.9846449]).addTo(map)
		.bindPopup(' <button type="button">Click Mer!</button> ');

//Lero
L.marker([52.6745111, -8.5772411]).addTo(map)
		.bindPopup(' <button type="button">Click Mer!</button> ');

//The AKKAdemy
L.marker([46.2204587, 6.0986314]).addTo(map)
		.bindPopup(' <button type="button">Click Mer!</button> ');

//AKKA France
L.marker([48.8291762, 2.2375156]).addTo(map)
		.bindPopup(' <button type="button">Click Mer!</button> ');

//Nokia
L.marker([48.6672792, 2.2374422]).addTo(map)
		.bindPopup(' <button type="button">Click Mer!</button> ');

//Emprendia - Explorer
L.marker([42.8723712, -8.5630781]).addTo(map)
		.bindPopup(' <button type="button">Click Mer!</button> ');