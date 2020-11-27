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

      $identificacion = $pos['identificacion'];
      $nombre = $pos['nombres'];
      $apellido = $pos['apellidos'];
      $grado = $pos['grado'];
      $correo = $pos['correo'];
      $contraseña = $pos['contraseña'];
      $codigo = '123erer';
      $rol = 1;
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
         header("Location: index.php?accion=datosGuardados");
         die();
      } else {
         header("Location: index.php?accion=datosNOGuardados");
         die();
      }
   }



   ///
   function eliminar()
   {
      $per = new modeloUsuarios();
      require("../vistas/vistaEstudiante.php");
      $per->eliminarUsuario($identificacion);
   }


   function modificar()
   {
      $per = new modeloUsuarios();
      require("../vistas/vistaEstudiante.php");
      $per->modificarUsuario($identificacion);
   }
}
