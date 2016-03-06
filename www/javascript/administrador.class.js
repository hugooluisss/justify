function TAdministrador(){
	this.add = function(id, nombre, sexo, localidad, email, pass, fn){
		if (fn.before != undefined) fn.before();
		
		$.post('?mod=cusuarios&action=add', {
			"id": id,
			"nombre": nombre,
			"sexo": sexo,
			"localidad": localidad,
			"email": email,
			"pass": pass,
			"perfil": 1
		}, function(data){
			if (data.band == 'false')
				console.log("Upps. Ocurrió un error al agregar al usuario " + data.mensaje);
				
			if (fn.after != undefined)
				fn.after(data);
		}, "json");
	}
};

TAdministrador.prototype = new TUsuario;