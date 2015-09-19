<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />   
    <meta name="apple-mobile-web-app-capable" content="yes" />  
    <meta name="format-detection" content="telephone=no" /> 
    <style>
      .error {color: #FF0000;}
    </style>
</head>
<body>
<BODY bgcolor=#4a93e9>
<?php
include 'include.php';
if (in_array($judge, array(7,15,31))) {
$dbconn = mysql_connect("localhost","minecraft","passwd");
mysql_select_db("php", $dbconn);
mysql_query("set names 'utf8'");
$result=mysql_query("select name,number,phone,qq,email from student_card where number=$_POST[number]");
if (mysql_num_rows($result)==0){
	mysql_query("INSERT INTO student_card (name,number,phone,qq,email) VALUES ('$_POST[name]','$_POST[number]','$_POST[phone]','$_POST[qq]','$_POST[email]')");
	$judge=1;
}
else {
	$judge=0;
	}
	header("location:/find-result.php?check=$judge");
}
?>

<center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin:10% 0 0 1;">
        <table summary="" align="center">
            <tr>
                <td>大小：</td>
                <td>
                	<label><input name="size" type="radio" value="">长款皮夹</label>
                	<label><input name="size" type="radio" value="">短款钱包</label>
                	<label><input name="size" type="radio" value="">小零钱包</label>
                	<label><input name="size" type="radio" value="">不知道如何描述</label>
                <td></td>
            </tr>
            <tr>
                <td>颜色：</td>
                <td>
                	<label><input name="color" type="checkbox" value="">黑</label>
                	<label><input name="color" type="checkbox" value="">白</label>
                	<label><input name="color" type="checkbox" value="">棕褐</label>
                	<label><input name="color" type="checkbox" value="">粉</label>
                	<label><input name="color" type="checkbox" value="">红</label>
                	<label><input name="color" type="checkbox" value="">绿</label>
                	<label><input name="color" type="checkbox" value="">黄</label>
                	<label><input name="color" type="checkbox" value="">蓝</label>
                	<label><input name="color" type="checkbox" value="">其他</label>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>内容物：</td>
                <td>
                	<label><input name="color" type="checkbox" value="">现金</label>
                	<label><input name="color" type="checkbox" value="">身份证</label>
                	<label><input name="color" type="checkbox" value="">一卡通</label>
                	<label><input name="color" type="checkbox" value="">学生证</label>
                	<label><input name="color" type="checkbox" value="">银行卡</label>
                	<label><input name="color" type="checkbox" value="">照片</label>
                	<label><input name="color" type="checkbox" value="">钥匙</label>
                	<label><input name="color" type="checkbox" value="">其他</label>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>拾取时间：</td>
                <td>
                <select name="time">
                <option value="1">一天之内</option>
                <option value="3">三天之内</option>
                <option value="7">一周之内</option>
                <option value="30">一月之内</option>
                <option value="365">一月以上</option>
                </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>拾取地点：</td>
                <td>
                <select name="location">
                <option value="1">中心校区</option>
                <option value="2">新民校区</option>
                <option value="3">南湖校区</option>
                <option value="4">南岭校区</option>
                <option value="5">和平校区</option>
                <option value="6">朝阳校区</option>
                </select>
                </td>
                <td></td>
            </tr>
            <?php include 'select-find.php'; ?>   
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="name" id="name" value="<?php echo $_POST["name"];?>"></td>
                <td><span class="error">* <?php echo $nameErr;?></span></td>
            </tr>
            <tr>
                <td>学号：</td>
                <td><input type="text" name="number" id="number" value="<?php echo $_POST["number"];?>"></td>
                <td><span class="error">* <?php echo $numberErr;?></span></td>
            </tr>
            <tr>
                <td>手机：</td>
                <td><input type="text" name="phone" id="phone" value="<?php echo $_POST["phone"];?>"></td>
                <td><span class="error">* <?php echo $phoneErr;?></span></td>
            </tr>
            <tr>
                <td>QQ：</td>
                <td><input type="text" name="qq" id="qq" value="<?php echo $_POST["qq"];?>"></td>
                <td><span class="error"><?php echo $qqErr;?></span></td>
            </tr>
            <tr>
                <td>Email：</td>
                <td><input type="text" name="email" id="email" value="<?php echo $_POST["email"];?>"></td>
                <td><span class="error"><?php echo $emailErr;?></span></td>
            </tr>
            <tr align=center>
                <td colspan="2"><input type="submit" value="提 交" /></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
