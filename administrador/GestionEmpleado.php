﻿<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Gestionar Empleado</title>
        <link rel="stylesheet" type="text/css" href="../css/mainStyle.css" />
        <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
    </head>    
    <body>
    	<?php include("header.php"); 
		?>
        <center>
        <div id="mainDiv">
           <nav>
			
                <div class="button" onclick="redirect('GestionEmpleado.php');"><img src="../img/archive.png"  alt="Icono" class="img-icon" />Gestión Empleados</div>
                <div class="button" onclick="redirect('GestionProducto.php');"><img src="../img/configuration2.png" alt="Icono" class="img-icon" />Gestión Productos</div>
                <div class="button" onclick="redirect('Reportes.php');"><img src="../img/notepad.png"  alt="Icono" class="img-icon" />Solicitar Reporte</div>
            
			</nav>
            <div id="all-content">
				
                
				<div id="content">
				
					<div class="box">
						<form name="Find" action="BuscaEmpleado.php" method="POST">
						<table>
						
							<tr>
								<td class="auxiliarB">
									<div onclick="redirect('AgregarEmpleado.php');" class="form-button">Agregar Empleado</div>
								</td>
								<td class="auxiliarB"></td>
								<td class="auxiliarB"></td>
								<td class="auxiliarB">
									<input type="text" id="buscar" name="buscar" placeholder = "CURP del empleado"/>
								</td>
								<td>
									<img type="submit" src="../img/busc.png" class="img-buscar"  alt="Buscar" />
								</td>
							</tr>

						</table>
						</form>
					</div>   
					<div class="box">
					<?php
						echo ("<table id='table-content'>
						 <tr class=tr-header'>
						<td>idEmpleado</td>
							<td>Nombre</td>
							<td>Direccion</td>
							<td>Contraseña</td>
							<td class='opc'> </td>
							<td class='opc'> </td>
						 </tr>");
						include("../php/DataConnection.class.php");
						$db = new DataConnection();
						$result = $db->executeQuery("SELECT * FROM Empleado");	

						while($fila = mysql_fetch_array($result))
						{	
						$id = $fila['CURP'];	
						$nombre = $fila['Nombre'];
						$direccion = $fila['Direccion'];
						$pass = $fila['Contrasena'];

						echo ("<tr class='tr-cont' id='".$id."' name='".$id."'>
							<td>".$id."</td>
							<td>".$nombre."</td>
							<td>".$direccion."</td>
							<td>".$pass."</td>
							<td class='opc'><img src='../img/pencil.png' onclick='modificarEmpleado(".$id.")' alt='Modificar' name='modificar'/></td>
							<td class='opc'><img src='../img/less.png' onclick='eliEmp(".$id.")' alt='Eliminar' name='eliminar'/></td>
						 </tr>");
					
						}
						echo ("</table>");
					?>
					</div>
					
                    </div>
                </div>
            </div>
			
        </div>
        </center>
        <footer>Elaborado por nosotros(C) 2013</footer>
    </body>   
</html>
<?php include("scripts.php"); ?>