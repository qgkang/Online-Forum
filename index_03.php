<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>无标题文档</title>
  <style type="text/css">
  <!--
  body,td,th {
      font-size: 12px;
  }
  -->
  </style>
</head>
<!--欢迎用户成功登陆页面-->
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="987" height="44" align="center">
    <tr>
      <td width="979" valign="middle" background="images/03.gif"><p>
          <?php 
		  if(isset($_SESSION['user'])){
		  echo $_SESSION['user'];
		  }?>
      &nbsp;</p></td>
    </tr>
  </table>
</form>
</body>
</html>
