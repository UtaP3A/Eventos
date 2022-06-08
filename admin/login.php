<!DOCTYPE html>
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
.modal-body {
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
.form-control:focus {
  box-shadow: inset 0 -1px 0 #7e7e7e;
}
.form-control {
  background-color: inherit;
  color: #fff;
  padding-left: 0;
  border: 0;
  border-radius: 0;
  border-bottom: 1px solid #fff;
}
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
p {
  text-align: center;
  padding-top: 2em;
  color: grey;
}
p a {
  color: #e1e1e1;
  text-decoration: none;
}
p a:hover {
  color: #fff;
}
	</style>
</head>
<body>
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ModalForm">
    Launch Modal Form
  </button>
<div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="myform bg-dark">
                <h1 class="text-center">Login Form</h1>
                <form>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-light mt-3">LOGIN</button>
                    <p>Not a member? <a href="#">Signup now</a></p>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>