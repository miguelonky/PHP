<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
error_reporting(0);
$id=$_GET['id'];
$respuestas=$_GET['respuestas'];
?>


<h2>Bienvenido </h2>
<form action="add.php" method="post" target="" style="padding:5px;">
<input name="respuestas" type="hidden" value="<?php echo $respuestas;?>" />
<input name="identificador" type="hidden" value="<?php echo $id;?>" />
Autor:<br />
<input name="autor" type="text" size="32"/><br />
<br />
Titulo:<br />
<input name="titulo" type="text" size="32"/>
<br />
<br />
Mensaje:<br /><textarea name="mensaje" cols="40"  rows="7"/></textarea>
<input name="" value="Iniciar" type="submit" />
</form>
</div>
