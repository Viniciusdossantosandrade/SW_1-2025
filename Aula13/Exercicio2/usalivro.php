<?php
include_once 'Livro.class.php';

// Livro 1
$livro1 = new Livro("Lusíadas", "Camões", true);
echo "MOSTRA O STATUS DO LIVRO<br>";
echo $livro1->ExibirStatus();
echo "<hr>";

echo "REALIZANDO UM EMPRÉSTIMO<br>";
echo $livro1->Emprestar();
echo $livro1->ExibirStatus();
echo "<hr>";

// Livro 2
$livro2 = new Livro("Luciola", "José de Alencar", false);
echo "MOSTRA O STATUS DO LIVRO<br>";
echo $livro2->ExibirStatus();
echo "<hr>";

echo "REALIZANDO UM EMPRÉSTIMO<br>";
echo $livro2->Emprestar();
echo $livro2->ExibirStatus();
echo "<hr>";

// Livro 3
$livro3 = new Livro("A Moreninha", "Joaquim Manuel de Macedo", true);
echo "MOSTRA O STATUS DO LIVRO<br>";
echo $livro3->ExibirStatus();
echo "<hr>";

echo "REALIZANDO UM EMPRÉSTIMO<br>";
echo $livro3->Emprestar();
echo $livro3->ExibirStatus();
echo "<hr>";
?>
