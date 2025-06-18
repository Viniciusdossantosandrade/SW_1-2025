 <?php
 require_once 'Retangulo.class.php';
    $retangulo = new Retangulo();
    $retangulo->setLargura(5); 
    $retangulo->setAltura(10); 
    
    echo "Largura: " . $retangulo->getLargura() . "<br>";
    echo "Altura: " . $retangulo->getAltura() . "<br>";
    echo "Área: " . $retangulo->calcularArea() . "<br>";
    echo "Perímetro: " . $retangulo->calcularPerimetro() . "<br>";


?>