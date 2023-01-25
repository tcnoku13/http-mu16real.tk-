<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<? 
$QueryListUsersOn = mssql_query("SELECT Memb___Id FROM Memb_Stat WHERE ConnectStat>0 ORDER By Memb___Id ASC");
?>
</head>

<body>
<br />
<center><strong><font color="#0066FF">Contas Online</font></strong></center>
<table width="90%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center" bgcolor="#202020"><strong><font color="#0066FF">#</font></strong></td>
    <td align="center" bgcolor="#202020"><strong><font color="#0066FF">Nome</font></strong></td>
    <td align="center" bgcolor="#202020"><strong><font color="#0066FF">Level</font></strong></td>
    <td align="center" bgcolor="#202020"><strong><font color="#0066FF">Resets</font></strong></td>
    <td align="center" bgcolor="#202020"><strong><font color="#0066FF">Sala</font></strong></td>
  </tr>
    <? 
  for($r=0;$r<mssql_num_rows($QueryListUsersOn);$r++) {
  $rank=$r+1;
  $rListOn = mssql_fetch_row($QueryListUsersOn);
	$qGameIdc = mssql_query("SELECT GameIdc from AccountCharacter WHERE Id='".$rListOn[0]."'");
	$rGameIdc = mssql_fetch_row($qGameIdc);
	$qCharOn = mssql_query("SELECT Name,Reset,cLevel FROM Character WHERE Name='".$rGameIdc[0]."'");
	$rCharOn = mssql_fetch_row($qCharOn);
	$qPegaSala = mssql_query("SELECT ServerName FROM Memb_STAT WHERE Memb___Id='".$rListOn[0]."'");
	$rMostraSala = mssql_fetch_row($qPegaSala);
  ?>
  <tr class="bgtd">
    <td align="center"><?=$rank;?></td>
    <td align="center"><?=$rGameIdc[0];?></td>
    <td align="center"><?=$rCharOn[2];?> </td>
    <td align="center"><?=$rCharOn[1];?></td>
    <td align="center"><?=$rMostraSala[0];?></td>
  </tr>
  <?
  }
  ?>
</table>
</body>
</html>
