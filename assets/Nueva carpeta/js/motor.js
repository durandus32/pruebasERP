<<<<<<< HEAD
$('#mostrar').click(function () {
	$.ajax({
		type: "GET",
		url: "Contacts.html",
		data: dataString,
		success: function (data) {
			//Cargamos finalmente el contenido deseado
			$('#contenido').fadeIn(1000).html(data);
        }
	});
=======
$('#mostrar').click(function () {
	$.ajax({
		type: "GET",
		url: "Contacts.html",
		data: dataString,
		success: function (data) {
			//Cargamos finalmente el contenido deseado
			$('#contenido').fadeIn(1000).html(data);
        }
	});
>>>>>>> 249d322d48ccb0525c0c69fbddaf45f0386f4015
});