TOficina = function(){
	var self = this;
	
	this.add = function(id, abogado, direccion, latitud, longitud, telefono, encargado, fn){
		if (fn.before != undefined) fn.before();
		$.post('index.php?mod=coficinas&action=add', {
			"id": id,
			"abogado": abogado,
			"direccion": direccion,
			"latitud": latitud,
			"longitud": longitud,
			"telefono": telefono,
			"encargado": encargado
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false')
				console.log("Error al agregar la oficina");
		}, "json");
	};
	
	this.del = function(id, fn){
		if (fn.before != undefined) fn.before();
		
		$.post('index.php?mod=coficinas&action=del', {
			"id": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar la oficina");
			}
		}, "json");
	};
};