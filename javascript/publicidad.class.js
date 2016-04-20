TPublicidad = function(){
	var self = this;
	
	this.add = function(id, abogado, inicio, paquete, fn){
		if (fn.before != undefined) fn.before();
		$.post('index.php?mod=cpublicidad&action=add', {
			"id": id,
			"abogado": abogado,
			"paquete": paquete,
			"inicio": inicio,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false')
				console.log("Error al agregar la publicidad");
		}, "json");
	};
	
	this.del = function(id, fn){
		if (fn.before != undefined) fn.before();
		
		$.post('index.php?mod=cpublicidad&action=del', {
			"id": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar la publicidad");
			}
		}, "json");
	};
};