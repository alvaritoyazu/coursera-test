

<HTML>

    <HEAD>

        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8"/>

        <TITLE>Videojuegos - Bibliografía</TITLE>

        <LINK REL="icon" TYPE="image/png" HREF="http://icon-icons.com/icons2/37/PNG/512/joystick_game_3819.png">

    </HEAD>

    <BODY BGCOLOR="#3EF578">

        <EMBED SRC="http://66.90.93.122/ost/legend-of-zelda-hyrule-symphony/uihrpvxoat/12-ocarina-medley.mp3"

            WIDTH="0"

            HEIGHT="0"

            AUTOSTART="true">

        <NOEMBED>

            <BGSOUND SRC="http://66.90.93.122/ost/legend-of-zelda-hyrule-symphony/uihrpvxoat/12-ocarina-medley.mp3">

        </NOEMBED>
        <?php include ('login.php');
        $conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);
        if (!$conexion) {
            die ('Error al conectar con la base de datos: ' . mysqli_connect_error());  
        } 
        $sql = 'SELECT Titulo, GROUP_CONCAT(Enlace) AS Enlace FROM biblio GROUP BY Titulo';  
        $consulta = mysqli_query($conexion, $sql);
        if (!$consulta) {
            die ('Error SQL: ' . mysqli_error($conexion));
        }
        ?>
        <HEADER>

            <H2><BIG><P ALIGN='CENTER'>BIBLIOGRAFÍA</P></BIG></H2>

            <HR WIDTH="40%"/>

            <BR>

            <BR>

        </HEADER>

        <BR>

    <CENTER><TABLE BORDER="2" BGCOLOR="#FFFFFF">

        <THEAD>

            <TR>

	 			<TH><CENTER><H2>Titulo</H2></CENTER></TH>

	 		    <TH><CENTER><H2>Enlace</H2></CENTER></TH>

	 		</TR>

        </THEAD>

        <TBODY>

        <?php

        while ($datosconsulta = mysqli_fetch_array($consulta)) {

            echo '<tr><td width="350"><CENTER><B>'.$datosconsulta['Titulo'].'</B></CENTER></td><td width="350"><CENTER>';

            $consultacompleta = $datosconsulta['Enlace'];

            $consultasimple = explode(",", $consultacompleta);

            $i = substr_count($consultacompleta, 'http');

            for ($i; $i>=0; $i--) { 

                echo '<a href='.$consultasimple[$i].' TARGET="_BLANK">'.$consultasimple[$i].'<BR>';

            }

            echo '<BR></CENTER></td></tr>';

        }

        ?>

        </TBODY>

    </TABLE></CENTER>       <BR>

        <BR>

        <A HREF=b1daragonaindex.html><IMG SRC="https://image.freepik.com/iconos-gratis/izquierda-variante-flecha-negro_318-60162.jpg" HEIGHT='40px' WIDTH='70px'></A>

    </BODY>

</HTML>