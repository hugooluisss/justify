$(document).ready(function(){
	getLista();
	$("#txtTrabajador").autocomplete({
		source: "index.php?mod=cusuarios&action=autocomplete",
		minLength: 2,
		select: function(e, el){
			var obj = new TUsuario;
			var band = true;
			
			if (!el.item.nip)
				band = confirm("Este trabajador no tiene NIP asignado, no tendrá acceso al sistema, ¿aún así deseas agregarlo?");
			
			if (band)
				obj.add(el.item.identificador, {
					after: function(data){
						if(!data.band)
							alert("Upps No se agregó el usuario");
							
						$("#txtTrabajador").val("");
					}
				});
					
		}
	});
	
	function getLista(){
		$.get("?mod=listaUsuarios", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TUsuario;
					obj.del($(this).attr("trabajador"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$(".tipo").change(function(){
				if (confirm("¿Seguro de hacer el cambio de perfil de usuario?")){
					var obj = new TUsuario;
					var el = $(this);
					obj.setPerfil(el.attr("user"), el.val(), {
						before: function(){
							el.disabled = true;
						},
						after: function(data){
							el.enabled = false;
							if (data.band){
								getLista();
								alert("Perfil de usuario modificado");
							}
						}
					});
				}
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
});