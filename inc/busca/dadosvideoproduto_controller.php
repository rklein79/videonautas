<?php
extract($_POST);

include('busca.php');
$busca = new busca();//informar o id do produto caso tenha
require('xml/xmlclass.php');
$xmlClass = new XMLClass();
$param = array('keyword'=>$buscaval);
$produto = $xmlClass->ReadXML($busca->findProductList($param));
echo $busca->monta_dadosvideoproduto($produto);
?>
