<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-HOST-TALES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sty.css">
</head>
<body>
<div class="container" >
    <div class="row">

        <div class="col-sm-4">
        </div>
       <div class="col-sm-4">
       <h1>REGISTRATION<span class="text-warning"> FORM</span> </h1>
                <hr / class="w-215 m-auto">
       </div>
       <div class="col-sm-4">
   </div>
</div>

<div class="row">
<?php 
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($fname)<3){ // Minimum 
      $error[] = 'Please enter First Name using 3 charaters atleast.';
        }
if(strlen($fname)>20){  // Max 
      $error[] = 'First Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
            $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
        }    
if(strlen($lname)<3){ // Minimum 
      $error[] = 'Please enter Last Name using 3 charaters atleast.';
        }
if(strlen($lname)>20){  // Max 
      $error[] = 'Last Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)){
            $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
              }    
      if(strlen($username)<3){ // Change Minimum Lenghth   
            $error[] = 'Please enter Username using 3 charaters atleast.';
        }
  if(strlen($username)>50){ // Change Max Length 
            $error[] = 'Username : Max length 50 Characters Not allowed';
        }
  if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)){
            $error[] = 'Invalid Entry for Username. Enter lowercase letters without any space and No number at the start- Eg - myusername, okuniqueuser or myusername123';
        }  
if(strlen($email)>50){  // Max 
            $error[] = 'Email: Max length 50 Characters Not allowed';
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
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
         
        $sql="select * from users where (username='$username' or email='$email');";
        $res=mysqli_query($dbc,$sql);
     if (mysqli_num_rows($res) > 0) {
  $row = mysqli_fetch_assoc($res);
  
       if($username==$row['username'])
       {
             $error[] ='Username alredy Exists.';
            } 
         if($email==$row['email'])
         {
              $error[] ='Email alredy Exists.';
            } 
        }
           if(!isset($error)){ 
                $date=date('Y-m-d');
              $options = array("cost"=>4);
      $password = password_hash($password,PASSWORD_BCRYPT,$options);
              
             $result = mysqli_query($dbc,"INSERT into users values(' ','$fname','$lname','$username','$email','$password','$date')");
  
             if($result)
      {
       $done=2; 
      }
      else{
        $error[] ='Failed : Something went wrong';
      }
   }
   } ?>
  
           <div class="col-sm-4">
       
   <?php 
    if(isset($error)){ 
  foreach($error as $error){ 
    echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
  }
  }
  ?>
          </div>
          <div class="col-sm-4">
        <?php if(isset($done)) 
        { ?>
      <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> You have registered successfully . <br> <a href="logins.php" style="color:#fff;">Login here... </a> </div>
        <?php } else { ?>
         <div class="signup_form">
          <form action="" method="POST">
    <div class="form-group">
        
          <label class="label_txt">First Name</label>
      <input type="text" class="form-control" name="fname" value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required="">
    </div>
    <div class="form-group">
      <label class="label_txt">Last Name </label>
      <input type="text" class="form-control" name="lname" value="<?php if(isset($error)){ echo $_POST['lname'];}?>" required="">
    </div>
   
  <div class="form-group">
      <label class="label_txt">Username </label>
      <input type="text" class="form-control" name="username" value="<?php if(isset($error)){ echo $_POST['username'];}?>" required="">
    </div>
  
  <div class="form-group">
      <label class="label_txt">Email </label>
      <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
    </div>
    <div class="form-group">
      <label class="label_txt">Password </label>
      <input type="password" name="password" class="form-control" required="">
    </div>
     <div class="form-group">
      <label class="label_txt">Confirm Password </label>
      <input type="password" name="passwordConfirm" class="form-control" required="">
    </div>
    <br>
    <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">SignUp</button>
     <p>Have an account?  <a href="logins.php">Log in</a> </p>
  </form>
  <?php } ?> 
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