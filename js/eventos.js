$(document).ready( function() {


$("#tituloservicios").click(function(event) {
	
			$("#tituloservicios").fadeIn(400);

});
	
$('#btninformatica,#btnweb,#btntiendas,#btnwordpress,#btnjoomla,#btnapi,#btnbd').click(function() {

if( $('#idtabledescripcion').is(":visible") ){
	
		$("[id*=idtabledescripcion]").hide();
	
	}else{
		
		$("[id*=idtabledescripcion]").show();		
	
		}

});



$('#btndiseñog,#btnDesing,#btnDesingweb,#btnDesingnegocios,#btnDesingropa,#btnDesingarte,#btnDesinglibro,#btnDesingfolletos,#btnDesingcarteles,#btnDesingflyers').click(function() {


if( $('#desingtable').is(":visible") ){
	
		$("[id*=desingtable]").hide();
	
	}else{
		
		$("[id*=desingtable]").show();		
	
		}

});



/*
$('h4').click(function() {


		// $("#idtabledescripcion").each(function(){
			 
			/// document.getElementById("idtabledescripcion").style.display = 'block';

if( $('#idtabledescripcion').is(":visible") ){
	
		$("[id*=idtabledescripcion]").hide();
	
	}else{
		
		$("[id*=idtabledescripcion]").show();		
	
		}
	


});
*/




});