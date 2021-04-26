<!DOCTYPE html>
<html>
<head>
<title>Welcome Page</title>
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
.form button{
    text:uppercase;
    background:orange;
    width:80px;
    padding:15px;
    color:#fff;
    font-size:14px;
    cursor:pointer;
}
.form button:hover, .form button:active{
    background:green;
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
  <h3>Welcome User!!</h3>
  <form action="index.php" method="post">
    Username: <input type="text" class="imp" name="username"><br><br>
    Email ID:   <input type="text" class="imp" name="Email"><br><br>
	Password:   <input type="text" class="imp" name="Password"><br><br>
    
    <input type="image" name="avatar"><br><br>
	
    <input type="submit" value="Sign In" class="sub-btn" color="green">
   </form>


</div>
</div>
</div>
</center>
</body>
</html>
