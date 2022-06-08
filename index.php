<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,500,600,700" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <style>
         #tex{
            font-family: 'Open Sans', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 16px;
            font-size: 1.5rem;
            background-color: #f3f3f3;
            text-decoration: none;

        } 
        header{
            text-align: center;
        }
        
        figcaption{
            text-decoration: none;
            color: rgb(255,255,255);
        }
        
        #galeria {
            margin: 1rem auto;
            width:100%;
            max-width:960px;
            padding:0 10px 40px;
            box-sizing: border-box;
            column-count: 3;

            /* Espacio entre columnas */
            -moz-column-gap: 20px;
            -webkit-column-gap: 20px;
            column-gap: 20px;
            
            /* Filete entre columnas */
            /*-moz-column-rule: 1px solid #bbb;
            -webkit-column-rule: 1px solid #bbb;
            column-rule: 1px solid #bbb;*/
        }

        #galeria header {
            -webkit-column-span:all;
            column-span:all;
        }

        article {
            background:rgb(2, 34, 58); /*color del fondo de los cuadros de las img*/
            border-radius:5px;
            border:1px solid #ccc; /*contorno del cuadro de las img*/
            margin:0 0 20px 0;
            text-align: center;
            max-width: 100%;
            filter: opacity(100%);

            /*Evitamos que se corte al cambiar de columna*/
            break-inside: avoid;
            page-break-inside: avoid;         
        }
        
        article img {
            width:50%;
        }

        article:hover {
            transition: .5s ease;
            filter: opacity(100%);
        }

        figure {
            padding:1rem;
            box-sizing: border-box;
        }

        @media (max-width:500px) { 
            #galeria {
                columns:2;
            }

        }
        
        /* Móviles en vertical */

        @media (max-width: 480px) {
            #galeria {
                columns: 1;
            }
        }


    </style>
</head>
<?php
include("menu.php");
?>
<body>
    <center><H1>Inscribete a un curso</H1></center><br>
    <section id="galeria">
        <article>
            <!-- hrf, toggle, target para el modal y el modal va despues de section -->
            <a id="tex" target="_blank" href="#!" data-bs-toggle="modal" data-bs-target="#alumnos"> 
                <figure>
                    <img src="./img/stu.png">
                    <figcaption>Alumnos</figcaption>
                </figure>
            </a>
        </article>
        <article>
            <a id="tex" target="_blank" href="facebook.com">
                <figure>
                    <img src="./img/meg.png">
                    <figcaption>Maestros y Egresados</figcaption>
                </figure>
            </a>
        </article>
        <article>
            <a id="tex" target="_blank" href="facebook.com">
                <figure>
                    <img src="./img/pub.png">
                    <figcaption>Publico en General</figcaption>
                </figure>
            </a>
        </article>
    </section>

        <!-- FORMULARIO DE ALUMNOS -->
        <div class="modal fade" id="alumnos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de alumnos a un evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
      
      <div class="modal-body">
        <form action="index.php" method="POST">
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
                <option value="Arquitectura">Arquitectura</option>
                <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
                <option value="Ingeniería Electromecánica">Ingeniería Electromecánica</option>
                <option value="Ingeniería Bioquímica">Ingeniería Bioquímica</option>
                <option value="Ingeniería en Gestión Empresarial">Ingeniería en Gestión Empresarial</option>
                <option value="Licenciatura en Administración">Licenciatura en Administración</option>
                <option value="Contador público">Contador público</option>
                </select>
                <div class="input-group-icon"></div><br>
                </div>

                <div class="form-group col-sm-6">
                <div class="help-block with-errors"></div>
                <input name="sem" id="sem" placeholder="Semestre*" class="form-control" type="number" min="1" max="12" required data-error="Elige tu semestre"> 
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
           $control=$_POST['control'];
           $carr=$_POST['carr'];
           $sem=$_POST['sem'];
           $email=$_POST['correo']; 
           $separar = explode("@", $email);
           $allow = array("gmail.com", "hotmail.com");
           $dom = $separar[1];

           if(in_array($dom, $allow)){
               $insert = mysqli_query($conexion, "INSERT INTO Alumnos (Nombre, N_Control, Carrera, Semestre, Email) values ('$nombre','$control','$carr','$sem','$email')");
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

<!-- FORMULARIO DE MAESTROS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>