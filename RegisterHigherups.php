<?php

require_once "connection.php";
 
// Define variables and initialize with empty values
$id = $phone = $email = $password = $confirm_password = "";
$id_err = $phone_err = $email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["id"]))){
        $id_err = "Id is required";
    } else {
        $id = trim($_POST["id"]);
    }
    
    if(empty(trim($_POST["phone"]))){ 
        $phone_err = "Phone number is required";  
    } else {  
        $phone = trim($_POST["phone"]);
        // check if mobile no is well-formed  
        if (!preg_match ("/^[0-9]*$/",  trim($_POST["phone"]))){
            $phone_err = "Only numeric value is allowed.";  
        }  
    }
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Email is required";  
    } else {  
        $email = trim($_POST["email"]);
            // check that the e-mail address is well-formed  
        if (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {  
            $email_err = "Invalid email format";  
        }  
     }  
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($id_err) && empty($phone_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO higherups VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 'ssss', $param_id, $param_phone, $param_email, $param_password);
            
            // Set parameters
            $param_id = $id;
            $param_phone = $phone;
            $param_email = $email;
            $param_password = $password; // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                     // Redirect to login page
                header("location: LoginHigherups.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            font: 14px sans-serif;
            background-image: url("backgroundRegister.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .wrapper{ width: 360px; padding: 20px; max-width: 500px;
  margin: auto; padding: 25px; background-color: plum;  }
        
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>

    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control <?php echo (!empty($id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $id; ?>">
                <span class="invalid-feedback"><?php echo $id_err; ?></span>
            </div>   
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>">
                <span class="invalid-feedback"><?php echo $phone_err; ?></span>
            </div> 
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div> 
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="LoginHigherups.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>