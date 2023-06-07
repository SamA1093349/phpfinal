<?php ob_start();
      session_start();

$customerID="test";
$customerPWD="1111";

$babysitID="test";
$babysitPWD="2222";

$adminID="test";
$adminPWD="3333";

$id = $_POST["id"];
$pwd = $_POST["pwd"];

if(($customerID==$id) && ($customerPWD==$pwd)){   
    $_SESSION["customerLogin"]="Yes";
    $_SESSION["babysitLogin"]="No";
    $_SESSION["adminLogin"]="No";
    header("Location:customer.php");
}elseif(($babysitID==$id) && ($babysitPWD==$pwd)){
    $_SESSION["babysitLogin"]="Yes";
    $_SESSION["customerLogin"]="No";
    $_SESSION["adminLogin"]="No";
    header("Location:babysit.php");
}elseif(($adminID==$id) && ($adminPWD==$pwd)){
    $_SESSION["adminLogin"]="Yes";
    $_SESSION["customerLogin"]="Yes";
    $_SESSION["babysitLogin"]="Yes";
    header("Location:admin.php");
}elseif($customerID!=$id||$customerPWD!=$pwd||$babysitID!=$id||$babysitPWD!=$pwd||$adminID!=$id||$adminPWD!=$pwd){
    $_SESSION["Login"]="No";
    $_SESSION['msg'] = '登入失敗，帳號或密碼有誤!!';
    header("Location:login.php");   
}else{
    $_SESSION["Login"]="No";
    $_SESSION['msg'] = '欄位為空，請輸入帳號及密碼!';
    header("Location:login.php");   

}
?>
