<li><a href="javascript: void(0);" onClick="
<? include "config/config.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function click() {
if (event.button==2||event.button==3) {
oncontextmenu='return false';
}
}
document.onmousedown=click
document.oncontextmenu = new Function("return false;")
</script>
<style type="text/css">
body {
	background-color: #0F0F0F;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	color: #FFFFFF;
	FONT-FAMILY: Arial, Verdana, Helvetica, sans-serif;
	FONT-SIZE: 11px;
	TEXT-DECORATION: none;
}
</style>
</head>

<body>
<center>
  <table width="230" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td height="20" colspan="2" align="center" bgcolor="#202020"><font color="#78507C"><b><font color="#0066FF">Servidores</font></b></font></td>
  </tr>
  <? if ($exibesv2 == 0) {
	echo "";
	}
	if ($exibesv2 == 1) {
	?>
  <? } ?>
  <? if ($exibesv3 == 0) {
	echo "";
	}
	if ($exibesv3 == 1) {
	?>
  <? } ?>
  <tr>
    <td width="50%" align="right" bgcolor="#151515"><strong>Server 1:</strong></td>
    <td width="50%" align="left" bgcolor="#151515">&nbsp;<font color="#78507C"><i>
      <? $fp = @fsockopen("$ipsql", "$portags1", $errno, $errstr, 1); if($fp >= 1){  echo 'Online';} else{ echo 'Offline'; } ?>
    </i></font></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#151515"><strong>Server 2:</strong></td>
    <td align="left" bgcolor="#151515">&nbsp;<font color="#78507C"><i>
      <? $fp = @fsockopen("$ipsql", "$portags2", $errno, $errstr, 1); if($fp >= 1){  echo 'Online';} else{ echo 'Offline'; } ?>
    </i></font></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#151515"><strong>Server 3:</strong></td>
    <td align="left" bgcolor="#151515">&nbsp;<font color="#78507C"><i>
      <? $fp = @fsockopen("$ipsql", "$portags3", $errno, $errstr, 1); if($fp >= 1){  echo 'Online';} else{ echo 'Offline'; } ?>
    </i></font></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#151515"><strong>Server CS:</strong></td>
    <td align="left" bgcolor="#151515">&nbsp;<font color="#78507C"><i>
      <? $fp = @fsockopen("$ipsql", "$portagscs", $errno, $errstr, 1); if($fp >= 1){  echo 'Online';} else{ echo 'Offline'; } ?>
    </i></font></td>
  </tr>
  <? if ($exibesv2 == 0) {
	echo "";
	}
	if ($exibesv2 == 1) {
	?>
  <? } ?>
  <? if ($exibesv3 == 0) {
	echo "";
	}
	if ($exibesv3 == 1) {
	?>
  <? } ?>
</table>
</center>
</body>
</html>
