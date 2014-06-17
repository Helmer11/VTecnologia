<?php
require_once("conexion.php");

class Noticia extends Conexion
{
     private $noticia = Array();
    private $cat = Array();
    private $id;
    private $campo = Array();
    private $pagina = Array();
    
    public function ingresar($nom, $ape,$cor,$us,$pas)
    {
        $sql="insert into usuario(nombre,apellido,correo,usuario,clave) value('$nom','$ape','$cor','$us','$pas')";
        $consulta = mysql_query($sql,$this->conectar());
        
        if($consulta)
        {
            echo "<script language='Javascript'>
            alert('su datos fueron ingresado en nuestra base de datos');
            window.location='index.php';
            </script>";
        
        }else
        {
             echo "<script language='Javascript'>
            alert('su datos no fueron ingresado.Por favor intetelo mas tarde');
            window.location='registrar.php';
            </script>";
        }
        
    }
    
    public function actualizar($nom, $ape,$cor,$us,$pas)
    {
      $sql="update usuario set nombre='$nom', apellido='$ape',correo='$cor',usuario='$us',clave='$pas' where nombre='$nom'";  
        
        $consulta = mysql_query($sql,$this->conectar());
               
            if($consulta)
            {
               echo "<script type='text/javascript'
            alert('Sus datos fueron actualizado');
            </script>";
               
            }else{
                
                 echo "<script type='text/javascript'
            alert('Sus datos no pudieron ser actualizado. Por favor intentelo mas tarde');
            </script>"; 
                
            }
    }
    public function borron()
    {
        $sql= "delete from usuarios where usuario='$use'";
        mysql_query($sql,$this->conectar); 
        
        
    }   


  //********* metodo para loguear el usuario***************************************
    public function logueo()
    {
        
      if(isset($_POST['usuario']))
      {
        $use =$_POST['usuario'];
        $pass = $_POST['clave'];
        
        $sql = "select usuario from usuarios where usuario='$use'";
        
        $consulta = mysql_query($sql,Conexion::conectar());
        
        if(mysql_num_rows($consulta)== 0)
        {
            echo "<script type='text/javascript'>
            alert('El ".$use." no existe en la base de datos');
            window.location='index.php'
            </script>";
            
        }else{
            $query = "select usuario, clave from usuarios where usuario='".$_POST['usuario']."' and clave='".$_POST['clave']."'";
            $resultado = mysql_query($query,Conexion::conectar());
            if(mysql_num_rows($resultado)== 0)
            {
                 echo "<script type='text/javascript'>
            alert('El Usuario y la clave ingresado no coiciden' );
            window.location='index.php';
            </script>";
            
                 
            }else{
               
                $_SESSION['us'] = $_POST['usuario'];
                header("Location:login.php");
                
            }    
        }
      }
      }
      
    //******************* metodo para presentar el nombre del usuario**********************************************
       public function saludo_usuario($nom)
      {
        $sql="select usuario from usuarios where usuario='$nom'";
		$res=mysql_query($sql,Conexion::conectar());
                
		while($reg= mysql_fetch_array($res))
                {
		
		   
                }
        }
        
      //******************** metodo para agregar contenido*********************************************
      public function agregar_contenido($a,$t,$c,$n)
      {
         $sql="insert into noticias(autor,titulo,categoria,noticias) value('$a','$t','$c','$n')";
         $consulta = mysql_query($sql,  Conexion::conectar());
         
         if($consulta)
         {
                  echo "<script type='text/javascript'>
            alert('El contenido fue ingresado' );
            window.locatio='login.php';
            </script>";
            
         }else{
           
                  echo "<script type='text/javascript'>
            alert('No se pudo ingresar el contenido' );
               window.locatio='login.php';
            </script>";
            
             
         }
         
      }

//************************ metodo que presenta los contenido para el adminitrador o usuario que de logue *******************************************     
     public function publicacione_admin($usuario)
        {
            $sql = "select autor, titulo, noticias,id_referencia from noticias where id_noticia='2'";
            
            $rs = mysql_query($sql,Conexion::conectar());
            
            while($reg =  mysql_fetch_array($rs))
            {
               $noti =$reg['noticias'];
               $id = $reg['id_referencia']; 
               printf("<tr><td>&nbsp;%s &nbsp;&nbsp; </td><td>&nbsp;%s &nbsp;&nbsp;</td>
                      <td>&nbsp;%s &nbsp;&nbsp;&nbsp;</td><td><a href='editar.php?id=$id'>Modificar</a></td>&nbsp;&nbsp;
			<td><a href='borrado.php?id=$id'>Borrar</a></td></tr>",
                       $reg['autor'],$reg['titulo'], substr($reg['noticias'],0,50));
                
               
            }   
        }
        public function publicacion()
        {
            $sql = "select * from noticias order by Id_noticia desc";
            $res = mysql_query($sql,Conexion::conectar());
            while($reg = mysql_fetch_array($res)){
            $this->noticia[] = $reg;
             
            }
            return $this->noticia;
        }
    
        public function paginacion($inicion){
            $sql = "select * from noticias order by id_referencia desc limir $inicion,10";
            $res = mysql_query($sql,Conexion::conectar());
            while($reg = mysql_fetch_assoc($res)){
                $this->pagina[] = $reg;
            }
            return $this->pagina;
        }
    
    
    
    //***************************** metodo de categoria ***********************************************
    public function categorias(){
        $sql = "select * from noticias order by categoria  asc";
        $res = mysql_query($sql,Conexion::conectar());
        while($reg = mysql_fetch_assoc($res)){
            $this->cat[] =$reg;
            }
        return $this->cat;
    }
    
//****************************************************************************************************************
public function extraer_campo($id)
{
    $sql = "select * from noticias where id_referencia='$id'";
        $res = mysql_query($sql,Conexion::conectar());
        while($reg = mysql_fetch_assoc($res))
        {
            
            $this->campo[] =$reg;
            
        }
        return $this->campo;
}
public function borrar($id)
{
    $sql="delete from datos where id_noticia='$id'";
    
    $consulta = mysql_query($sql,Conexion::conectar());
    
    
    if($consulta){
        echo "El Articulo fue borrado";
    }
    else{   
        echo "El Articulo no pudo ser borrado.Intetelo mas Tarde";
    }
}
    
  // ********************* metodo que destuye la session ****************************************      
 public function salir(){
   session_start();
    session_destroy();
    header("Location: index.php");
       
}
//************************ fin del metodo ****************************************

//************** metodo para buscar ******************************************
public function buscar($palabra){
     $sql = "select * from noticias where like='%$palabra%'";
     $query = mysql_query($sql,$this->conectar());
     while($reg = mysql_fetch_assoc($query)){
          
     }
}



}
?>