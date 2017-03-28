var base_url = "http://localhost/reservas/";
var add_reserva = base_url+"bienvenido/addReserva";
var lst_reserva = base_url+"bienvenido/lstReserva";
$(document).ready(function() {
	$("#btnInicio").attr('disabled','disabled');
	$("body").on('blur', '#login_form form input', function(event) {
		event.preventDefault();
		validacion();
	});	
	$("#add_reserva").click(function(event) {
		$.ajax({
			url: add_reserva,
			type: 'POST',
			dataType: 'html'
		})
		.done(function(data) {
			$("#titulo-pagina").text('Adicionar Reserva');
			$('#bienvenido').children('div.contenido').fadeOut('slow').css('display', 'none');
			$('#contenedor').html(data).fadeIn('slow');
			$('#botoneria').css('display', 'block').fadeIn('slow');
		})
		.fail(function(data) {
			$('#contenedor').html(data).fadeIn('slow');
		});
	});	
	$("#lst_reserva").click(function(event) {
		$.ajax({
			url: lst_reserva,
			type: 'POST',
			dataType: 'html'
		})
		.done(function(data) {
			$("#titulo-pagina").text('Consultar Reservas');
			$('#bienvenido').children('div.contenido').fadeOut('slow').css('display', 'none');
			// $('#contenedor').children('div')fadeOut('slow').css('display', 'none');
			$('#contenedor').fadeIn('slow').html(data);
			// $('#botoneria').css('display', 'block').fadeIn('slow');
		})
		.fail(function(data) {
			$('#contenedor').fadeIn('slow').html(data);
		});	
	});
	$("#btnAdicionar").click(function(event) {

	});
	$("#btnVolverInicio").click(function(event) {
		$("#titulo-pagina").text('Inicio - Bienvenido');
		$('#contenedor').children('div.contenido').css('display', 'none').fadeOut('slow');
		$('#botoneria').fadeOut('slow');
		$('#vista_principal').css('display', 'blok').fadeIn('slow');
	});
});
/**
 * [Función que valida que los campos de usuario y contraseña]
 */
function validacion() {
	var user, password = "";
	user = $("#usuario").val();
	password = $("#password").val();
	if ((user != "0" && password == "0")||(user == "0" && password != "0")) {
		console.log("1");
		alertaFail("0 No es considerado como usuario o contraseña");
	} else if ((user == "0" && password == "0") || (user == "" && password == "")) {
		alertaFail("No puede tener campos en 0 o vacios");
		console.log("3");
	} else {
		$("#btnInicio").removeAttr('disabled');
	}
}
/**
 * [alertaOk description]
 */
function alertaOk(texto) { 
	$("#alertaOk").html("<h3>"+texto+"</h3>");
	$("#alertaOk").css('display', 'block');
	$("#alertaOk").hide('slow');
}
/**
 * [alertaFail description]
 */
function alertaFail(texto) {
	$("#alertaFail").html("<h3>"+texto+"</h3>");
	$("#alertaFail").css('display', 'block').fadeOut(3000);
	$("#alertaFail").hide('slow');
}
/**
 * Funcion que permite mostrar los grupos para la opcion calificaciones
 * @param  oper [carga el valor contenido en el atributo clase]
 */
function actMenu(menu,submenu) {	
	var oper = $('#'+menu).attr('class');
	if (oper == "cerrado") {
		$('#'+submenu).show('400');
		$('#'+menu).removeClass('cerrado').addClass('abierto');			
	}
	else{
		$('#'+submenu).hide('400');
		$('#'+menu).removeClass('abierto').addClass('cerrado');
	}
}