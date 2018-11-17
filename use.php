<head>
	<style>
	</style>
</head>
<body>
<?php
    if($_GET["type"] == "GRID") {
      echo image_products_grid();
    }
    else {
      echo image_products_list();
    }
?>
<div class="products_look">
    <input type="button" class="view_list" onclick="window.location = 'display.php?type=LIST'" value="List" />
    <input type="button" class="view_grid" onclick="window.location = 'display.php?type=GRID'" value="Grid" />
</div>
</body>