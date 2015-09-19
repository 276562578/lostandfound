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



$dbconn = mysql_connect("localhost","minecraft","passwd");
mysql_select_db("lostandfound", $dbconn);
mysql_query("set name 'utf8'");
$result=mysql_query("select name,number1,number,phone,event from number1 ");

$result1=mysql_query("select name,number,phone,qq,email,event from picker");

echo "<table align=center>";
echo "<tr><td colspan=2><br><br><h4>丢失者信息：</h4></td>";
while($row=mysql_fetch_array($result)) {	
	
	echo "<tr><td>姓名：</td><td>";
	echo $row['name'];
	echo "</td></tr><tr><td>卡号：</td><td>";       
	echo $row['number1'];
	echo "</td></tr>"; 
	echo "<br><br><br>";}
	echo "<tr><td colspan=2><br><br><h4>拾取者信息：</h4></td>";
while($row1=mysql_fetch_array($result1)) {
	echo"<tr><td colspan=2>";
	echo "<tr><td>姓名：</td><td>";
	echo $row1['name'];
	echo "</td></tr><tr><td>手机号：</td><td>"; 
	echo $row1['phone'];    
	echo "</td></tr><tr><td>QQ：</td><td>";
	echo $row1['qq'];
	echo "</td></tr><tr><td>Email：</td><td>";
	echo $row1['email'];
	echo "</td></tr>";}
	echo "</table>";


?>
</body>
</html>
