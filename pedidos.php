<?php
include("header.php");
include("footer.php");
?>
      
<h2>Lista de pedidos de bici:</h2>
<?php
include("crudTable.php");
?>
<script src="bstable.js"></script>
<script>

		// Example with a add new row button & only some columns editable & removed actions column label
		var example2 = new BSTable("table2", {
			
			$addButton: $('#table2-new-row-button'),
			onEdit:function() {
				console.log("EDITED");
			},
			advanced: {
				columnLabel: ''
			}
		});
		example2.init();

</script>