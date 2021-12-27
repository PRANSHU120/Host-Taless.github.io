<!DOCTYPE html>
<?php require_once("config.php");
if(isset($_SESSION["login_sess"])) 
{
  header("location:account.php"); 
}
?>
<html>
<head>
<title> Password Reset - HOST-TALES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sty.css">
    <div class="container">
	<div class="row">
		 <div class="col-sm-4">
		</div>
		<div class="col-sm-4">
      <?php
            if(isset($_GET['token']))
            {
          $token= $_GET['token'];
          }
   //form for submit 
    if(isset($_POST['sub_set'])){
       extract($_POST);
            if($password ==''){
                $error[] = 'Please enter the password.';
            }
            if($passwordConfirm ==''){
                $error[] = 'Please confirm the password.';
            }
            if($password != $passwordConfirm){
                $error[] = 'Passwords do not match.';
            }
            if(strlen($password)<5){ // min 
            $error[] = 'The password is 6 characters long.';
        }
         if(strlen($password)>50){ // Max 
            $error[] = 'Password: Max length 50 Characters Not allowed';
        }
        $fetchresultok = mysqli_query($dbc, "SELECT email FROM pass_reset WHERE token='$token'");
    if($res = mysqli_fetch_array($fetchresultok))
{
  $email= $res['email']; 
}
            if(isset($email) != '' ) {
            $emailtok=$email;
            }
            else 
              { 
             $error[] = 'Link has been expired or something missing ';
              $hide=1;
              }
if(!isset($error)){
    $options = array("cost"=>4);
    $password = password_hash($password,PASSWORD_BCRYPT,$options);
    $resultresetpass= mysqli_query($dbc, "UPDATE users SET password='$password' WHERE email='$emailtok'"); 
    if($resultresetpass) 
    { 
           $success="<div class='successmsg'><span style='font-size:100px;'>&#9989;</span> <br> Your password has been updated successfully.. <br> <a href='login.php' style='color:#fff;'>Login here... </a> </div>";

          $resultdel = mysqli_query($dbc, "DELETE FROM pass_reset WHERE token='$token'");
          $hide=1;
    }
} 
    }
    ?>
    <div class="login_form">
		<form action="" method="POST">
  <div class="form-group">
  <h1>HOST<span class="text-warning">-TALES</span> </h1>
                <hr / class="w-215 m-auto">
     
    <?php 
if(isset($error)){
        foreach($error as $error){
            echo '<div class="errmsg">'.$error.'</div><br>';
        }
    }
    if(isset($success)){
    echo $success;
  }
              ?>
<?php if(!isset($hide)){ ?>
    <label class="label_txt">Password </label>
      <input type="password" name="password" class="form-control" required>
  </div>
   <div class="form-group">
    <label class="label_txt">Confirm Password </label>
      <input type="password" name="passwordConfirm" class="form-control" required  >
  </div>
  <br>
  <button type="submit" name="sub_set" class="btn btn-primary btn-group-lg form_btn">Reset Password</button>
  <?php } ?>
</form>
</div>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</div> 
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</html>