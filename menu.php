<!-- Whubs.com - Download Free Responsive Website Layout Templates designed on HTML5 CSS3,Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross browser supported, best quality world class designs. -->
<!DOCTYPE html>
<html>

<head>
    <title>navbar - demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /*Whubs.com - Download Free Responsive Website Layout Templates designed on HTML5 CSS3,
Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross 
browser supported, best quality world class designs.*/
@import url('https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900');
.body {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
}

p {
    color: #6c6c6f;
    font-size: 1em;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #323233;
    text-transform: uppercase;
}
#top{
    background: #5499C7;
    padding: 5px;
}
#top ul{
    padding: 0;
    margin: 0;
}
#top ul li{
    list-style-type: none;
    display: inline-block;
    padding: 2px;
    font-weight: 700;
}
#top li i{
    font-size: 18px;
    letter-spacing: 3px;
        padding: 5px 15px;
    color: #000;

}
#top li i:hover{
    color: #02223a;
}
#left{
    padding-left: 20px;
}
.navbar{
    width: 100%;
}
.navbar-brand span {
    color: #fed136;
    font-size: 25px;
    font-weight: 700;
    letter-spacing: 0.1em;
    font-family: 'Roboto', sans-serif;
}

.navbar-brand {
    color: #000;
    font-size: 25px;
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    letter-spacing: 0.1em;
}

.navbar-nav .nav-item .nav-link {
    padding: .9em 1em !important;
    font-size: 120%;
    font-weight: 500;
    letter-spacing: 1px;
    color: #fff;
    font-family: 'Roboto', sans-serif;
}

.navbar-nav .nav-item .nav-link {
    color: #333;
}

.navbar-nav .nav-item .nav-link:hover {
    color: #02223a;
}

.navbar-expand-md .navbar-nav .dropdown-menu {
    border-top: 3px solid #333;
}

.s {
    background: #fff;
}

.dropdown-item:hover {
    background-color: #DC7633;
    color: #fff;
}
.dropdown:hover .dropdown-menu {
    display: block;
}
nav {
    -webkit-transition: padding-top .3s, padding-bottom .3s;
    -moz-transition: padding-top .3s, padding-bottom .3s;
    transition: padding-top .3s, padding-bottom .3s;
    border: none;
    box-shadow: 0px 0px 14px #888888;
}

.w3hubs {
     top: 0;
    right: 0;
    left: 0;z-index: 1030;
    padding-top: 0;
     position: fixed;
    padding-bottom: 0;
    background-color: #fff;
   
}

.navbar-toggler:focus,
.navbar-toggler:hover {
    outline: none;
    border: none;
}

.navbar-toggler-icon {
    background: #333;
    height: 5px;
    margin: 5px;
    display: block;

}
#w3hubs{
    padding-top: 50px; /*espacio despues del menu*/
}

/* mobile view */

@media (max-width:500px) {
    .navbar-nav {
          color: #fff;
        z-index: 1;
        margin-top: 5px;
    }

    .navbar-nav .nav-item .nav-link {
        padding: 0.7em 1em !important;
        font-size: 100%;
        font-weight: bold;
    }
    

}

@media(max-width: 447px){
    .ml-3, .mx-3 {
    margin-left: 0rem!important;
}
}
@media(max-width: 464px){
    .pull-right{
        float: none;

    }
    #top ul{
        text-align: center;
    }
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-default" id="banner">
        <div class="container-fluid">
           
        <a class="navbar-brand text-white pl-5" href="menu.php"><img src="./img/ita.jpeg"></a>
            <!-- <a class="navbar-brand" href="#">W3HUBS</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
  </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                     Dropdown -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Services
      </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Services 1</a>
                            <a class="dropdown-item" href="#">Services 2</a>
                            <a class="dropdown-item" href="#">Services 3</a>

                        </div>

                    </li> --> 
                    <li class="nav-item">
                        <a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#ModalForm">Administrador</a>
                  
                        <!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Document</title>
	<style>
		.modal-content {
  width: 80%;
  margin: 0 auto;
}
.modal-bodi {
  padding: 0;
}
.btn-close {
  position: absolute;
  right: 0;
  padding: 1em;
}
h1 {
  font-size: 2.3em;
  font-weight: bold;
}
.myform {
  padding: 2em;
  max-width: 100%;
  color: #fff;
  box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
  @media (max-width: 576px) {
    max-width: 90%;
    margin: 0 auto;
  }
}
/* .form-control:focus {
  box-shadow: inset 0 -1px 0 #7e7e7e;
}
.form-control {
  background-color: inherit;
  color: #fff;
  padding-left: 0;
  border: 0;
  border-radius: 0;
  border-bottom: 1px solid #fff;
} */
.myform .btn {
  width: 100%;
  font-weight: 800;
  background-color: #fff;
  border-radius: 0;
  padding: 0.5em 0;
}
.myform .btn:hover {
  background-color: inherit;
  color: #fff;
  border-color: #fff;
}


	</style>
</head>
<body>
<!-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ModalForm">
    Launch Modal Form
  </button> -->
<!-- <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-bodi">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="myform bg-dark">
                <h1 class="text-center">Inicia Sesion</h1>
                <form>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-light mt-3">LOGIN</button>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html> --> 

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="w3hubs"></div>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
