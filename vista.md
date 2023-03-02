# Vista
En el patrón de arquitectura de software Modelo-Vista-Controlador (MVC), la vista es la capa encargada de presentar la información al usuario. Es decir, se trata de la interfaz gráfica o de usuario que permite interactuar con el sistema.

La vista se comunica con el controlador para solicitar información y actualizar el estado del modelo. El controlador a su vez, se encarga de procesar las solicitudes de la vista y actualizar el modelo en consecuencia.

La vista es una representación visual del estado actual del modelo. Esta puede ser tanto estática como dinámica, dependiendo de la complejidad del modelo y de la interacción que se requiera con el usuario. En algunos casos, la vista puede ser una simple página web estática que muestra información del modelo, mientras que en otros casos, la vista puede ser una aplicación interactiva que permite al usuario interactuar con el modelo en tiempo real.

La vista puede estar compuesta por distintos elementos gráficos como botones, menús, formularios, tablas, gráficos, entre otros. Estos elementos permiten al usuario interactuar con el modelo y realizar distintas operaciones como agregar, modificar o eliminar elementos.

Es importante destacar que la vista debe ser independiente del modelo y del controlador, es decir, no debe estar acoplada directamente a ellos. De esta forma, se logra una separación clara de responsabilidades y una mayor flexibilidad en el diseño y mantenimiento del sistema.  
### Ejemplo en codigo
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Examen Practico</title>
</head>
<script>
    function eliminar(id)
             {
                if (confirm("¿Estas seguro que quieres eliminar el registro?"))
                {
                    window.location = "../Controller/datos.php?ideliminar=" + id;
                }
             }

             function modificar(id)
             {
                window.location = "../Controller/datos.php?idmodificar=" + id;
             }
</script>
<body>
    <div class="header">
        <form action="datos.php" method="POST">
            <div class="formulario">
            <input type="text" id="txtidproducto" name="txtidproducto" placeholder="Num" value="<?php echo @$buscar_mod[0][0]; ?>" hidden>
                <h4>Nombre:</h4>
                <input class="campo" type="text" id="txtnombre" name="txtnombre" placeholder="Nombre(s)" value="<?php echo @$buscar_mod[0][1]; ?>"><br>
                <h4>Apellido paterno:</h4>
                <input class="campo" type="text" id="txtap_pat" name="txtap_pat" placeholder="Apellido paterno" value="<?php echo @$buscar_mod[0][2]; ?>"><br>
                <h4>Apellido materno:</h4>
                <input class="campo" type="text" id="txtap_mat" name="txtap_mat" placeholder="Apellido materno" value="<?php echo @$buscar_mod[0][3]; ?>"><br>
                <h4>Correo:</h4>
                <input class="campo" type="text" id="txtcorreo" name="txtcorreo" placeholder="Correo electronico" value="<?php echo @$buscar_mod[0][4]; ?>"><br>
                <h4>Contraseña:</h4>
                <input class="campo" type="text" id="txtcontraseña" name="txtcontraseña" placeholder="Contraseña" value="<?php echo @$buscar_mod[0][5]; ?>"><br>
                <div class="paddinng"><input class="campo btn" type="submit" id="btn_registro" name="btn_registro" value="<?php 
                        if(isset($_GET['idmodificar']))
                        {
                            echo 'Guardar';
                        } 
                        else
                        { 
                            echo 'Registrar';
                        }?>"></div>
            </div>
            <div class="buscar">
                <input type="text" name="txtnombrebuscar" id="txtnombrebuscar" placeholder="Ingresa un nombre para buscar...">
                <input type="submit" value="Buscar">
            </div>  
            
        </form>
    </div>
    <div>
        <table border="colspan">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Apellido paterno</td>
                    <td>Apellido materno</td>
                    <td>Correo</td>
                    <td>Contraseña</td>
                    <td colspan="2" align="center">Accion</td>
                </tr>
            </thead>
            <tbody>
                <?php echo $tabla_result; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
```

Como se puede apreciar, las unicas etiquetas php que tien son para mostrar los resultados que le manda el controlador
