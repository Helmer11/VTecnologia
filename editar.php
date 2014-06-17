<?php
session_start();
require_once "clase.php";
    $not = new Noticia();
    $not->logueo();
    $consulta = $not->extraer_campo($_GET['id']);
    
    if(isset($_SESSION['us']))
{

    $nom = $not->saludo_usuario($_SESSION['us']);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<?php

include("menu_admin.html");
?>
	<!-- end #header -->
	<div id="pagina_admin">
		<div id="contenido_admin">
                
                    <div class="post_admin">
				<h2 class="title"><a href="#">Modificaci&oacute;n de Contenido  </a></h2>
				
				<!--<div style="clear: both;">&nbsp;</div>-->
	    <div id="usuario">
                        <p><?php echo "Hola Se&ntilde;or: ". $_SESSION['us'];?>
                        <br>
                        <?php echo "Fecha de Hoy ". date("d-m-y"); ?></p>
                        </div>     
                
                
                			
				
	<div id="publicar">
        <?php
        for($i=0; $i < sizeof($consulta);$i++)
        {
              $titulo =  $consulta[$i]['titulo'];
               $autor=  $consulta[$i]['autor'];
               $noticia = $consulta[$i]['noticias'];
        }
            ?>
    <form action="procesar_publicacion.php" method="POST">
      
        <h3>Titulo:</h3>
        <input type="text" name="titulo" value='<?php echo $titulo ; ?>' size=50>
        <br>
	<h3>Autor:</h3>
        <input type="text" name="autor" value='<?php echo $autor ; ?>'>
            <br>
            <h3>Categoria:</h3>
            <select name="categoria">
                <option value="php">PHP</option>
                 <option value="java">JAVA</option>
                <option value="asp">ASP.NET</option>
                 <option value="oracle">ORACLE</option>
                 <option value="mysql">MySQL</option>
                 <option value="python">PyTHON</option>
                 <option value="perl">Perl</option>
                 <option value="cpp">C++</option>  
            </select>
             <br>
	      <br>
           <h3>Contenido:</h3>
            <br>
            <textarea name="texto" cols=80 rows=30>
            <?php echo $noticia ; ?>
            </textarea>
            <br>
            <input type="submit" value="Actualizar">
             <input type="reset" value="Limpiar">
       
    </form>
  
        </div>
       
			</div>
			<!--<div class="post">
				<h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
				<p class="meta"><span class="date">November 20, 2011</span><span class="posted">Creado por <a href="#"> Helmer</a></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus. Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. </p>
					<p class="links"><a href="#" class="more">Leer mas</a><a href="#" title="b0x" class="comments">Comentario</a></p>
				</div>
			</div>
			<div class="post">
				<h2 class="title"><a href="#">Consecteteur hendrerit </a></h2>
				<p class="meta"><span class="date">November 10, 2011</span><span class="posted">Creado Por <a href="#"> Helmer</a></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus. Mauris vitae nisl nec metus placerat consectetuer.</p>
					<p class="links"><a href="#" class="more">Leer mas</a><a href="#" title="b0x" class="comments">Comentario</a></p>
				</div>
			</div>-->
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
             
                
		<!--<div id="sidebar">
			<ul>
				<li>
					<div id="search" >
						<form method="get" action="#">
							<div>
								<input type="text" name="s" id="search-text" value="" />
								<input type="submit" id="search-submit" value="GO" />
							</div>
						</form>
					</div>-->
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
				
					<!--<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>-->
				</li>
				<!--<li>
					<h2>Categories</h2>
					<ul>
						<li><a href="#">PHP</a></li>
						<li><a href="#">JAVA</a></li>
						<li><a href="#">ASP.NET</a></li>
						<li><a href="#">Oracle</a></li>
						<li><a href="#">MySQl</a></li>
						<li><a href="#">Python</a></li>
					</ul>
				</li>-->
				<!--<li>
					<h2>Blogroll</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
				<li>
					<h2>Archives</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
			</ul>-->
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>

<div id="footer">
	<p>Evento Tecnologico de Helmer Salas </p>
</div>
<!-- end #footer -->
</body>
</html>
<?php
    
}else
{
    echo "<script type='text/javascript'>
            alert('Usted debe logearse para ver este contenido');
            window.location='index.php';
            </script>";
}

?>