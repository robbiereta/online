var Total = 0;
$( document ).ready(function() {
    console.log( "ready!" );
    $(".importe").each(function () {
        Total += parseInt($(this).val());
        $("#totalSpan").text(Total);
        
    });	
}); 
	
			