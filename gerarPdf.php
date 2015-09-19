<?php
 
/*
 *******************************************************************************
 *     JBWEBMASTER - Gerar um documento em PDF usando a biblioteca FPDF        *
 *                AUTOR: JOAO BATISTA DANTAS BEZERRA JUNIOR                    *
 *                E-MAIL: jbtrab@gmail.com                                     *
 *                        DATA: 28/09/2010                                     *
 * *****************************************************************************
 */
 
 
require 'PDF/lib/fpdf.php';
define("FPDF_FONTPATH","../teste/PDF/font/");
//include_once 'relatorio.php';

/*
 * CONFIGURANDO A PAGINA
 */
 
//RECEBENDO VALORES DO FORMULARIO:
//numero do processo
//exemplo do numero do processo 08664-001098/2010-09

$nome = trim($_POST["nome"]);
$sobrenome = trim($_POST["sobrenome"]);
$email = trim($_POST["email"]);
$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);

/*
 * construtor da classe, que permite que seja definido o formato da pagina
 * P=Retrato, mm =tipo de medida utilizada no casso milimetros,
 * tipo de folha = A4
 */
$pdf = new FPDF("P", "mm", "A4");
//Define as margens esquerda, superior e direita.
$pdf->SetMargins(30, 20, 30);
//define a fonte a ser usada, estilo e tamanho
$pdf->SetFont('arial', '', 12);
//define o titulo
$pdf->SetTitle("Gerar PDF com FPDF");
//assunto
$pdf->SetSubject("Gerar PDF com FPDF");
// posicao vertical no caso -1.. e o limite da margem
$pdf->SetY("-1");
 
//espacamento
$pdf->Ln(30);
//define a fonte a ser usada, estilo e tamanho
//Nesse caso foi dado o tamanho 14 ao ti­tulo do documento
$pdf->SetFont('arial', '', 14);
//variavel que recebe o texto
$titulo = "Gerar um documento em PDF usando a biblioteca FPDF.";
//imprimi o texto em uma celula
$pdf->Cell(0, 10, $titulo, 0, 0, 'C');
//define a fonte a ser usada, estilo e tamanho
//Nesse caso foi dado o tamanho 12 para o texto do documento
$pdf->SetFont('arial', '', 12);
 
//texto principal do documento
// "x .= x" usado para concatenar e tem a mesma funcao que x = x.x

$texto .= "            $nome a nota fiscal nº $numNotaFiscal da empresa $empresa, e os ";
$texto .= "termos de recebimento provisório e definitivo, passando a compor as folhas ";
$texto .= "de nº $folhas.";
$texto .= "";
 
//margens do texto principal
//medidas das margens
$pdf->SetMargins(30, 20, 30);
//posiciona verticalmente 41mm
$pdf->SetY("41");
//posiciona horizontalmente 10mm
$pdf->SetX("10");
//espacamento
$pdf->Ln(70);
/*
 * imprimir um texto com quebras de linhas
 * a largura sendo 0, serao extendidas ate a margem direita da pagina.
 * a altura foi definida como 7 - dando um expacamento entre as linas,
 * vai depender de quanto vai precisar de espaco entre elas.
 * Para resolver o problema de acentuacao e/ou caracteres que serao
 * usados no pdf e aconselhavel usar utf8_decode() na saida do texto.
 */
$pdf->MultiCell(0, 7, utf8_decode($texto));
//espacamento
$pdf->Ln(5);
//data do documento
$textoData = "Em {$dataDoc}.";
/*
 * celular de largura 94, altura 10, texto ja¡ com utf8_decode(), bordas 0,
 * posicionar a direita, texto alinha ao centro
 */
$pdf->Cell(94, 10, $textoData, 0, 0, 'C');
//espacamento
$pdf->Ln(15);
//data do documento
$rodape = "$responsavelDoc\n";
$rodape .= "$tipoResponsavelDoc\n";
$rodape .= "Mat. " . $matriculaResponsavel;
//rodape
//posiciona verticalmente 190mm
$pdf->SetY("190");
//posiciona horizontalmente 60mm
$pdf->SetX("60");
/*
 * imprimir um texto com quebras de linhas
 * a largura de 90.
 * a altura foi definida como 7 - dando um expacamento entre as linas,
 * borda 0 - sem bordas, no caso de nao informar o padrao e 0 (zero)
 * vai depender de quanto vai precisar de espaco entre elas.
 * Para resolver o problema de acentuacao e/ou caracteres que serao
 * usados no pdf e aconselhavel usar utf8_decode() na saida do texto.
 */
$pdf->MultiCell(90, 7, utf8_decode($rodape), 0, "C");
 
/*
 * IMPRIMIR A SAIDA DO ARQUIVO
 * nome do arquivo
 * I: envia o arquivo diretamente para o browser,
 * Se o plug-in estiver instalado ele serao usado.
 * mais opcoes no final do artigo ou visite o manual fpdf.
 */
$pdf->Output("PaginaPdf", "I");
?>