<html>
<head>
<style>
      .logo{
          
          background-repeat: no-repeat;
          margin: 2px 2px;
          height: 150px;
          width: 150px;
          position: absolute;
      }
      body{
        padding: 20px 40px;
        background: #ED6436;
        color: #444444;
      }
      fieldset{
        width: 300px;
        background: #f1f1f1;
        margin: 50px auto 0 auto;
      }

</style>

</head>
<body>
<form method="post" action="login.php" id="formlogin" name="formlogin" >
<fieldset id="fie">
<legend>LOGIN</legend><br />
<table>
<tr>
<td>NOME : </td>
<td><input type="text" name="user" id="user"  /></td>
</tr><tr>
<td>SENHA :</td>
<td><input type="password" name="pass" id="pass" /></td>
</tr>
<tr>
<td>FUNÇÃO :</td>
<td><input type="func" name="func" id="func" /></td>
</tr>
<tr>
<td><input type="submit" value="LOGAR"  /></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>
