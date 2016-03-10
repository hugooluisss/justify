$(document).ready(function(){
	getLista();
	
	function getLista(){
		$.get("listaUsuarios", function( data ) {
			$("#dvLista").html(data);
			
			$("#add #txtLocalidad").keyup(function(){
				if ($("#add #txtLocalidad").attr("anterior") != $("#add #txtLocalidad").val()){
					$("#add #txtLocalidad").attr("localidad", "");
					
					$("#add #txtLocalidad").attr("anterior", $("#add #txtLocalidad").val());
				}
			});
			
			$("#add #txtLocalidad").autocomplete({
				source: "?mod=localidad&action=autocomplete",
				minLength: 2,
				select: function(e, el){
					$("#add #txtLocalidad").attr("localidad", el.item.identificador);
					$("#add #txtLocalidad").attr("anterior", el.item.label);
				}
			});
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TUsuario;
					obj.del($(this).attr("usuario"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("usuario"));
				
				$("#id").val(el.idUsuario);
				$("#txtNombre").val(el.nombre);
				$("#txtEmail").val(el.email);
				$("#selSexo").val(el.sexo);
				$("#txtLocalidad").attr("localidad", el.idLocalidad);
				$("#txtLocalidad").val(el.localidad);
				
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
			txtEmail: {
				email: true,
				required: true
			},
			txtPass1: {
				required: false,
				minlength: 5
			},
			txtPass2: {
				required: false,
				minlength: 5,
				equalTo: "#txtPass1"
			},			
			txtNombre: "required",
			txtLocalidad: {
				required : true,
			}
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Escribe el nombre",
			txtPass1: {
				minlength: "No puede tener menos de 5 caracteres"
			},
			txtPass2: {
				minlength: "No puede tener menos de 5 caracteres",
				equalTo: "La confirmación no corresponde con la contraseña"
			},
			txtLocalidad: {
				required: "Escribe el lugar donde vive",
			},
			txtEmail: {
				required: "Este campo es necesario",
				email: "Escribe un correo electrónico válido"
			}
		},
		submitHandler: function(form){
			var obj = new TAdministrador;
			
			obj.add($("#id").val(), $("#txtNombre").val(), $("#selSexo").val(), $("#txtLocalidad").attr("localidad"), $("#txtEmail").val(), $("#txtPass").val(), {
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