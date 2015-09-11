$(document).ready(function() {

	var geocoder = new google.maps.Geocoder();

	$("#ex2").slider({
		tooltip: 'always'
	});

	//geolocalizacion

	$('#geolocalizacion').on('click', function () {
		$('#localizacion').html('')
		getGeolocation();

	});

	function getGeolocation(){
		window.navigator.geolocation.getCurrentPosition(localitation);
	}
	function localitation(pos){
		var lat = pos.coords.latitude;
		var lon = pos.coords.longitude;

		setTimeout(
			geocoder.geocode({location: {lat: lat, lng: lon}}, function(res, status){
				var localizacion = res[0].formatted_address;
				$('input[name^="geolocalizacion"]').val(localizacion)
				$('#localizacion').prepend(localizacion)

			})
		,3000);

	}



	/*seccion de mis intereses*/

	$('#biografia').on('click', function (){
		$('input[name^="descripcion"]').slideToggle();
	});
	$('#estado_civil').on('click', function (){
		$('input[name^="estado_civil"]').slideToggle();
	});

	getGeolocation();
});