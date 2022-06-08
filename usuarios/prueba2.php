<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Inscribete</button>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
      
      <div class="modal-body">
        <form action="prueba2.php" method="POST">
            <div class="row">
                <div id="msgQuoteSubmit" class="hidden"></div>
                <div class="form-group col-sm-6">
                <div class="help-block with-errors"></div>
                <input name="nombre" id="nombre" placeholder="Nombre completo*" class="form-control" type="text" required pattern="[A-Za-z ]{4,40}" required data-error="Ingresa tu nombre"> 
                <div class="input-group-icon"></div><br>
                </div>

                <div class="form-group col-sm-6">
                <div class="help-block with-errors"></div>
                <input name="control" id="control" placeholder="No. Control*" class="form-control" type="int" required pattern="[0-9]{8,8}" required data-error="Ingresa tu numero de control"> 
                <div class="input-group-icon"></div><br>
                </div>

                <div class="form-group col-sm-6">
                <div class="help-block with-errors"></div>
                <select name="carr" id="carr"class="form-control" required> 
                <option value="car">Selecciona tu Carrera</option>
                <option value="arqui">Arquitectura</option>
                <option value="sis">Ingeniería en Sistemas Computacionales</option>
                <option value="elctro">Ingeniería Electromecánica</option>
                <option value="bio">Ingeniería Bioquímica</option>
                <option value="empresa">Ingeniería en Gestión Empresarial</option>
                <option value="admi">Licenciatura en Administración</option>
                <option value="conta">Contador público</option>
                </select>
                <div class="input-group-icon"></div><br>
                </div>

                <div class="form-group col-sm-6">
                <div class="help-block with-errors"></div>
                <input name="fecha" id="fecha" placeholder="Semestre*" class="form-control" type="number" min="1" max="12" required data-error="Elige tu semestre"> 
                <div class="input-group-icon"></div><br>
                </div>

                <div class="form-group col-sm-6">
                <div class="help-block with-errors"></div>
                <input name="correo" id="correo" placeholder="Correo Institucional*" class="form-control" type="email"  required data-error="Ingresa tu correo institucional"> 
                <div class="input-group-icon"></div><br>
                </div>
        
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="submit7" name="enviar" class="btn btn-primary">Aceptar</button>
        <?php
        if(isset($_POST['enviar'])){
           include("conexion.php");
           $nombre=$_POST['nombre'];  
           $email=$_POST['correo']; 
           $separar = explode("@", $email);
           $allow = array("gmail.com", "hotmail.com");
           $dom = $separar[1];

           if(in_array($dom, $allow)){
               $insert = mysqli_query($conexion, "INSERT INTO estudiantes (Nombre, Email) values ('$nombre','$email')");
               echo'<script>alert("Registro Exitoso")</script>';	
           }else{
               echo '<script>alert("Error, Ingresa tu correo institucional")</script>';
           }
        }
        ?>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>