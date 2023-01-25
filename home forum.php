<li><a href="javascript: void(0);" onClick="
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$titulo;?></title>
</head>

<body>
<table width="90%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><?
	if(DISLPAY_HOME_NOTICES == true) {
		echo "<font color=#0066FF><b>&Uacute;ltimas not&iacute;cias";
		require_once ('config/_settings.mysql.php'); 
		$ins = new mysql();
		$ins->last_notices_ipb(); 
	}
	?></b></font></td>
  </tr>
  <tr>
    <td align="center"><br /></td>
  </tr>
  <tr>
    
  <tr>

  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    
  </tr>
  <tr>
   
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>
