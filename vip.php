<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br />
<div align="center"><font color="#78507C"><b><font color="#0066FF">Conta Vip</font></b></font></div>
<br />
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td align="center">Sendo um colaborador você estará             ajudando a manter o servidor on-line e poderá desfrutar de várias             vantagens oferecidas.</td>
  </tr>
  <tr>
    <td><table width="400" border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td width="40%" height="20" align="left" bgcolor="#202020"><strong><font color="#0066FF">Vantagens</font></strong></td>
        <td width="20%" align="center" bgcolor="#202020"><strong><font color="#0066FF">Free</font></strong></td>
        <td width="20%" align="center" bgcolor="#202020"><strong><font color="#0066FF">Vip</font></strong></td>
        <td width="20%" align="center" bgcolor="#202020"><strong><font color="#0066FF">Super</font></strong></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#151515">Level do Reset</td>
        <td align="center" bgcolor="#151515"><?=$levelreset["FREE"];?></td>
        <td align="center" bgcolor="#151515"><?=$levelreset["VIP"];?></td>
        <td align="center" bgcolor="#151515"><?=$levelreset["SUPER"];?></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#151515">Pontos por Reset</td>
        <td align="center" bgcolor="#151515"><?=$pontosreset["FREE"];?></td>
        <td align="center" bgcolor="#151515"><?=$pontosreset["VIP"];?></td>
        <td align="center" bgcolor="#151515"><?=$pontosreset["SUPER"];?></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#151515">Destribuidor de Pontos</td>
        <td align="center" bgcolor="#151515"><?=$addpontos["FREE"];?></td>
        <td align="center" bgcolor="#151515"><?=$addpontos["VIP"];?></td>
        <td align="center" bgcolor="#151515"><?=$addpontos["SUPER"];?></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#151515">Desbugar Pontos</td>
        <td align="center" bgcolor="#151515"><?=$desbugar["FREE"];?></td>
        <td align="center" bgcolor="#151515"><?=$desbugar["VIP"];?></td>
        <td align="center" bgcolor="#151515"><?=$desbugar["SUPER"];?></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#151515">Trocar Dados</td>
        <td align="center" bgcolor="#151515"><?=$alteradados["FREE"];?></td>
        <td align="center" bgcolor="#151515"><?=$alteradados["VIP"];?></td>
        <td align="center" bgcolor="#151515"><?=$alteradados["SUPER"];?></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#151515">Mudar Classe</td>
        <td align="center" bgcolor="#151515"><?=$classe["FREE"];?></td>
        <td align="center" bgcolor="#151515"><?=$classe["VIP"];?></td>
        <td align="center" bgcolor="#151515"><?=$classe["SUPER"];?></td>
      </tr>
      <tr>
        <td align="left" bgcolor="#151515">Valor</td>
        <td align="center" bgcolor="#151515"><?=$preco["FREE"];?></td>
        <td align="center" bgcolor="#151515"><?=$preco["VIP"];?></td>
        <td align="center" bgcolor="#151515"><?=$preco["SUPER"];?></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Para Comprar itens ou planos vip, basta entrar no shopping e comprar, logo após fazer isso, você deverá efetuar o depósito bancário no valor da sua compra. Segue abaixo os dados para o depósito.</td>
  </tr>
  <tr>
    <td><table width="400" border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td height="20" colspan="2" align="center" bgcolor="#202020"><strong><font color="#0066FF">Dados p/ Depósitos</font></strong></td>
        </tr>
      <tr>
        <td width="50%" align="left" bgcolor="#151515">Banco:</td>
        <td width="50%" align="center" bgcolor="#151515"><?=$dep["BANCO"];?> / ou Lorérica</td>
        </tr>
      <tr>
        <td align="left" bgcolor="#151515">Agência:</td>
        <td align="center" bgcolor="#151515"><?=$dep["AGENC"];?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#151515">Conta:</td>
        <td align="center" bgcolor="#151515"><?=$dep["CONTA"];?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#151515">Op:</td>
        <td align="center" bgcolor="#151515"><?=$dep["DIGIT"];?></td>
        </tr>
      <tr>
        <td align="left" bgcolor="#151515">Favorecido:</td>
        <td align="center" bgcolor="#151515"><?=$dep["FAVOR"];?></td>
        </tr>

    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Após efetuar um depósito, você receberá um comprovante. Com o mesmo em mãos você deve confirmar a sua compra no painel de controle.</td>
  </tr>
</table>
<br />
</body>
</html>
