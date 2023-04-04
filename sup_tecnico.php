<?php

class sup_tecnico{
  public $tecnico;
  public $telefone;
  public $num_registro;
  public function inserirsup_tecnico(){
    echo "\nBem vindo ao Suporte técnico!\n\n";
    echo "Informe o tecnico responsável: ";
    $tecnico = fgets(STDIN);

    echo "informe o telefone do cliente: ";
    $telefone = fgets(STDIN);

    echo "informe o número de registro: ";
    $num_registro = fgets(STDIN);


    echo $tecnico."\n";
    echo $telefone."\n";
    echo $num_registro."\n";
  }
}

?>