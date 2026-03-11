<?php
// Initialize the session
session_start();
require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    color: black;
    overflow: hidden;


    }
        * {
            box-sizing: border-box;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            text-align: center;
            background-color: antiquewhite;

        }
      
  .button {
  padding: 15px 25px;
  font-size: 12px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
  }

  .button:hover {background-color: #b0a25f}

  .button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  }
      
        .container {
            padding: 16px;
            text-align: center;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        body,
        html {
            height: 100%;
            margin: 0;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        body {
            margin: auto;
            font-family: Arial;
            font-size: 17px;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .container {
            position: relative;
            background: rgba(0, 0, 0, 0);
            color: transparent;
            padding: 300px;
            margin: 100px;
            bottom: 390px;
        }
    
        button2 {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }
      
        .cancelbtn,
        .deletebtn {
            float: left;
            width: 50%;
        }

    /* Add a color to the cancel button */
        .cancelbtn {
            background-color: darkblue;
            color: white;
        }

    /* Add a color to the delete button */
        .deletebtn {
            background-color: orangered;
        }
      
        @media screen and (max-width: 300px) {

            .cancelbtn,
            .deletebtn {
                width: 100%;
            }
        }
      
        h2 {
            text-align: center;
        }
  </style>
  <title></title>
</head>
<body>
    
  <video autoplay="" muted="" loop="" id="myVideo"><source src="kkkp.mp4" type="video/mp4"> Your browser does not support HTML5 video.</video>
    
  <div class="container">
      <button2 type="button" class="cancelbtn"><a href="LoginHigherups.php" class="btn" style="color:White;">HIGHERUPS</a></button2>
      <button2 type="button" class="deletebtn"><a href="Login.php" class="btn" style="color:White;">FELLOW</a></button2>
      <form class="bg" action="CheckLoginHigherups.php" method="post">
           <h2 style="color:White;">HIGHERUPS LOGIN</h2>
    <img src="logokkp.jpg" alt="logo" style="width:20%;"> 
      
    
        
    <div class="form-group">
        <label for="ID"><b style="color:White;">HIGHERUPS ID</b></label><br>
    <input type="text" value="<?php if (isset($_COOKIE["id"])){echo $_COOKIE["id"];}?>" placeholder="Enter ID" name="ID" required>
        </div>
    
          
    <div class="form-group">
    <label for="psw"><b style="color:White;">PASSWORD</b></label><br>
    <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" placeholder="Enter Password" name="password" required>
            </div>
    <div class="form-group">
   <input type="checkbox" name="remember" <?php if (isset($_COOKIE["id"]) && isset($_COOKIE["pass"])){ echo "checked";}?>><b style="color:White;">Remember me </b><br><br>
        </div>
        <div class="form-group">
    <button type="submit" value="Login" class="button add" name="login">LOGIN</button>
    </div><br>
    <p style="color:White;">Don't have an account? <a href="RegisterHigherups.php">Sign up now</a>.</p>
        <h1 style="background-color:Tomato; width: 100%;"><b style="color:Black;"><?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?></b></h1>
    </form>
  </div>
</body>
</html>
