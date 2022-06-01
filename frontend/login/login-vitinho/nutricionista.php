<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" href="style/stylenu.css" rel="stylesheet"/>
    <title>Cardápio RU</title>
  </head>
  <body>

  <style>
    .w3-container{background-color: white; width: 600px; height: 180%; border-radius: 5px; margin-left: 31%;}
    body {background-color: rgb(84, 174, 96);}
    .fundo {background-color: rgb(250, 252, 250); margin-top: 0px; margin-left: -3%; width: 110%;}
    h2 {margin-bottom: 50px;margin-left: 10%; font-family: "Lucida Console", "Monaco", monospace}

  </style>
      
      <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class = "fundo">
  <div class="w3-container">
  <img src="img/logo.png" alt="Logo IFRS" width="500" height="200">
    <div class="form-group">
    <h2>Registro de nutricionista</h2>
      <form name="registration" action="" method="post">
        <input type="text" name="username" class="form-control" placeholder="Username" required />
        <input type="email" name="email" class="form-control" placeholder="Email" required />
        <input type="password" name="password" class="form-control" placeholder="Password" required />
        <button type="button" class="btn btn-link" onclick= "window.location.href = 'http://localhost/pw3/cardapiopw3/frontend/login/login-vitinho/index.php'">Voltar</button>
        <input type="submit" name="submit" value="Register" />
      </form>
    </div>
<?php } ?>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
</body>
</html>
