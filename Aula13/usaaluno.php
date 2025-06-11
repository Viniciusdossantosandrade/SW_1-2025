<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Miguel",5,7);

    $nota1 = $fulano ->getNota1();
    $nota2 = $fulano ->getNota2();
    $nome = $fulano ->getNome();

    //echo = $nota1;

    $Nome = $fulano->getNome$($nome);
    $media = $fulano->Media($nota1,$nota2);

    
    echo $fulano->Media($nota1,$nota2);


?>