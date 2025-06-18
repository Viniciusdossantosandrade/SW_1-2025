<?php
    class Funcionario{
        private $Nome;
        private $Salario;
        
        public function __construct($Nome, $Salario){
            $this->Nome = $Nome;
            $this->Salario = $Salario;
        }

        public function aumentarSalario(){
            $this->Salario = $this->Salario * 0.1;
        }
        public function exibirInformacoes(){
            return $this->Nome;
            return $this->Salario;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function getSalario(){
            return $this->Salario;
        }

        public function Teste($Nome, $Salario){
            echo "Nome: $Nome <br>";
            echo "Salario: $Salario <br>";
        }

    }
        
    
    


?>