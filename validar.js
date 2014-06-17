f = document;

function validar()
{
    
   if(f.fvalidar.nombre.value==0)
   {
    alert("Tiene que escribir su nombre en el campo nombre");
    f.fvalidar.nombre.focus();
    return 0;
   }
    else if(f.fvalidar.apellido.value==0)
   {
    alert("Tiene que escribir su apellido en el campo apellido");
    f.fvalidar.apellido.focus();
    return 0;
   }
   
    else if(f.fvalidar.correo.value==0)
   {
    alert("Tiene que escribir su correo en el campo correo");
    f.fvalidar.correo.focus();
    return 0;
   }
   
    else if(f.fvalidar.usuario.value==0)
   {
    alert("Tiene que escribir su User en el campo Usuario");
    f.fvalidar.usuario.focus();
    return 0;
   }
   
    else if(f.fvalidar.Clave.value==0)
   {
    alert("Tiene que escribir su PASSWORD en el campo Contrasena");
    f.fvalidar.clave.focus();
    return 0;
   }
   
   
   
   
   
   
}