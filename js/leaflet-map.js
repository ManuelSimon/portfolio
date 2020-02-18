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
		.bindPopup(' <center> <p class="heading">06/2017 - 08/2017</p> <p class="heading">03/2018 - 06/2018</p> <b> <p>Research assistant</p> <p class="is-size-7">CESGA</p> </b> <p class="is-size-7 has-text-weight-light">Santiago de Compostela, Galiza</p> <a href="#cesga" class="button is-link is-outlined is-small title">More info.</a> </center>');

//ETSE
L.marker([42.873175, -8.5602546]).addTo(map)
		.bindPopup(' <center> <p class="heading">09/2016 - 06/2017</p> <b> <p>Tutor for incoming students</p> <p class="is-size-7">ETSE - USC</p> </b> <p class="is-size-7 has-text-weight-light">Santiago de Compostela, Galiza</p> <a href="#titor" class="button is-link is-outlined is-small title">More info.</a> </center>');

//ETSE - GDG
L.marker([42.873005, -8.5609546]).addTo(map)
		.bindPopup(' <center> <p class="heading">02/2018 - ?</p> <b> <p>Co-organizer</p> <p class="is-size-7">GDG Santiago</p> </b> <p class="is-size-7 has-text-weight-light">Santiago de Compostela, Galiza</p> <a href="#gdg" class="button is-link is-outlined is-small title">More info.</a> </center>');


//Lero
L.marker([52.6745111, -8.5772411]).addTo(map)
		.bindPopup(' <center> <p class="heading">08/2018 - 09/2018</p> <b> <p>Research assistant</p> <p class="is-size-7">Lero | The Irish Software Research Centre</p> </b> <p class="is-size-7 has-text-weight-light">Luimneach, Éire</p> <a href="#lero" class="button is-link is-outlined is-small title">More info.</a> </center>');

//The AKKAdemy
L.marker([46.2204587, 6.0986314]).addTo(map)
		.bindPopup(' <center> <p class="heading">01/2019 - 02/2019</p> <b> <p>International consultant</p> <p class="is-size-7">The AKKAdemy</p> </b> <p class="is-size-7 has-text-weight-light">Geneva, Switzerland</p> <a href="#akkademy" class="button is-link is-outlined is-small title">More info.</a> </center>');

//AKKA France
L.marker([48.8291762, 2.2375156]).addTo(map)
		.bindPopup(' <center> <p class="heading">02/2019 - ?</p> <b> <p>International consultant</p> <p class="is-size-7">AKKA France</p> </b> <p class="is-size-7 has-text-weight-light">Paris, France</p> <a href="#akka" class="button is-link is-outlined is-small title">More info.</a> </center>');

//Nokia
L.marker([48.6672792, 2.2374422]).addTo(map)
		.bindPopup(' <center> <p class="heading">02/2019 - ?</p> <b> <p>QA Tester</p> <p class="is-size-7">NOKIA</p> </b> <p class="is-size-7 has-text-weight-light">Paris, France</p> <a href="#nokia" class="button is-link is-outlined is-small title">More info.</a> </center>');

//Emprendia - Explorer
L.marker([42.8723712, -8.5630781]).addTo(map)
		.bindPopup(' <center> <p class="heading">01/2018 - 06/2018</p> <b> <p>Participant - Student</p> <p class="is-size-7">Explorer "Jóvenes con ideas"</p> </b> <p class="is-size-7 has-text-weight-light">Santiago de Compostela, Galiza</p> <a href="#explorer" class="button is-link is-outlined is-small title">More info.</a> </center>');