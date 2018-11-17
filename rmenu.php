<head>
	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<link href='http://fonts.googleapis.com/css?family=Asul:400,700' rel='stylesheet' type='text/css'>

<link type="text/css" rel="stylesheet" href="sideviewmenu.css" />

<script src="sideviewmenu.js">


</script>

<script>

jQuery(function(){ // on DOM Load
	sideviewmenu({ // call sideviewmenu() function
		menuid: 'sideviewmenu',
		onopenclose:function(state){ // state is either "open" or "closed"
			// custom code
		}
	})
})

</script>
</head>
<body>
	<div class="toggler" onClick="sideviewmenu.toggle()"></div>
	
</body>
