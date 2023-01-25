<li><a href="javascript: void(0);" onClick="
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<script language="JavaScript" type="text/JavaScript">
function checa(formulario) {
  if (formulario.login.value == "") {
    alert('ERRO ! Você deve digitar o um Login');
    formulario.login.focus();
    return false;
  }
  else if (formulario.name.value == "") {
    alert('ERRO ! Você deve digitar o seu Nome');
    formulario.name.focus();
    return false;
  }
    else if (formulario.pw.value == "") {
    alert('ERRO ! Você deve digitar sua senha');
    formulario.pw.focus();
    return false;
  }
  else if (formulario.cpw.value == "") {
    alert('ERRO ! Você deve confirmar sua senha');
    formulario.cpw.focus();
    return false;
  }
  else if (formulario.pw.value != formulario.cpw.value) {
    alert('ERRO ! A senha deve ser igual nos dois campos');
    formulario.pw.value="";
    formulario.cpw.value="";
    formulario.pw.focus();
    return false;
  }
  else if (formulario.email.value == "") {
    alert('ERRO ! Você deve digitar o seu E-Mail');
    formulario.email.focus();
    return false;
  }
  else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(formulario.email.value))) {
    alert('ERRO ! O e-mail digitado é inválido');
    formulario.email.focus();
    return false;
  }
  else if (formulario.idnumb.value == "") {
    alert('ERRO ! Você deve digitar sei Personal ID');
    formulario.idnumb.focus();
    return false;
  }
  else if (formulario.squest.value == "") {
    alert('ERRO ! Você deve digitar a sua pergunta secreta');
    formulario.squest.focus();
    return false;
  }
  else if (formulario.sansw.value == "") {
    alert('ERRO ! Você deve digitar uma resposta para a sua pergunta secreta');
    formulario.sansw.focus();
    return false;
  }
}
</script>
<form method="post" name="cadastro" action="?ir=cadastro2" onSubmit="return checa(this)">
<table width="250" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="2" align="center"><font color="#78507C"><b><font color="#0066FF">Criar Conta</font></b></font></td>
  </tr>
  <tr>
    <td align="right">Login:</td>
    <td align="left"><input name="login" type="text" id="login" maxlength="10" class="rginput"></td>
  </tr>
  <tr>
    <td align="right">Nome:</td>
    <td align="left"><input name="name" type="text" id="name" maxlength="20" class="rginput"></td>
  </tr>
  <tr>
    <td align="right">Senha:</td>
    <td align="left"><input name="pw" type="password" id="login3" maxlength="10" class="rginput"></td>
  </tr>
  <tr>
    <td align="right">Repetir Senha:</td>
    <td align="left"><input name="cpw" type="password" id="login4" maxlength="10" class="rginput"></td>
  </tr>
  <tr>
    <td align="right">E-Mail:</td>
    <td align="left"><input name="email" type="text" id="email" maxlength="50" class="rginput"></td>
  </tr>
  <tr>
    <td align="right">Personal ID:</td>
    <td align="left"><input name="idnumb" type="text" id="idnumb" maxlength="12" class="rginput" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"></td>
  </tr>
  <tr>
    <td align="right">Perguta Secreta:</td>
    <td align="left"><input name="squest" type="text" id="squest" maxlength="10" class="rginput"></td>
  </tr>
  <tr>
    <td align="right">Resposta Secreta:</td>
    <td align="left"><input name="sansw" type="text" id="sansw" maxlength="10" class="rginput"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="Submit" type="submit" value="Cadastrar" class="rgbotao"></td>
  </tr>
</table>
</form>
<br>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color:#FF9B9B; border:#FF0000 1px dashed;">
  <tr>
    <td align="center"><font color="#000000"><strong>Atenção<br>
      </strong>Ao se registrar no
      <?=$nomemu;?>
      você ganha automáticamente.5
      <?=$diasvipreg;?>
      dias de
      <? if ($tipovipreg == 0) {
		  echo "Free";
		  }
		  
		  if ($tipovipreg == 1) {
		  echo "Vip Normal";
		  }
		  
		  if ($tipovipreg == 2) {
		  echo "Super Vip";
		  }
		  ?>
      .</font></td>
  </tr>
</table>
<br>
</body>
</html>