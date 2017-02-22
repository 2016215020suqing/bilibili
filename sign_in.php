<?php
$con = mysqli_connect("localhost","root","root") or die('Cloud not connect:'.mysqli_error());
 mysqli_select_db("demo",$con);
 if ($_POST['submit']) {
 	$un = $_POST['username'];
 	$sql="SELECT user.username,user.password FROM user WHERE username='$username'";
 	// echo$sql；
 	$query=mysqli_query($sql);
 	$rows=mysqli_num_rows($query);
 	if ($rows>0) {
 		echo"<script type='text/javascript'>alert;location='javascript:history.back()';</script>";
 	} else {
 		$user_in="INSERT INTO user (username,password) VALUES ($un,$pwd)");
        //echo $user_in;
        mysqli_query($user_in);
        echo "<script type='text/javascript'>alert;location.href='login.php';</script>"
 	}
    $pwd = $_POST['password'];
    if($result){
        echo "注册成功";
    } else {
        echo "注册失败";
    }
 }
?> 	
<?php
    $con = mysqli_connect("localhost","root","root") or die('Cloud not connect:'.mysqli_error());
    mysqli_select_db("demo",$con);
    $un = $_POST['username'];
    $pwd = $_POST['password'];
    $result=mysqli_query("SELECT * from user where username=$un");
    $row = mysqli_fetch_array($result);
    if($row) {
        if($row['password'] == $pwd) {
            echo "登陆成功";
        } else {
            echo "密码错误";
        }
    } else {
        echo "用户名不存在";
    }
?>
    
   
    
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>注册登录</title>
</head>
	<body>
		<form action="localhost/13.sign in.php" method="post">
		    <p>
		    	usename:<input type="text" name="username">
		    </p>
		    
		    <p>
		    	password:<input type="password" name="pwd">
		    </p>
		    <p>
		    	<input type="submit" value="sign in">
		    </p>
		    <p>
		    	<input type="submit" value="log in">
		    </p>
		</form>
	</body>
</html># bilibili
# bilibili
# bilibili
# bilibili
# bilibili
# bilibili
