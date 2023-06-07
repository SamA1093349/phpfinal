<?php ob_start();
      session_start();

if($_SESSION["babysitLogin"]=="Yes"){

}else{
    header("Location:error.php");
}
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>保母頁面</title>
	<style>
		body {
			background-image:url('background2.png');
            background-size:cover;
            background-repeat:no-repeat;
            background-color: transparent;
			color: #00008B;
		}

		#header {
			position: fixed;
			top: 10px;
			right: 10px;
		}

		#header a {
			margin-right: 100px;
			color: #00008B;
			text-decoration: none;
			background-color: transparent;
			font-size: 35px;
		}

		#logout-button {
			position: fixed;
			bottom: 40px;
			left: 360px;
			border: 2px solid #00BFFF;
			border-radius: 30px;
			padding: 20px 40px;
			background-color: #87CEFA;
			color: #00008B;
			font-size: 35px; 
		}

        #cus{
            position: fixed;
			border: 1px solid #00BFFF;
			border-radius: 23px;
			padding: 17px 34px;
			background-color: #87CEFA;
            font-size: 40px;
            color: #00008B;
        }

	</style>
</head>


<body>
    <div id="cus">保母頁面
	<div id="header">
		<a href="">訂單資料</a>
		<a href="#">托育紀錄</a>

	</div>

	<a id="logout-button" href="logout.php">登出</a>
</body>
</html>