<?php
 
require_once "Correios.php";

$correios = new Correios;
$consulta = '03950000';
$correios->retornaInformacoesCep($consulta);

//echo str_pad($consulta, 8, 0, STR_PAD_LEFT);
//echo $consulta;
header('Content-type: text/html; charset=ISO-8859-1');
echo "<html lang='pt-br'>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />";
echo $correios->informacoesCorreios->getLogradouro();
echo "<br />";
echo $correios->informacoesCorreios->getBairro();
echo "<br />";
echo $correios->informacoesCorreios->getLocalidade();
echo "<br />";
echo $correios->informacoesCorreios->getUf();
echo "<br />";
//echo $correios->informacoesCorreios->getCep();
echo "<br />";
 
/*
  A SAÍDA SERÁ:
 
  Travessa Rodolfo Silva
  Jardim Atlântico
  Florianópolis
  SC
  88095-040
*/
 
?>