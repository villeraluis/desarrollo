<?php
require("modelo/modeloUsuarios.php");



class controladorUsuarios
{



   function __construct()
   {
   }



   function listarTodos()
   {
      $estudiantes = new modeloUsuarios();

      $datos = $estudiantes->listarUsuarios();
      require("vistas/vistasEstudiante/vistaTodosEstudiante.php");
   }

   function listarUno()
   {

      $per = new modeloUsuarios();
      require("vistas/vistaEstudiante.php");
      $per->listarUnUsuario($identificacion);
   }


   function agregaUsuario($pos)
   {

      $identificacion = $pos['id'];
      $nombre = $pos['nombres'];
      $apellido = $pos['apellidos'];
      $grado = $pos['grado'];
      $correo = $pos['correo'];
      $contraseña = $pos['clave'];
      $codigo = $pos['codigo'];
      $rol = $pos['rol'];
      $per = new modeloUsuarios();

      if (strlen($identificacion) > 0 && strlen($correo) > 0) {

         $per->addUsuario(
            $identificacion,
            $nombre,
            $apellido,
            $correo,
            $contraseña,
            $codigo,
            $grado,
            $rol
         );
         require_once 'controlador/controladorLogin.php';
         $controladorLogin = new controladorLogin();
         
         $controladorLogin->ingresar($pos);
        
      } else {
         header("Location: index.php?accion=datosNOGuardados");
         die();
      }
   }



   ///
   function eliminar($id)
   {
      $per = new modeloUsuarios();
      require("../vistas/vistaEstudiante.php");
      $per->eliminarUsuario($identificacion);
   }


   function modificar($id)
   {
      $per = new modeloUsuarios();
      require("../vistas/vistaEstudiante.php");
      $per->modificarUsuario($identificacion);
   }
}
