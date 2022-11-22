<?php
require_once'class/config.php';

if(isset($_POST['update']))
{
$rid=intval($_GET['id']); 
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];
$categoria=$_POST['categoria'];
 
// Store  Procedure for Updation
$sql=mysqli_query($con,"call sp_updaterow('$titulo', '$texto', '$categoria', '$rid')");
// Mesage after updation
echo "<script>alert('Se actualizó el registro correctamente!');</script>";
// Code for redirection
echo "<script>window.location.href='../Parcial3/Parcial3.php'</script>"; 
}
?>

<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="utf-8">
    <title>Actualizar Registro</title>
</head>
<body>
<?php 
$id=intval($_GET['id']);
$sql =mysqli_query($con, "call sp_readrow('$id')");
while ($result=mysqli_fetch_array($sql)) {                 
?>
<form name="ActualizarRegistro" method="post">
<div><b>Titulo</b>
<input type="text" name="titulo" value="<?php echo htmlentities($resultado['titulo']);?>" required>
</div>
<div><b>Texto</b>
<input type="text" name="texto" value="<?php echo htmlentities($resultado['texto']);?>" required>
</div>
<div><b>Categoria</b>
<input type="text" name="categoria" value="<?php echo htmlentities($resultado['categoria']);?>" required>
</div>
<?php } ?>
<input type="submit" name="update" value="Actualizar">
</div>
</div> 
     </form>
	</div>
</div>
</body>
</html>