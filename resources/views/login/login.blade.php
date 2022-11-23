<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 20%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}



</style>
</head>
<body>

<h2>Iniciar Sesion</h2>


<div class="container">
    <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">

  <form >
    <div class="imgcontainer">
      <img src="https://i.pinimg.com/564x/29/47/9b/29479ba0435741580ca9f4a467be6207.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Nombre usuario</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Confirmar</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" href="{{url('/welcome')}}" class="cancelbtn">Cancel</button>
      <a href="{{url('/welcome')}}" class="w3-xlarge w3-right"><i class="fa fa-user">Inicia Sesion </i></a>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<div class="card-footer text-muted">
  2 days ago
</div>
</div>
</div>

<script>

</script>

</body>
</html>
