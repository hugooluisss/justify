function TAbogado(){
	this.add = function(id, nombre, sexo, email, telefono, celular, fn){
		if (fn.before != undefined) fn.before();
		
		$.post('?mod=cusuarios&action=add', {
			"id": id,
			"nombre": nombre,
			"sexo": sexo,
			"email": email,
			"telefono": telefono,
			"celular": celular,
			"perfil": 2
		}, function(data){
			if (data.band == 'false')
				console.log("Upps. Ocurrió un error al agregar al abogado " + data.mensaje);
				
			if (fn.after != undefined)
				fn.after(data);
		}, "json");
	}
	
	this.addEspecialidad = function(usuario, especialidad, fn){
		if (fn.before != undefined) fn.before();
		
		$.post('?mod=cabogados&action=addEspecialidad', {
			"abogado": usuario,
			"especialidad": especialidad
		}, function(data){
			if (data.band == 'false')
				console.log("Upps. Ocurrió un error al agregar la especialidad " + data.mensaje);
				
			if (fn.after != undefined)
				fn.after(data);
		}, "json");

	}
	
	this.delEspecialidad = function(usuario, especialidad, fn){
		if (fn.before != undefined) fn.before();
		
		$.post('?mod=cabogados&action=delEspecialidad', {
			"abogado": usuario,
			"especialidad": especialidad
		}, function(data){
			if (data.band == 'false')
				console.log("Upps. Ocurrió un error al quitar la especialidad " + data.mensaje);
				
			if (fn.after != undefined)
				fn.after(data);
		}, "json");

	}
};