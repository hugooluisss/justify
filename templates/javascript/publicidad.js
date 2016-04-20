$(document).ready(function(){
	$("[data-mask]").inputmask();
	
	$("#winPublicidad #frmAdd").validate({
		debug: false,
		rules: {
			txtInicio: {
				required: true
			},
			selPaquete: {
				required: true
			}
		},
		wrapper: 'span', 
		messages: {
			txtInicio: "Inidica el inicio",
			selPaquete: "Selecciona un paquete"
		},
		submitHandler: function(form){
			var obj = new TPublicidad;
			
			obj.add($("#winPublicidad #id").val(), $("#winPublicidad #abogado").val(), $("#winPublicidad #txtInicio").val(), $("#winPublicidad #selPaquete").val(), {
				before: function(){
					
				},
				after: function(result){
					if (result.band != true)
						alert("Ocurrió un error al guardar los datos");
					else{
						getListaPublicidad($("#abogado").val());
						$('#panelPublicidad a[href="#listaPublicidad"]').tab('show');
						$("#winPublicidad #frmAdd").get(0).reset();
					}
					
				}
			});
		}
	});
});

function getListaPublicidad(abogado){
	$.post("listaPublicidad", {
		"abogado": abogado
	}, function( data ) {
		$("#winPublicidad #dvLista").html(data);
		
		$("[action=eliminar]").click(function(){
			if(confirm("¿Seguro?")){
				var obj = new TPublicidad;
				obj.del($(this).attr("publicidad"), {
					after: function(data){
						getListaPublicidad($("#abogado").val());
					}
				});
			}
		});
		
		$('#panelPublicidad a[href="#add"]').click(function(){
			$("#frmAdd")[0].reset();
		});
		
		$("#winPublicidad [action=modificar]").click(function(){
			var el = jQuery.parseJSON($(this).attr("publicidad"));
			
			$("#winPublicidad #id").val(el.idPublicidad);
			$("#winPublicidad #txtInicio").val(el.inicio);
			$("#winPublicidad #txtFin").val(el.fin);
			$("#winPublicidad #selPrioridad").val(el.prioridad);
			
			$('#panelPublicidad a[href="#addPublicidad"]').tab('show');
		});
		
		$("#tblPublicidad").DataTable({
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