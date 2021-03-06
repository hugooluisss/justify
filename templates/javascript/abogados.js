$(document).ready(function(){
	getLista();
	
	function getLista(){
		$.get("listaAbogados", function( data ) {
			$("#dvLista").html(data);
						
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TAbogado;
					obj.del($(this).attr("usuario"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$('#panelTabs a[href="#add"]').click(function(){
				$("#frmAdd")[0].reset();
			});
			
			$('#dvLista [action=oficinas]').click(function(){
				location.href = "?mod=oficinas&id=" + $(this).attr("usuario");
			});
			
			$("#dvLista [action=especialidades]").click(function(){
				var el = jQuery.parseJSON($(this).attr("usuario"));
				
				$(".especialidades").prop("checked", false);
				
				$.each(el.especialidades, function(i, esp){
					$(".especialidades[value=" + esp.idEspecialidad + "]").prop("checked", true);
				});
				
				$("#id").val(el.idUsuario);
				$("#winEspecialidades").modal();
			});
			
			$("#dvLista [action=publicidad]").click(function(){
				var el = $(this);
				getListaPublicidad(el.attr("usuario"));
				$("#winPublicidad #abogado").val(el.attr("usuario"));
				$("#winPublicidad").modal();
			});

			
			$("#dvLista [action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("usuario"));
				
				$("#id").val(el.idUsuario);
				$("#txtNombre").val(el.nombre);
				$("#txtEmail").val(el.email);
				$("#selSexo").val(el.sexo);
				$("#txtTelefono").val(el.telefono);
				$("#txtCelular").val(el.celular);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("#tblUsuarios").DataTable({
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
		errorElement: 'div',
		rules: {
			txtNombre: "required",
			txtEmail: {
				email: true,
				required: true,
				remote: {
					url: "index.php?mod=cusuarios&action=validaEmail",
					type: "post",
					data: {
						usuario: function(){
							return $("#id").val();
						}
					}
				}
			},
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
				digits: true,
				minlength: 10,
				maxlength: 10
 			}
 		},
 		wrapper: 'span', 
 		messages: {
			txtNombre: "Escribe el nombre",
			txtEmail: {
				required: "Este campo es necesario",
				email: "Escribe un correo electrónico válido",
				remote: "Este email ya corresponde a un usuario registrado"
			},
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
			var obj = new TAbogado;
			obj.add($("#id").val(), $("#txtNombre").val(), $("#selSexo").val(), $("#txtEmail").val(), $("#txtTelefono").val(), $("#txtCelular").val(), {
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
	
		//Especialidades
	$(".especialidades").change(function(){
		var obj = new TAbogado;
		var el = $(this);
		if ($(this).is(":checked"))
			obj.addEspecialidad($("#id").val(), el.val(), {
				before: function(){
					el.prop("disabled", true);
				},
				after: function(resp){
					el.prop("disabled", false);
					
					if(!resp.band)
						alert("Ocurrió un error al establecer la especialidad");
				}
			});
		else
			obj.delEspecialidad($("#id").val(), el.val(), {
				before: function(){
					el.prop("disabled", true);
				},
				after: function(resp){
					el.prop("disabled", false);
					
					if(!resp.band)
						alert("Ocurrió un error al quitar la especialidad");
				}
			});
	});
	
	$('#winEspecialidades').on('hidden.bs.modal', function(){
		getLista();
	});

});