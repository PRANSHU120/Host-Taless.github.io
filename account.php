<!DOCTYPE html>
<?php require_once("config.php");
 $email=$_SESSION["login_email"];
 $findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username']; 
$fname = $res['fname'];   
$lname = $res['lname'];  
$email = $res['email'];  
}
?> 
<html>
<head>
   <title> My Account - Techno Smarter</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sty.css">
</head>
<body>
<div class="container">
   <div class="row">
       <div class="col-sm-3">
       </div>
       <div class="col-sm-6">
    <form action="login_process.php" method="POST">
 <div class="login_form">
<img src="https://technosmarter.com/assets/images/logo.png" alt="Techno Smarter" class="logo img-fluid"> <br> 
    <p><a href="logout.php"><span style="color:red; float: right;">Logout</span> </a></p>
         <p> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </p>
         <table class="table">
         <tr>
             <th>First Name </th>
             <td><?php echo $fname; ?></td>
         </tr>
         <tr>
             <th>Last Name </th>
             <td><?php echo $lname; ?></td>
         </tr>
         <tr>
             <th>Username </th>
             <td><?php echo $username; ?></td>
         </tr>
          <tr>
             <th>Email </th>
             <td><?php echo $email; ?></td>
         </tr>
         </table>
       </div>
       <div class="col-sm-3">
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