TPaquete = function(){
	var self = this;
	
	this.add = function(id, nombre, descripcion, tipo, cantidad, precio, fn){
		if (fn.before != undefined) fn.before();
		$.post('index.php?mod=cpaquete&action=add', {
			"id": id,
			"nombre": nombre,
			"descripcion": descripcion,
			"precio": precio,
			"tipo": tipo,
			"cantidad": cantidad
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false')
				console.log("Error al agregar el paquete de publicidad");
		}, "json");
	};
	
	this.del = function(id, fn){
		if (fn.before != undefined) fn.before();
		
		$.post('index.php?mod=cpaquete&action=del', {
			"id": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false')
				alert("Ocurrió un error al eliminar el paquete de publicidad");
				
		}, "json");
	};
};