 <!DOCTYPE html>
<html lang="en-US">
  <head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <style>
  body{
    background-image:url(img.jpg);
}
.container{
    width:350px;
    height:auto;
    box-sizing: border-box;
    border:2px solid Gray;
    border-radius:5px;
    background-color:Gray;
    margin-top:50px;
    overflow:hidden;

}
.grad{
  height: 30px;
  width: none;
  background-color: red;
  background-image: radial-gradient(white,pink);
  font-size:25px;
}
header{
    text-align:center;
    color:#c44;
}
form{
    padding:10px;
}
.imp{
    width:150px;
    padding:3px;
    font-size:15px;
    border:2px solid #777;
    border-bottom:4px solid #777;
}
.sub-btn{
    font-style:bold;
    font-size:15px;
    background-color:red;
}
.form .msg{
    margin:15px 0 0;
    color:#fff;
    font-size:15px; 
}
.form .msg a{
    color:orange;
    text-decoration:none;
}
.register-form{
    /*display:none;*/
}
  </style>
  
 
  </head>


  <body>
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="login.php"></a>
</nav>
  <marquee class="grad" behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();">Register with us! </marquee>
  <center>
  <div class="container">
  <div class="row">
  <div class="col-4 offset-md-4 form-div">
  <h3>Please fill this form</h3>
  <form action="index.php" method="post" class="register-form">
    First name: <input type="text" class="imp" name="firstname" required=""><br><br>
    Last name:  <input type="text" class="imp" name="lastname" required=""><br><br>
	Email Id:   <input type="text" class="imp" name="Email" required=""><br><br>
	Password:   <input type="text" class="imp" name="Password" required=""><br><br>
    Age:        <input type="number" class="imp" name="Age" required=""><br><br>
	Address:    <input type="text" class="imp" name="Address" required=""><br><br>
	Mobile No.: <input type="int" class="imp" name="Mobile_no" required=""><br><br>
    <input type="file" name="avatar" accept="image/x-png,image/gif,image/jpeg" ><br><br>
	<input type="submit" name="register" value="Register" class="sub-btn" color="red">
    <p class="msg">Already Registered?<a href="login.php">LOGIN</a></p>
    <!-- <input type="submit" value="Sign In" > -->
   </form>
   
  
  </div>
  
  </div>
  </div>
  <center>
  <?php    
  include('connection.php');
  if(isset($_POST['register']))
  {
     $Firstname=$_POST['firstname'];
     $Lastname=$_POST['lastname'];
     $Email=$_POST['Email'];
     $Password=$_POST['Password'];
     $Age=$_POST['Age'];
     $Address=$_POST['Address'];
     $Mobile_no=$_POST['Mobile_no'];
     $sql="INSERT INTO records(firstname,lastname,email,password,age,address,mobile) VALUES('$Firstname','$Lastname','$Email','$Password',".$Age.",'$Address','$Mobile_no')";
     if(!mysqli_query($con,$sql))
{
  echo "not inserted";
} 

else
{
  echo "inserted";
}

  }
  ?>

</body>
</html>
 

