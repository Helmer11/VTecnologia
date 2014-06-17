<?php
require_once("clases/clase.php");
$not = new Noticia();
$datos= $not->publicacion();
@$data = $not->paginacion($_GET['p']);
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Evento Tecnologico</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
<?php
@ session_start();
if(isset($_SESSION['us'])){
@Header('location:login.php?conectado=1');            
            }
        include("cabecera.html");
        
	if(isset($_GET["p"])){
		$inicio = $_GET["p"];
	}
	else{
		$inicio = 0;
	}
	  
				
        ?>

	<!-- end #header -->
	<div id="page">
		<div id="content">
			<div class="post">
                        <?php
                        for($i=0;$i < sizeof($datos);$i++)
                        {
				$text = str_replace(" ","-",$datos[$i]['titulo']);
                            ?>
				<h2 class="title"><a href="<?php echo $text."_p".$datos[$i]["id_referencia"].".html" ?>"><?php echo $datos[$i]['titulo']; ?></a></h2>
				<br>
				<p class="meta"><span class="date"><?php echo date("d/m/y");?>
				</span><span class="posted">Creado por<a href="#"> <?php echo $datos[$i]['autor'];?></a></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					
				<p><?php echo substr($datos[$i]['noticias'],0,350); ?></p>
                                <p class="links"><a href="<?php echo $text."p".$datos[$i]["id_referencia"].".html" ?>" class="more">Leer mas</a> <a href="#" title="comentario" class="comments">Comentario</a></p>
				</div>
				<br><br>
				<hr>
                                <?php
                                }
                                ?>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<div id="search" >
						<form method="get" action="#">
							<div>
								<input type="text" name="s" id="search-text" value="" />
								<input type="submit" id="search-submit" value="GO" />
							</div>
						</form>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>	<!--
					<h2>Login</h2>
					   <form action="login.php" method="POST">
            
						<div>&nbsp;&nbsp;&nbsp;&nbsp;Usuario:
						<input type="text" name="usuario" >
						</div>
                
						<div>&nbsp;&nbsp;&nbsp;&nbsp;Clave:&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="password" name="clave" >
					      <a href="registrar.php">Registrar</a> |
						<a href="#">Clave perdida</a>   
						 </div>
                
						    <div>
						    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						    <input type="submit" value="Aceptar" >
						     <input type="reset" value="Borrar" >   
						    </div>
                
				</form> -->
					<!--<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>-->
				
                                <br>
                                </li>
				<li>
					<h2>Categories</h2>
					<?php
                                        $cate = $not->categorias();
                                        for($i=0;$i <sizeof($cate);$i++)
                                        {
                                        
                                        ?>
                                        <ul>
                                        <li><a href="?cat=<?php echo $cate[$i]['id_referencia'];?>" title="<?php echo $cate[$i]['categoria'];?>"><?php echo $cate[$i]['categoria'];?> 
																			
                                        </a> </li></ul>
                                        
                                        
                                        <!--
						<li><a href="#">PHP</a></li>
						<li><a href="#">JAVA</a></li>
						<li><a href="#">ASP.NET</a></li>
						<li><a href="#">Oracle</a></li>
						<li><a href="#">MySQl</a></li>
						<li><a href="#">Python</a></li>
					-->
                                        <?php
                                        }
                                        ?>
				</li>
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
<div id='paginacion' >
	<?php
	if($inicio == 0)
	{
	?>
	Anteriores Publicaciones 
	<?php
	}else
	{
	$anterior=$inicio-10;
	?>
	<a href="?p=<?php echo $anterior; ?>" title="Anteriores Publicaciones ">Anteriores Publicaciones </a>	
	<?php
	}
	?>
	
	&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;
	<?php
	if(count($datos)==0)
	{
	$proximo = $inicio +10;
	?>
	<a href="?p=<?php echo $proximo ; ?>" title="Siguiente Publicacion">Siguiente Publicacion</a>
	<?php
	}
	else
	{
	?>
	Siguiente Publicacion	
	<?php
	}
	?>
	
	
</div>



<div id="footer">
	<p>Sistema de Noticia de Helmer Salas </a>.</p>
</div>
<!-- end #footer -->
 
</body>
</html>
