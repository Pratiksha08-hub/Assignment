<!DOCTYPE html>
<html>
<head>
<title>Sign In page</title>
<style>
  body{
    background-image:url(img.jpg);
}
.van{
    width:350px;
    height:300px;
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
.sub-btn{
    font-style:bold;
    font-size:15px;
    
}
.imp{
    width:150px;
    padding:3px;
    font-size:10px;
    border:2px solid #777;
    border-bottom:4px solid #777;
}

</style>
</head>
<body>
<marquee class="grad" behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();">Register with us! </marquee>
<center>
<div class="van">
  <div class="lan">
  <div class="col-4 offset-md-4 form-div">
  <h3>Login Page</h3>
  <form method="post">
    <!-- Username: <input type="text" class="imp" name="username"><br><br> -->
    Email ID:   <input type="text" class="imp" name="Email"><br><br>
	Password:   <input type="text" class="imp" name="Password"><br><br>
    
    <!-- <input type="file" name="avatar"><br><br> -->
	
    <input type="submit" name="Signin" value="Sign In" class="sub-btn" >
   </form>


</div>
</div>
</div>
</center>
<?php      
    include('connection.php');
    if(isset($_POST['Signin'])){
     if($_POST['Email']==""|| $_POST["Password"]=='')
    {
        $err="Fill your Email Id and Password First";
    }
    else{
        $d=mysqli_query($con,"SELECT * FROM records where email='".$_POST['Email']."'");
        $row=mysqli_fetch_object($d);
        $fid=$row->email;
        $fpass=$row->password;
        if($fid==$_POST['Email'] && $fpass==$_POST['Password'])
        {
            $_SESSION['sid']=$_POST['Email'];
            header('location:welcome.php');
        }
        // else{
        //     echo "invaild id or pass";
        // }   
    }
    }     
?> 
</body>
</html>