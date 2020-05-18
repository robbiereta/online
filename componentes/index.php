<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Bicis</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	<style>
	table#tableProds {
	width: 50%;
	float: left;
	
}
table#ticket {
    float: right;
    width: 30%;
}
tbody#ticketBody {
    background-color: blanchedalmond;
}
.totalChange{
	display:block;
}
</style>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Busqueda de productos</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Busqueda</span>
					<input type="text" name="search_text" id="search_text" placeholder="Escribe codigo o descripción" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




