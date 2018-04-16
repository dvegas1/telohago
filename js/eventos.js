jQuery(document).ready(function($){




  $('#tituloservicios,#btnweb,#btntiendas,#btnwordpress,#btnjoomla,#btnapi,#btnbd').click(function() {


		// $("#idtabledescripcion").each(function(){
			 
			/// document.getElementById("idtabledescripcion").style.display = 'block';
			 
			 




if( $('#idtabledescripcion').is(":visible") ){
	
		$("[id*=idtabledescripcion]").hide();
	
	}else{
		
		$("[id*=idtabledescripcion]").show();		
	
		}


	


});


});
