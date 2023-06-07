<?php ob_start();
      session_start();

if($_SESSION["adminLogin"]=="Yes"){

}else{
    header("Location:error.php");
}
?>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>管理者頁面</title>
</head>

<body> 
<br/>
<h2>保母後台資訊:</h2>
    <hr>
	<ul>
		<li>保母評價排行</li>
        <li>保母資訊</li>
	</ul>
<br/>
<h2>客戶後台資訊:</h2>
    <hr>
	<ul>
		<li>客戶托育時長排行</li>
        <li>取消訂單次數</li>
	</ul>
<br/>
<h2>訂單資訊:</h2>
<br/>
<a href="logout.php">點此登出</a>
<br/>
<a href="#top">回到上面</a>
</body>

</html>    