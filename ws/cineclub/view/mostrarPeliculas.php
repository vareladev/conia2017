<head>

	<?php

	session_start();

	if (!isset($_SESSION['loggedin']) && !$_SESSION['loggedin'] == true) {
		header('Location: ../index.php');
	}

	?>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
    <script type="text/javascript" language="javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" language="javascript" src="../js/jquery-ui.min.js"></script>


	<script type="text/javascript">

		
		$(document).ready(function(){

			
		    var datatable = $('#tablePeliculas').DataTable({
		        ajax: "../controller/selectPeliculas.php",
		        columns: [
		            {data:"id"},
		            {data:"nombre"},
		            {data:"pais"},
		            {data:"director"},
		            {data:"actores"},
		            {data:"anio"},
		            {data:"duracion"}
		        ],

					"sPaginationType": "full_numbers",
        			"oLanguage": { 
			            "sLoadingRecords"  : "Cargando...",
			            "sSearch"     : "Buscar:",
			            "sZeroRecords": "No se encontraron resultados",
			            "sProcessing":     "Procesando...",
			            "sLengthMenu":     "Mostrar _MENU_ registros",
			            "sEmptyTable":     "Ningún dato disponible en esta tabla",
			            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			            "sInfoPostFix":    "",
			            "sUrl":            "",
			            "sInfoThousands":  ",",
			            "oPaginate": {
			                "sFirst":    "Primero",
			                "sLast":     "Último",
			                "sNext":     "Siguiente",
			                "sPrevious": "Anterior"
			            },
			            "oAria": {
			                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			            }
			        }
		    });


	});

	</script>


</head>

<body>

	<div class="panel panel-success" style="margin: 5%; margin-left:0%">

		<div class="panel-heading">Buscar película:</div>

		<div class="panel-body">

			<table id="tablePeliculas" class="display" cellspacing="0" width="100%">
		        <thead>
					<tr>
						<th>N°</th>
						<th>Nombre</th>
						<th>Pa&iacute;s</th>
						<th>Director</th>
						<th>Actores</th>
						<th>A&ntilde;o</th>
						<th>Duraci&oacute;n (En minutos)</th>
					</tr>
				</thead>
       
    		</table>

		</div>
		      
	</div>



</body>