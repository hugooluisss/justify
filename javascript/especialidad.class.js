TEspecialidad = function(){
	var self = this;
	
	this.add = function(id, nombre, descripcion, fn){
		if (fn.before != undefined) fn.before();
		$.post('index.php?mod=cespecialidad&action=add', {
			"id": id,
			"nombre": nombre,
			"descripcion": descripcion
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false')
				console.log("Error al agregar la especialidad");
		}, "json");
	};
	
	this.del = function(id, fn){
		if (fn.before != undefined) fn.before();
		
		$.post('index.php?mod=cespecialidad&action=del', {
			"id": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar la especialidad");
			}
		}, "json");
	};
};