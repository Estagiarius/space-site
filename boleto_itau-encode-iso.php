<?php

include "conexao.php";

SESSION_START();

header("Content-Type: text/html; charset=utf-8");
echo "<meta http-equiv='X-UA-Compatible' content='text/html; IE=edge; charset=utf-8'>" ;


	$cpf = $_SESSION['cpfDoacao'];
	$nome = $_SESSION['nomeDoacao'];
	$valor = $_SESSION['qtdDoacao'];
	$cep = $_SESSION['cepDoacao'];
	$numcasa = $_SESSION['numCasaDoacao'];
	$logradouro = $_SESSION['logradouroDoacao'];
	$bairro = $_SESSION['bairroDoacao'];
	$localidade = $_SESSION['localidadeDoacao'];
	$uf = $_SESSION['ufDoacao'];
	$userLogin = $_SESSION['userLogin'];
	$qtdDoacao = $_SESSION['qtdDoacao'];
	$dataGeracao = date('d/m/Y', time());
	$dataVencimento = date('d/m/Y', time() + (7 * 24 * 60 * 60));

	$valor = number_format($valor, 2, ',', '');



// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = 7;
$taxa_boleto = 2.95; 
$valor_cobrado =  $qtdDoacao; 
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto= number_format($valor_cobrado + $taxa_boleto, 2, ',', '');

$dadosboleto["nosso_numero"] = '12345678';  // Nosso numero - REGRA: Máximo de 8 caracteres!
$dadosboleto["numero_documento"] = '0123';	// Num do pedido ou nosso numero
$dadosboleto["data_vencimento"] = $dataVencimento; 
$dadosboleto["data_documento"] = $dataGeracao; // Data de emissão do Boleto
$dadosboleto["data_processamento"] = $dataGeracao; // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com vírgula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = $nome;
$dadosboleto["endereco1"] = $logradouro . ", ". $numcasa;
$dadosboleto["endereco2"] = $localidade . "CEP: " . $cep;

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = "Pagamento referente a doaÃ§Ã£o do jogo SPACE <br>Taxa bancÃ¡ria - R$ ".number_format($taxa_boleto, 2, ',', '');
$dadosboleto["demonstrativo2"] =  "PESADOWN Software - http://www.pesadown.com.br";
$dadosboleto["demonstrativo3"] = "";
$dadosboleto["instrucoes1"] = "- Sr. Caixa, cobrar multa de 2% apÃ³s o vencimento";
$dadosboleto["instrucoes2"] = "- Receber atÃ© 10 dias apÃ³s o vencimento";
$dadosboleto["instrucoes3"] = "- Em caso de dÃºvidas entre em contato conosco: pesadownsoft@hotmail.com";
$dadosboleto["instrucoes4"] = "";

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "";
$dadosboleto["valor_unitario"] = "";
$dadosboleto["aceite"] = "";		
$dadosboleto["especie"] = " ";
$dadosboleto["especie_doc"] = "";


// DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO  //
// DADOS DA SUA CONTA - ITAÚ
$dadosboleto["agencia"] = "1565"; // Num da agencia, sem digito
$dadosboleto["conta"] = "13877";	// Num da conta, sem digito
$dadosboleto["conta_dv"] = "4"; 	// Digito do Num da conta

// DADOS PERSONALIZADOS - ITAÚ
$dadosboleto["carteira"] = "175";  // Código da Carteira: pode ser 175, 174, 104, 109, 178, ou 157

// SEUS DADOS
$dadosboleto["identificacao"] = "PESADOWN Software";
$dadosboleto["cpf_cnpj"] = "123.456.789-32";
$dadosboleto["endereco"] = "Avenida Pereira Barreto, 400";
$dadosboleto["cidade_uf"] = "São Bernardo do Campo/SP";
$dadosboleto["cedente"] = "PESADOWN Software";


include "funcoes_itau.php"; 
include "layout_itau.php";
?>
