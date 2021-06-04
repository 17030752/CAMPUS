$(busqueda_citas());

	function busqueda_citas(consulta){
		$.ajax({
			url: 'busqueda_citas.php' ,
			type: 'POST' ,
			dataType: 'html',
			data: {consulta: consulta},
		})
		.done(function(respuesta){
			$("#citas").html(respuesta);
		})
		.fail(function(){
			console.log("error");
		});
	}
	
	$(document).on('keyup','#caja_busqueda', function(){
		var valor = $(this).val();
		if (valor != "") {
			busqueda_citas(valor);
		}else{
			busqueda_citas();
		}
	});
