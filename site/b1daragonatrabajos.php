<html>

<HEAD>

    <META http-equiv="Content-Type" content="text/html"; charset="utf-8"/>

    <META name="robots" content="noindex">

    <META name="googlebot" content="noindex">

    <LINK REL="shourtcut icon" TYPE="image/png" HREF="http://icon-icons.com/icons2/37/PNG/512/joystick_game_3819.png"/>

    <TITLE>Índice de trabajos</TITLE>

 </HEAD>

<BODY BGCOLOR="#EFF2F7">
    <?php include ('login.php'); 
    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
    if (!$conexion) {
        die ('Error al conectar con la base de datos: ' . mysqli_connect_error());  
    }
    $sql = 'SELECT * FROM Archivos ORDER BY fecha ASC';  
    $consulta = mysqli_query($conexion, $sql);
        if (!$consulta) {
            die ('Error SQL: ' . mysqli_error($conexion));
        }
        ?>
    <FONT SIZE="6">

        <BR>

        <CENTER>Desde aquí puedes acceder a todos los trabajos<BR><BR>que he hecho desde el prinicipio del curso</CENTER>

        <BR>

    </FONT>

    <CENTER><TABLE BORDER="1">

        <THEAD>

            <TR>

	 			<TH><CENTER><H2>Fecha</H2></CENTER></TH>

	 			<TH><CENTER><H2>Trabajo</H2></CENTER></TH>

                <TH><CENTER><H2>Resumen</H2></CENTER></TH>

	 		    <TH><CENTER><H2>Enlace</H2></CENTER></TH>

	 		</TR>

        </THEAD>

        <TBODY>

        <?php

        while ($datosconsulta = mysqli_fetch_array($consulta))

        {

            echo '<tr>

                    <td width="350"><CENTER>'. date('d/m/Y', strtotime($datosconsulta['Fecha'])) . '</CENTER></td>

                    <td width="350"><CENTER>'.$datosconsulta['Trabajo'].'</CENTER></td>

                    <td width="350"><CENTER>'.$datosconsulta['Contenido'].'</CENTER></td>

                    <td width="350"><CENTER><a href='.$datosconsulta['Enlace'].' TARGET="_BLANK">Pincha aquí</CENTER></td>                   

                </tr>';

        }

        ?>

        </TBODY>

    </TABLE></CENTER>

</BODY>

<FOOTER>

<BR>

	<P>

	<BR>

	<A HREF="b1daragonaindex.html"><IMG height="50" SRC="https://image.flaticon.com/icons/png/512/0/340.png"></A>

</FOOTER>

</html>

