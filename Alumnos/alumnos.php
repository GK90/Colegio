<link href="../recursos/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../recursos/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet">
<h1 class="mt-4">Lista de alumnos</h1>
        <?php
        require '../recursos/mysql/conexion.php';
        $consultaAlumnos = "SELECT `codigo`,`nombre1`,`nombre2`,`apellido1`,"
                . "`apellido2`,`direccion`,`telefono`,`email`,`genero`,"
                . "`fechanacimiento`,`codigodepto` "
                . "FROM `alumnos`";
        $alumnos = mysqli_query($conn, $consultaAlumnos); 
        if (mysqli_num_rows($alumnos) < 1) {
            echo "<br>Lista vacia";
            echo "<br>";
        } else {
            echo "<table class='table'>\n";
            echo "<th>Codigo</th>\n";
            echo "<th>Nombre</th>\n";
            echo "<th>Apellido</th>\n";
            echo "<th>Direccion</th>\n";
            echo "<th>Telefono</th>\n";
            echo "<th>Email</th>\n";
            echo "<th>Genero</th>\n";
            echo "<th>Fecha de Nacimiento</th>\n";

            while ($row = mysqli_fetch_array($alumnos)) {
                echo "<tr>";
                echo "<td>" . $row['codigo'] . "</td>";
                echo "<td>" . $row['nombre1'] . " " . $row['nombre2'] . "</td>";
                echo "<td>" . $row['apellido1'] . " " . $row['apellido2'] . "</td>";
                echo "<td>" . $row['direccion'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['genero'] . "</td>";
                echo "<td>" . $row['fechanacimiento'] . "</td>";
                echo "</tr>";
            }
            echo '</table>';
            mysqli_close($conn);
        }
        ?>