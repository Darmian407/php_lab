<!DOCTYPE html>
<html>
<head>
<title>Student Registration form</title>
</head>

<body>
	<form method="post">
		<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td colspan="2"><?php echo @$error; ?></td>
	</tr>	
  <tr>
    <td width="230">Nickname </td>
    <td width="329"><input type="text" name="nick"/></td>
  </tr>
  
  <tr>
    <td>Email </td>
    <td><input type="text" name="email"/></td>
  </tr>
  
  <tr>
    <td>Contraseña </td>
    <td><input type="password" name="contraseña"/></td>
  </tr>

  <tr>
    <td>Nombre </td>
    <td><input type="password" name="nombre"/></td>
  </tr>

  <tr>
    <td>Apellido </td>
    <td><input type="password" name="apellido"/></td>
  </tr>

  <tr>
    <td>Foto de perfil (Opcional) </td>
    <td><input type="text" name="imagen"/></td>
  </tr>

  <tr>
    <td>Fecha de nacimiento </td>
    <td><input type="text" name="imagen"/></td>
  </tr>
  
  <tr>
    <td>Ingresar como </td>
    <td>
	<select name="tipo">
		<option value="">¿Cliente o Autor?</option>
		<option>Cliente</option>
		<option>Autor</option>
	</select>
	</td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="register" value="Register Me"/></td>
  </tr>
</table>

	</form>
</body>
</html>