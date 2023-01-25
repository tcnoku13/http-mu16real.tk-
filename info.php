<li><a href="javascript: void(0);" onClick="
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td width="50%" align="center" valign="top"><table width="240" border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td height="20" colspan="3" align="center" bgcolor="#202020"><font color="#78507C"><b><font color="#0066FF">Informações Gerais</font></b></font></td>
      </tr>
      <tr>
        <td width="50%" align="right" bgcolor="#151515"><strong>Nome:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$nomemu;?></td></tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Versão:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$versao;?></td></tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Experiência:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$exp;?></td></tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Drop:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$drop;?></td></tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Bless Bug:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515"><? if ($bugbless == 0) {
	echo "<font color=red>&nbsp;Desligado</font>";
	}
	if ($bugbless == 1) {
	echo "<font color=green>&nbsp;Ligado</font>";
	}
	?> </td>
      </tr>
      <tr>
        <td rowspan="3" align="right" bgcolor="#151515"><strong>Servidor 1:</strong></td>
        <td width="25%" align="right" bgcolor="#151515">Baú:</td>
        <td width="25%" align="left" bgcolor="#151515"><? if ($sv1["BAU"] == 0) {
	echo "&nbsp;Não";
	}
	if ($sv1["BAU"] == 1) {
	echo "&nbsp;Sim";
	}
	?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515">Trade:</td>
        <td align="left" bgcolor="#151515"><? if ($sv1["TRADE"] == 0) {
	echo "&nbsp;Não";
	}
	if ($sv1["TRADE"] == 1) {
	echo "&nbsp;Sim";
	}
	?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515">PVP:</td>
        <td align="left" bgcolor="#151515"><? if ($sv1["PVP"] == 0) {
	echo "&nbsp;Não";
	}
	if ($sv1["PVP"] == 1) {
	echo "&nbsp;Sim";
	}
	?></td>
      </tr>
      <? if ($exibesv2 == 0) {
	echo "";
	}
	if ($exibesv2 == 1) {
	?>
      <tr>
        <td rowspan="3" align="right" bgcolor="#151515"><strong>Servidor 2:</strong></td>
        <td align="right" bgcolor="#151515">Baú:</td>
        <td align="left" bgcolor="#151515"><? if ($sv2["BAU"] == 0) {
	echo "&nbsp;Não";
	}
	if ($sv2["BAU"] == 1) {
	echo "&nbsp;Sim";
	}
	?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515">Trade:</td>
        <td align="left" bgcolor="#151515"><? if ($sv2["TRADE"] == 0) {
	echo "&nbsp;Não";
	}
	if ($sv2["TRADE"] == 1) {
	echo "&nbsp;Sim";
	}
	?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515">PVP:</td>
        <td align="left" bgcolor="#151515"><? if ($sv2["PVP"] == 0) {
	echo "&nbsp;Não";
	}
	if ($sv2["PVP"] == 1) {
	echo "&nbsp;Sim";
	}
	?></td>
      </tr>
      <? } ?>
      <? if ($exibesv3 == 0) {
	echo "";
	}
	if ($exibesv3 == 1) {
	?>
      <tr>
        <td rowspan="3" align="right" bgcolor="#151515"><strong>Servidor 3:</strong></td>
        <td align="right" bgcolor="#151515">Baú:</td>
        <td align="left" bgcolor="#151515"><? if ($sv3["BAU"] == 0) {
	echo "&nbsp;Não";
	}
	if ($sv3["BAU"] == 1) {
	echo "&nbsp;Sim";
	}
	?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515">Trade:</td>
        <td align="left" bgcolor="#151515"><? if ($sv3["TRADE"] == 0) {
	echo "&nbsp;Não";
	}
	if ($sv3["TRADE"] == 1) {
	echo "&nbsp;Sim";
	}
	?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515">PVP:</td>
        <td align="left" bgcolor="#151515"><? if ($sv3["PVP"] == 0) {
	echo "&nbsp;Não";
	}
	if ($sv3["PVP"] == 1) {
	echo "&nbsp;Sim";
	}
	?></td>
      </tr>
      <? } ?>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Jewel of Soul:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$soul;?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Jewel of Life:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$life;?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Jewel of Bless:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$bless;?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Itens +10:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$item10;?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Itens +11:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$item11;?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Itens +12:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$item12;?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Itens +13:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;<?=$item13;?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>% de Asas Lv 1:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;
              <?=$wing1;?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>% de Asas Lv 2:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;
              <?=$wing2;?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Pontos por Level:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;MG e DL
          <?=$pontomgdl;?>
          pts</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Pontos por Level:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Outras Classes
          <?=$pontosmbkelf;?>
          pts</td>
      </tr>
      <tr>
        <td rowspan="15" align="right" bgcolor="#151515"><strong>Mapas:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Lorencia</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Noria</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Devias</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Dungeon 1 a 3</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Atlans 1 a 3</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Lost Tower 1 a 7</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Tarkan 1 e 2</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Place of Exile</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Aida</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Cry Wolf</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Loren Cayon</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Icarus 1 e 2</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Stadium</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Kalima 1 a 7</td>
      </tr>
      
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Valley of Loren</td>
      </tr>
      
      <tr>
        <td rowspan="5" align="right" bgcolor="#151515"><strong>Eventos:</strong></td>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Blood Castle</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Castle Siege</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Chaos Castle</td>
      </tr>
      
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;Devil Square</td>
      </tr>
      <tr>
        <td colspan="2" align="left" bgcolor="#151515">&nbsp;White Wizards</td>
      </tr>
    </table></td>
    <td width="50%" align="center" valign="top"><table width="230" border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td height="20" colspan="2" align="center" bgcolor="#202020"><font color="#78507C"><b><font color="#0066FF">Estatíticas do Server</font></b></font></td>
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
        <td width="50%" align="right" bgcolor="#151515"><strong>Contas:</strong></td>
        <td width="50%" align="left" bgcolor="#151515">&nbsp;
              <? $sql = mssql_query("SELECT count(*) FROM MEMB_INFO");
