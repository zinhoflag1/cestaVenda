    	(function($) {
		  remove = function(item) {
		    var tr = $(item).closest('tr');

		    tr.fadeOut(400, function() {
		      tr.remove();  
		    });

		    return false;
		  }
		})(jQuery);


/*$("#txtCodigo").blur(function(){
	alert("7");
})*/
$( function() {
    var availableTags = [
      "nome":"ActionScript",
      "nome":"AppleScript",
      "nome":"Asp",
      "nome":"BASIC",
      "nome":"C",
      "nome":"C++",
    ];
    $( "#txtCodigo" ).autocomplete({
      source: availableTags,
      select : function(click, ui){
      	var codigo = ui['item']['value'];
      	var descri = ui['item']['value'];
      	var codigo = ui['item']['value'];
      	
      	$("#txtDescricao").val();
      	$("#txtDescricao").val();

      	console.log(selectItem);

      }
    });
  } );

   function alert1(){
   	alert("opa");
   }
