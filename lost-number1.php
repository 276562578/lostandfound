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
if (in_array($judge, array(39))){
	header("location:/lost-result.php?number1=$_POST[number1]&name=$_POST[name]&number=$_POST[number]&phone=$_POST[phone]");
}

?>

<center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin:8% 0 0 1;">
        <table summary="" align="center">
            <tr>
              <td>失物类型：</td>
              <td>
		            <select id="select" onchange="change();"  class="selecet">
			            <option value="0">--请选择类型--</option>
			            <option value="l1" selected="selected">校园卡</option>
			            <option value="l2">身份证</option>
			            <option value="l3">钱包</option>
			            <option value="l4">学生证</option>
			            <option value="l5">手机</option>
			            <option value="l6">手表</option>
			            <option value="l7">书包</option>
			            <option value="l8">其他</option>
				       </select>
              </td>
            </tr> 
            <tr>
	            <td colspan="2"><br><br><h4>失物特征：</h4></td>
            </tr>
            <tr>
	            <td>姓名：</td>
	            <td><input type="text" name="name" id="name" value="<?php echo $_POST["name"];?>"></td>
	            <td><span class="error">* <?php echo $nameErr;?></span></td>
            </tr>
            <tr>
	            <td>卡号：</td>
	            <td><input type="text" name="number1" id="number1" value="<?php echo $_POST["number1"];?>"></td>
	            <td><span class="error">* <?php echo $number1Err;?></span></td>
            </tr>
            <tr>
	            <td colspan="2"><br><br><h4>请留下您的联系方式：</h4></td>
            </tr>             
            <tr>
                <td>学号:</td>
                <td><input type="text" name="number" id="number" value="<?php echo $_POST["number"];?>"></td>
                <td><span class="error">* <?php echo $numberErr;?></span></td>
            </tr>
            <tr>
                <td>手机：</td>
                <td><input type="text" name="phone" id="phone" value="<?php echo $_POST["phone"];?>"></td>
                <td><span class="error">* <?php echo $phoneErr;?></span></td>
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
