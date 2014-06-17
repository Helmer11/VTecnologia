<?php
session_start();
require_once "clases/clase.php";
    $not = new Noticia();
    $not->logueo();
if(isset($_GET['conectado'])==1){
   echo "<script type='text/javascript'>
            alert('El ".$_SESSION['us']." está conectado!');
            </script>";
}
if(isset($_SESSION['us']))
{

    //$nom = $not->saludo_usuario($_SESSION['us']);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistema de noticia</title>
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
				<h2 class="title"><a href="#">Index </a></h2>
				
				<!--<div style="clear: both;">&nbsp;</div>-->
				<div class="contenido_admin">
					<table border=0>
                                            <tr>
                                            <td>&nbsp; Autor &nbsp;&nbsp;&nbsp;</td>
                                           
                                            <td>&nbsp;&nbsp;&nbsp; Titulo &nbsp;&nbsp;&nbsp;</td>
                                          
                                            <td>&nbsp;&nbsp;&nbsp; Contenido &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            
                                            <td>Actualizar  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                                            <td>&nbsp;&nbsp;&nbsp; Borrar &nbsp;&nbsp;&nbsp </td>
                                            </tr>
                                            <?php
                                            
                                            $not->publicacione_admin($_SESSION['us']);
                                            ?>
                                            
                                        </table>
                                        </div>
                                        </div>
                                        
                                        
                        
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
                <div id="usuario">
                        <p>
                        <br>
                        </p>
                        </div>  
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
	<p>Sistema de  Noticia de Helmer Salas </p>
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