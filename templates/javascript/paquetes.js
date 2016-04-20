$(document).ready(function(){
	getLista();
	$("[data-mask]").inputmask();
	
	$("#frmAdd").validate({
		debug: false,
		rules: {
			txtNombre: {
				required: true
			},
			txtDescripcion: {
				required: true,
			},
			txtPrecio: {
				required: true,
				number: true
			},
			txtCantidad: {
				required: true,
				digits: true
			}
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Indica el nombre",
			txtDescripcion: "Indica la descripción del paquete",
			txtCantidad: {
				required: "Indica la descripción del paquete",
				digits: "Solo se aceptan números"
			},
			txtPrecio: {
				required: "Indica la cantidad",
				number: "Números hasta con dos decimales"
			}
		},
		submitHandler: function(form){
			var obj = new TPaquete;
			
			obj.add($("#id").val(), $("#txtNombre").val(), $("#txtDescripcion").val(), $("#selTipo").val(), $("#txtCantidad").val(), $("#txtPrecio").val(), {
				before: function(){
					
				},
				after: function(result){
					if (result.band != true)
						alert("Ocurrió un error al guardar los datos");
					else{
						getLista();
						$('a[href="#listaPublicidad"]').tab('show');
						$("#frmAdd").get(0).reset();
					}
					
				}
			});
		}
	});
});

function getLista(){
	$.get("listaPaquetes", function( data ) {
		$("#dvLista").html(data);
		
		$("[action=eliminar]").click(function(){
			if(confirm("¿Seguro?")){
				var obj = new TPaquete;
				obj.del($(this).attr("paquete"), {
					after: function(data){
						getLista();
					}
				});
			}
		});
		
		$('a[href="#add"]').click(function(){
			$("#frmAdd")[0].reset();
		});
		
		$("[action=modificar]").click(function(){
			var el = jQuery.parseJSON($(this).attr("paquete"));
			
			$("#id").val(el.idPaquete);
			$("#txtNombre").val(el.nombre);
			$("#txtDescripcion").val(el.descripcion);
			$("#selTipo").val(el.tipo);
			$("#txtCantidad").val(el.cantidad);
			$("#txtPrecio").val(el.precio);
			
			$('a[href="#add"]').tab('show');
		});
		
		$("#tblPaquete").DataTable({
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