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

if($_POST[passwd]==hanxiaorong1949) {header("location:/watcherman-passwd.php");}


?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin:8% 0 0 1;">
        <table summary="" align="center"> 
	         <tr>
	            <td>password：</td>
	            <td><input type="password" name="passwd" id="passwd" value=""></td>
	     
            </tr>
            <tr align=center>
               <td colspan="2"><input type="submit" value="提 交" /></td>
            </tr>
        </table>
</form>