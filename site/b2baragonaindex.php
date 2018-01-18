<html>
<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <link rel="shourtcut icon" type="image/png" href="http://icon-icons.com/icons2/37/png/512/joystick_game_3819.png"/>
    <title>Índice de trabajos</title>
    <?php 
    include ('login.php'); 
    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
    if (!$conexion) {
        die ('Error al conectar con la base de datos: ' . mysqli_connect_error());  
    }
    $sql = 'SELECT * FROM trabajos ORDER BY fecha DESC';  
    $consulta = mysqli_query($conexion, $sql);
        if (!$consulta) {
            die ('Error SQL: ' . mysqli_error($conexion));
        }
    ?>
    <style>
	table, td, th {    
		border: 3px solid #ddd;
		font-family: Verdana, Geneva, sans-serif
	}
	table {
		border-collapse: collapse;
		width: 100%;
	}
	th, td {
		padding: 15px;
	}
	h2, h4, h5 {
		font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
	</style>
 </head>
<body bgcolor="#eff2f7">
    <header>
            <h2><big><p align='center'>Álvaro Aragón Boza</p></big></h2>
            <hr width="40%"/>
    </header>
    <center><h4 style="color:#00146e">Hola, bienvenidos a esta página web, que tiene como objetivo publicar los diferentes trabajos que iré realizando a lo largo del curso de 2º de bachillerato.</h4></center>
    <center><h5 style="color:#00146e">WEB en construcción.</h5></center>
    <center><table border="1" bgcolor="#FFFFFF">
        <thead>
        <tr>
	 		<th><center><h2>Fecha y hora</h2></center></th>
	 		<th><center><h2>Trabajo</h2></center></th>
            <th><center><h2>Resumen</h2></center></th>
	 		<th><center><h2>Enlace</h2></center></th>
	 	</tr>
        </thead>
        <tbody>
        <?php
        while ($datosconsulta = mysqli_fetch_array($consulta)) {
            echo '<tr>
                    <td width="350"><center>'. date('d/m/y h:i', strtotime($datosconsulta['fecha'])) . '</center></td>
                    <td width="350"><center>'.$datosconsulta['trabajo'].'</center></td>
                    <td width="350"><center>'.$datosconsulta['resumen'].'</center></td>';
	   		if ($datosconsulta['enlace'] != "") { 
				echo '<td width="350"><center><a href=b2baragonaarchivos/'.$datosconsulta['enlace'].' target="_blank">Pincha aquí</center></td>
				</tr>';
	    	}
	    	else {
	    		echo '<td width="350" style="color:red; text-decoration: line-through"><center>No disponible</center></td>
	    		</tr>';
	    	}
    	}
        ?>
        </tbody>
    </table></center>
</body>
<footer>
        <br>
        <hr>
        <br>
        E-Mail de contacto: <a href="mailto:2balvaroa@gmail.com">2balvaroa@gmail.com</a>
        <br>
        <a href=b1daragonaindex.html>Pagina WEB de 1º de bachillerato</a>
        <br>
</footer>
</html>

