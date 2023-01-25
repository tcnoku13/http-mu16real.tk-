<li><a href="javascript: void(0);" onClick="
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<head>
</head>
<body>
  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" class="style22" scope="col"><font color="#78507C"><b><font color="#0066FF">Dados do Seu Cadastro</font></b></font></td>
    </tr>
    <tr>
      <td align="center" class="style22" scope="col"><?php
$login = stripslashes($_POST['login']);
$name = stripslashes($_POST['name']);
$email = stripslashes($_POST['email']);
$idnumb = stripslashes($_POST['idnumb']);
$pw = stripslashes($_POST['pw']);
$cpw = stripslashes($_POST['cpw']);
$sques = stripslashes($_POST['squest']);
$sansw = stripslashes($_POST['sansw']);
$sql_email_check = mssql_query("SELECT mail_addr FROM MEMB_INFO WHERE mail_addr='$email'"); 
$sql_username_check = mssql_query("SELECT memb___id FROM MEMB_INFO WHERE memb___id='$login'"); 
$email_check = mssql_num_rows($sql_email_check); 
$username_check = mssql_num_rows($sql_username_check); 

if (($email_check > 0) || ($username_check > 0) || empty($login) || empty($name) || empty($email) || empty($idnumb) || empty($pw) || empty($cpw) || empty($sques) || empty($sansw)) 
{ 
    echo "<center><b>Aten&ccedil;&atilde;o:</b> <br> <br /></center>";
	
	if (empty($login) || empty($name) || empty($email) || empty($idnumb) || empty($pw) || empty($cpw) || empty($sques) || empty($sansw))
{ 
echo "<center>Por favor preencha todos os campos<br><br><br><a href='location='<script>javascript:history.back()'</script>'>Voltar</a></center>";
}

    elseif($email_check > 0){ 
        echo "<script>alert('$email esse e-mail ja esta sendo usando por outro membro.'); 
location='javascript:history.back()'</script>"; 
        $Error=1;
    } 
    elseif ($username_check > 0)
	{ 
        echo "<script>alert('$login esse login ja esta sendo usado por outro membro.'); 
location='javascript:history.back()'</script>"; 
         $Error=1;
    } 

elseif ($pw != $cpw) 
{
	echo "<script>alert('As Senhas devem ser iguais nos dois campos '); 
location='javascript:history.back()'</script>";  $Error=1;
}

}
else
{
$msquery3 = "INSERT INTO MEMB_INFO (memb___id,memb__pwd,memb_name,sno__numb,post_code,addr_info,addr_deta,tel__numb,mail_addr,phon_numb,fpas_ques,fpas_answ,job__code,appl_days,modi_days,out__days,true_days,mail_chek,bloc_code,ctl1_code,vip,creditos) VALUES ('$login','$pw','$name', '1','1234','11111','$idnumb','12343','$email','$email','$sques','$sansw','1','2003-11-23','2003-11-23','2003-11-23','2003-11-23','1','0','1','$tipovipreg','$diasvipreg')";
//$msquery4 = "INSERT INTO DT_SHOP_CREDITS2 (login,credits,access,unlimited,credits2) VALUES ('$login','0','0','0','0')";
$msresults= mssql_query($msquery3);
//$msresults= mssql_query($msquery4);
echo "<center>Conta criada com sucesso. <br> 
Obrigado por se cadastrar no <b>$nomemu</b><br>
<br>
 		  <font color=#78507C><b>Login:</b></font> <b>$login</b><br>
          <font color=#78507C><b>Nome:</b></font>  <b>$name </b><br>
          <font color=#78507C><b>E-mail:</b></font> <b>$email</b><br>
          <font color=#78507C><b>ID Numero:</b></font> <b>$idnumb</b><br>
          <font color=#78507C><b>Senha:</b></font> <b>$pw</b><br>
          <font color=#78507C><b>Pergunta secreta:</b></font> <b>$sques</b><br>
         <font color=#78507C><b> Resposta secreta:</b></font> <b>$sansw </b>
		 </center>";
}
?></td>
    </tr>
  </table>
<br />
</BODY>
</HTML>
