<html>
    <head>
    <title>Registro de Usuario</title>
      <link href="style.css" type="text/css" rel="stylesheet">
      <script type="text/javascript" src="validar.js"></script>
    </head>
    <body>
        <?php
        
        include("cabecera.html");
        ?>
        <div id="registro">
        <h2>Registro de Usuario</h2>
        <form name="fvalidar" action="procesar.php" method="POST">
            <table>
                <tr>
                    <td>Nombre:&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="nombre" >
                    </td>
                </tr>
                 <tr>
                    <td>Apellido:&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="apellido" >
                    </td>
                </tr>
                
                 <tr>
                    <td>Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="correo" >
                    </td>
                </tr>
                 <tr>
                    <td>Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="usuario" >
                    </td>
                </tr>
                 <tr>
                    <td>Contrase&ntilde;a:
                    <input type="password" name="clave" >
                    </td>
                </tr>
                 <tr>
                    <td>
                    <input type="button" value="Aceptar" onclick="validar()">
                    <input type="reset" value="Borrar">
                    </td>
                </tr> 
                
            </table>
        </form>
         </div>
    </body>
    
</html>