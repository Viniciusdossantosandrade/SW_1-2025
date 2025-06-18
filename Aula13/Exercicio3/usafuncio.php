<?php
    require_once 'Funcionario.class.php'; 

    
    $funcionario1 = new Funcionario("João", 3000);
    $funcionario2 = new Funcionario("Pedro", 7000);
    $funcionario3 = new Funcionario("Thiago", 2000);
    
    $funcionario1->aumentarSalario(3000 * 0.1);
    $funcionario2->aumentarSalario(3000 * 0.1);
    $funcionario3->aumentarSalario(3000 * 0.1);

    echo $funcionario1->exibirInformacoes() . "<br>";
    echo $salario = $funcionario1->getSalario() . "<br>";

    echo $funcionario2->exibirInformacoes() . "<br>";
    echo $salario = $funcionario2->getSalario() . "<br>";

    echo $funcionario3->exibirInformacoes() . "<br>";
    echo $salario = $funcionario3->getSalario() . "<br>";
?>