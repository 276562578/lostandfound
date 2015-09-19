
<?php

// 定义变量并设置为空值
$nameErr=$numberErr=$phoneErr=$qqErr=$emialErr=$number1Err="";
$judge=0;
//检测空值
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {$nameErr = "请输入姓名";}  
    else {$name=arrange($_POST["name"]);
      if(!preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$name)) { $nameErr = "请输入中文姓名";}
        else {$judge+=1;}}
  if (empty($_POST["number"])) {$numberErr = "请输入学号";}  
    else {$number=arrange($_POST["number"]);
      if(!preg_match("/^[0-9]{8}$/",$number)) { $numberErr = "学号格式错误";}  
        else {$judge+=2;}}
  if (empty($_POST["phone"])) {$phoneErr = "请输入手机号码";}
    else {$phone=arrange($_POST["phone"]);
      if(!preg_match("/^[0-9]{11}$/",$phone)) { $phoneErr = "手机号格式错误";}
        else {$judge+=4;}}
  if (empty($_POST["qq"])) {$_POST["qq"]="0";}
    else {$qq=arrange($_POST["qq"]);
      if(!preg_match("/^[0-9]{5,11}$/",$qq)) { $qqErr = "QQ号格式错误";$judge="0";}
        }
  if (empty($_POST["email"])) {$_POST["email"]="0";}
    else {$email=arrange($_POST["email"]);
      
       }
  if (empty($_POST["number1"])) {$number1Err = "请输入卡号";}  
    else {$number1=arrange($_POST["number1"]);
      if(!preg_match("/^[0-9]{11}$/",$number1)) { $number1Err = "卡号格式错误";}  
        else {$judge+=32;}}
}




function arrange($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<script type="text/javascript" >
function change(){
var option=document.getElementById("select");
var val=option.value;
switch (val)
{
	case "f1":
	  window.location.href='/find.php';
	  break;
	case "f2":
	  window.location.href='/05.php';
	  break;
	case "l1":
	  window.location.href='/lost.php';
	  break;
	case "l2":
	  window.location.href='/05.php';
	  break;
}}
</script>

