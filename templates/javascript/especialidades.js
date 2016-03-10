$(document).ready(function(){
	getLista();
	
	function getLista(){
		$.get("listaEspecialidades", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TEspecialidad;
					obj.del($(this).attr("especialidad"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("especialidad"));
				
				$("#id").val(el.idEspecialidad);
				$("#txtNombre").val(el.nombre);
				$("#txtDescripcion").val(el.descripcion);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblEspecialidades").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	$("#add #frmAdd").validate({
		debug: false,
		rules: {
			txtNombre: {
				required: true
			},
			txtDescripcion: {
				required: true,
			}
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Escribe el nombre",
			txtDescripcion: "Escribe una breve descripción",
		},
		submitHandler: function(form){
			var obj = new TEspecialidad;
			
			obj.add($("#id").val(), $("#txtNombre").val(), $("#txtDescripcion").val(), {
				before: function(){
					
				},
				after: function(result){
					if (result.band != true)
						alert("Ocurrió un error al guardar los datos");
					else{
						getLista();
						$('#panelTabs a[href="#lista"]').tab('show');
						$("#frmAdd").get(0).reset();
					}
					
				}
			});
		}
	});
});