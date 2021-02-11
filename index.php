<?php
    require_once "conexion.php";
    require_once "metodosCrud.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>OHH DIOS MI PROMER CRUD</title>
  </head>
  <body>
  
    <div class="container">
        <h1> MI CRUD</h1>

        <form action="procesos/insertar.php" method="post">
            <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="txtnombre">
            </div>

            <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="txtapellido">
                
            </div>

            <div class="form-group">
                    <label>nota1</label>
                    <input type="text" class="form-control" name="nota1">
                
            </div>

            <div class="form-group">
                    <label>nota2</label>
                    <input type="text" class="form-control" name="nota2">
                
            </div>
            
            <button type="submit" class="btn btn-success">Agregar</button>
            
        </form>

        <br><br>

        <h2>Datos Estudiante</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nota 1</th>
                    <th scope="col">Nota 2</th>
                    <th scope="col">Definitiva</th>
                    <th scope="col">Opciones</th>

                </tr>
            </thead>

            <tbody>
            <?php 
                $obj = new metodos();
                $sql="SELECT id,nombre,apellido,nota1,nota2 from t_estudiante";
                $datos=$obj->mostrarDatos($sql);

                foreach ($datos as $key) {
            ?>
             
                <tr>
                
                <td><?php echo $key['nombre']; ?></td>
                <td><?php echo $key['apellido']; ?></td>
                <td><?php echo $key['nota1']; ?></td>
                <td><?php echo $key['nota2']; ?></td>
                <td><?php echo (($key['nota1']*0.4)+($key['nota2']*0.6)); ?></td>
                 <td><form action="procesos/eliminar.php" method="post">
                 <input type="hidden" class="form-control" name="id" value=<?= $key['id'] ?>>
                 <button type="submit" class="btn btn-danger">eliminar</button>
                    
                </form></td>
                </tr>
                
                <?php 
                
                }
                ?>
            </tbody>
        </table>


    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>