echo mssql_result($sql, 0, 0); ?>        </td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Chars:</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;
              <? $sql = mssql_query("SELECT count(*) FROM Character");
echo mssql_result($sql, 0, 0); ?>        </td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Soul Masters:</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;
              <? $sql = mssql_query("SELECT count(*) FROM Character WHERE Class = 1");
echo mssql_result($sql, 0, 0); ?>        </td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Blade Knights:</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;
              <? $sql = mssql_query("SELECT count(*) FROM Character WHERE Class = 17");
echo mssql_result($sql, 0, 0); ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Muse Elfs:</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;
              <? $sql = mssql_query("SELECT count(*) FROM Character WHERE Class = 33");
echo mssql_result($sql, 0, 0); ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Magic Gladiators:</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;
              <? $sql = mssql_query("SELECT count(*) FROM Character WHERE Class = 48");
echo mssql_result($sql, 0, 0); ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Dark Lords:</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;
              <? $sql = mssql_query("SELECT count(*) FROM Character WHERE Class = 64");
echo mssql_result($sql, 0, 0); ?></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Players Online:</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;
              <?
$sql = mssql_query("SELECT count(*) FROM MEMB_STAT WHERE ConnectStat = 1");
echo "<font color=green>";
echo mssql_result($sql, 0, 0); ?>        </td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>Record Online:</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;<?=recordon();?></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="20" colspan="2" align="center" bgcolor="#202020"><font color="#78507C"><b><font color="#0066FF">Comandos In Game</font></b></font></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>/post</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;Mensagem Global</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>/bau</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;Alternar Baus</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>/for</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;Add Pontos</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>/agi</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;Add Pontos</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>/vit</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;Add Pontos</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#151515"><strong>/ene</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;Add Pontos</td>
      </tr>
       <tr>
        <td align="right" bgcolor="#151515"><strong>/com</strong></td>
        <td align="left" bgcolor="#151515">&nbsp;Add Pontos</td>
      </tr>
    </table>
    <br /></td>
  </tr>
</table>
<br />
</body>
</html>
