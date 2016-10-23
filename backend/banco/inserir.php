<!DOCTYPE html>
<?php
header("Content-type: text/html;charset=utf-8");
include_once 'conexao.php';

$nomeEmpresa = utf8_decode($_POST['nomeEmpresa']) ;
$porte = $_POST['porte'];
$telefoneEmpresa = $POST['telefoneEmpresa'];

$sql = "insert into empresa (nomeEmpresa, porte, telefoneEmpresa) values('$nomeEmpresa', '$porte', $telefoneEmpresa)";
$query = mysql_query($sql);

if($query):
    echo "<script> alert('Registro Salvo com Sucesso!'); </script>";

else:
    echo "<script> alert('Erro ao Registrar!'); </script>";
endif;
?>
<script src="../js/jquery-1.8.3.min.js"></script>
<script>
    document.location='../index.php';
</script>