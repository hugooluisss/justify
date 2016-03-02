$(document).ready(function(){
	console.log("Cargando script");
	$("form:not(.filter) :input:visible:enabled:first").focus();
	
	$("#frmLogin").validate({
		debug: true,
		rules: {
			txtUsuario: "required",
			txtPass: "required"
		},
		wrapper: 'span', 
		messages: {
			txtUsuario: "La CURP es necesaria",
			txtPass: "Tu contraseña o NIP es necesario"
		},
		submitHandler: function(form){
			var obj = new TUsuario;
			obj.login($("#txtUsuario").val(), $("#txtPass").val(), {
				after: function(datos){
					if (datos.band)
						location.href = "?mod=panel";
					else{
						alert("Los datos son incorrectos, corrigelos y vuelve a intentarlo");
					}
				}
			});
        }

    });
	
});