<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reportes</title>
    <!-- Toastr style -->
    <link href="css/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="css/jquery.gritter.css" rel="stylesheet">

</head>
<body>
<div class="" style="margin-bottom: 15px; margin-right: 20px">
        <pre>UNIDAD ACADEMICA "MARIA GORETTI"
   AV/SANTOS DOUMONT Nro 454
     SANTA CRUZ - BOLIVIA
        </pre>
</div>
<h2 align="center">Reporte de Calificaciones</h2>
<div style="margin-left: 50px">
    <pre>
        <p>Materia: <?php echo $datos[0]->m_as?></p>
        <p>Curso  : <?php echo $datos[0]->c_nombre?></p>
        <p>Docente: <?php echo $datos[0]->p_nom.' '.$datos[0]->p_pat.' '.$datos[0]->p_mat?></p>
    </pre>
</div>
<div class="table table-striped" align="center">
    <table border=1 cellspacing=0 align="center">
        <tr>
            <th class="success" width="20%">C.I.</th>
            <th class="success" width="20%">Apellido Paterno</th>
            <th class="success" width="20%">Apellido Materno</th>
            <th class="success" width="20%">Nombre</th>
            <th class="success" width="20%">Nota</th>
        </tr>
        <?php foreach($est as $c): ?>
        <tr align="center">
            <td class=" text-center"> <?php echo ($c->ci); ?></td>
            <td class=" text-center"> <?php echo ($c->pat); ?></td>
            <td class=" text-center"> <?php echo ($c->mat); ?></td>
            <td class=" text-center"> <?php echo ($c->nombre); ?></td>
            <td class=" text-center"> <?php echo ($c->nota); ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>
<br><br><br>
<div style="margin-bottom: 50px">
    <p>&nbsp;</p>
    <pre>
        -------------------------------------               ----------------------------------------
            <?php echo $datos[0]->p_nom.' '.$datos[0]->p_pat.' '.$datos[0]->p_mat?>       <?php echo "                     NOMBRE SECRETARIA" ?>
            <br>
            <?php echo "       DOCENTE" ?>                      <?php echo "                         SECRETARIA" ?>
        <p>&nbsp;</p>
    <p>&nbsp;</p>
                                       ----------------------------------
                                           <?php echo "    NOMBRE DE DIRECTOR" ?>
                                        <br>
                                              <?php echo "    DIRECTOR" ?>

    </pre>
</div>

<?php
date_default_timezone_set('America/La_Paz');
$hoy = getdate();
echo("<pre>");
echo("<p>");
echo("Reporte Generado en Fecha: ".$hoy['mday']."/".$hoy['mon']."/".$hoy['year']."     ".$hoy['hours'].":".$hoy['minutes'].":".$hoy['seconds']);
echo("</p>");
echo("</pre>");
?>
</body>
</html>
