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
if($_GET['check']==1) {
	echo "<br><br><br><h2 align=center>数据提交成功</h2>";
}
else {
	echo "<br><br><br><h2 align=center>数据提交失败，已存在该记录</h2>";
}
?>
</body>
</html>
