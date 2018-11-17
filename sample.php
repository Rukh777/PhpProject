<head>
	<style>
		#container
{
    width:100%;
}

#left, #center, #right
{
    width:33.33%;
    float:left;
    text-align:center;
}

#label1
{
     float:left;  
    margin-right:5px;
}

#input1
{
    float:left;   

}

#center
{
    overflow:hidden;
    padding-top:30px;
    
}

	</style>
</head>

<body>
	<div id="container"> 
    <div id="left"> <h1><a>Mycat </a></h1></div>
    <div id="center">  
            <form id="search" action="#" method="post">
                <div id="label1">
                    <label for="search-terms" id="search-label">search</label>                 </div>
                <div id="input1">
                        <input type="text" name="search-terms" id="search-terms" size="14" placeholder="Enter search terms...">
                </div>
            </form>
    </div>
    <div id="right"><h1><a>shipment </a></h1></div>
    </div>

</body>