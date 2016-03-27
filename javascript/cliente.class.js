function TCliente(){
	this.add = function(id, nombre, sexo, email, telefono, celular, nacimiento, fn){
		if (fn.before != undefined) fn.before();
		
		$.post('?mod=cusuarios&action=add', {
			"id": id,
			"nombre": nombre,
			"sexo": sexo,
			"email": email,
			"telefono": telefono,
			"celular": celular,
			"perfil": 3,
			"nacimiento": nacimiento
		}, function(data){
			if (data.band == 'false')
				console.log("Upps. Ocurrió un error al agregar al cliente " + data.mensaje);
				
			if (fn.after != undefined)
				fn.after(data);
		}, "json");
	}
};