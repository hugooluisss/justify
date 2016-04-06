$(document).ready(function(){
	getLista();
	
	function getLista(){
		$.post("listaOficinas", {id: $("#abogado").val()}, function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TOficina;
					obj.del($(this).attr("oficina"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$('#panelTabs a[href="#add"]').click(function(){
				$("#frmAdd")[0].reset();
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idOficina);
				$("#txtDireccion").val(el.direccion);
				$("#txtLatitud").val(el.latitud);
				$("#txtLongitud").val(el.longitud);
				$("#txtTelefono").val(el.telefono);
				$("#txtEncargado").val(el.encargado);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblOficinas").DataTable({
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
			txtDireccion: "required",
			txtTelefono: {
				required: true,
				digits: true,
				minlength: 10,
				maxlength: 10
			},
			txtLatitud: {
				required: true,
			},
			txtLongitud: {
				required: true,
			}
		},
		wrapper: 'span', 
		messages: {
			txtDireccion: "Escribe una dirección",
			txtTelefono: {
				required: "Escribe un número telefónico de contacto",
				minlength: "Debe de ser de 9 números",
				maxlength: "Debe de ser de 9 números",
				digits: "Solo números"
			},
			txtLatitud: {
				required: "La latitud debe de ser indicada"
			},
			txtLongitud: {
				required: "La longitud debe de ser indicada"
			}
			
		},
		submitHandler: function(form){
			var obj = new TOficina;
			
			obj.add($("#id").val(), $("#abogado").val(), $("#txtDireccion").val(), $("#txtLatitud").val(), $("#txtLongitud").val(), $("#txtTelefono").val(), $("#txtEncargado").val(), {
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