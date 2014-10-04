<html>
<head>
<title> Raspunsul php de la server  </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
	<link rel="stylesheet" type="text/cssx" href="css.css"/>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>


</head>
<body>
	<div data-role="page" id="Rezumat_sugestii" >
	
	<div id="numefirma"> 
	<p style="text-align:center"> Validare date&sugestii! </p>
	</div>
	
	<table data-role="table" class="ui-responsive" >
		<thead><tr><th> </th><th> </th>	</thead>
		<tbody>
		<tr><td></td>
			<td><?php
			foreach ($_POST as $cheie => $valoare) echo $cheie." este : ".$valoare."<br>"; 
			?></td>
			 
		</tr>
		</tbody>	
	</table>	
 
<div data-role="header">
   
  
	<div id="numefirma"> 
	<p style="text-align:center"> Confirmati ?  </p>
	</div>
   
</div>
<input type="submit" value="Yes">
<input type="submit" value="No">

</div>

</body>
</html>

