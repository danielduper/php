<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
    <h1>Valor total:</h1>
</header>

<main>

<?php 

$dataini = date("m-d-Y", strtotime("-7 days"));
$datafim = date("m-d-Y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dataini . '\'&@dataFinalCotacao=\''. $datafim .'\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);
$cotacao = $dados["value"][0]["cotacaoCompra"];

$valorr = $_GET["valor"];
$divisao = $valorr/$cotacao;
$valord = number_format($divisao, 2, ',', '.');

echo "<p>ce tem R\$$valorr<p>";
echo "<p>ce tem \$$valord</p>";
echo "<p>Cotação atual é de $cotacao.</p>";

?>

<a href="index.html">voltar</a>

</main>

</body>
</html>


