<?php
session_start();

// 处理用户提交的注册表单
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 获取用户输入的数据
    $account = $_POST['account'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $join_date = date("Y-m-d"); // 获取当前日期

    // 在此处添加对用户输入的验证和安全性措施

    // 连接到数据库
    $conn = new mysqli("localhost", "root", "", "pet_shop");
    if ($conn->connect_error) {
        die("数据库连接失败: " . $conn->connect_error);
    }

    // 检查账号是否已经存在
    $checkAccount = "SELECT * FROM users WHERE c_account = '$account'";
    $result = $conn->query($checkAccount);
    if ($result->num_rows > 0) {
        echo "注册失败：账号已经存在";
        $conn->close();
        exit();
    }

    // 插入用户信息到数据库表
    $sql = "INSERT INTO users (c_account, c_password, c_name, c_phone, c_email, c_address, c_join_date) VALUES ('$account', '$password', '$name', '$phone_number', '$email', '$address', '$join_date')";
    if ($conn->query($sql) === TRUE) {
        echo "注册成功";
    } else {
        echo "注册失败: " . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>用户注册</title>
</head>
<body>
    <h1>用户注册</h1>
php
Copy code
<form method="POST" action="">
    <label for="account">账号:</label>
    <input type="text" id="account" name="account" required><br>

    <label for="password">密码:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="name">姓名:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="phone_number">电话号码:</label>
    <input type="text" id="phone_number" name="phone_number" required><br>

    <label for="email">电子邮件:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="address">地址:</label>
    <input type="text" id="address" name="address" required><br>

    <button type="submit">注册</button>
</form>
</body>
</html>