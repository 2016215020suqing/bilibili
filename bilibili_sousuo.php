<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript"></script>
    <meta charset="utf-8">
	<title>搜索</title>
</head>
<body>
    <form action="">
    	<input type="text" name="wd" class="search_key" placeholder="搜索内容">
    	<input type="submite" value="搜索" class="search_btn search_btn_reset">
    </form>
</body>
</html>
<?php
 // $con = mysqli_connect("localhost","root","root") or die('Cloud not connect:'.mysqli_error());
 //    mysqli_select_db("demo",$con);
 // $un = $_POST['film_name'];  
 // $sql="SELECT film_name FROM bilibili_film WHERE film_name like'%你想要的电影%'";//在$sql中  利用 like   %% 这样来模糊搜索   
 // $query=mysqli_query($sql);
 // while ($rs=mysqli_fetch_array($query)) {
 //     echo $rs['film_name'];
 // }
$dsn = "mysql:host=localhost;dbname=bilibili_film";
$db = new PDO($dsn, 'root', '');
$count = $db->exec();

?>

