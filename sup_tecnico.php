<?php

require_once "menu.php";

class sup_tecnico {
  public $tecnico;
  public $num_registro;
  public $telefone_confirmacao;
  public $nome_confirmacao;
  public $ordem_servico;
  
  public function inserirsup_tecnico(){
    
    //introdução do código
    echo "\nBem vindo ao Suporte técnico!\n";
    
    //confirmação dos dados
    echo "Por segurança informe seu nome:\n";
    $nome_confirmacao = fgets(STDIN);

    echo "Agora informe o telefone: \n";
    $telefone_confirmacao = fgets(STDIN);
    
    echo "Informe o tecnico responsável: \n";
    $tecnico = fgets(STDIN);

    //gerar a ordem de serviço
    $num_registro =  rand(100,999);

    $ordem_servico = rand(10,99);
    
    //atribuindo os valores criados na function para os objetos, literalmente é isso
    $this->nome_confirmacao = $nome_confirmacao;
    $this->telefone_confirmacao = $telefone_confirmacao;
    $this->tecnico = $tecnico;
    $this->num_registro = $num_registro;
    $this->ordem_servico = $ordem_servico;

    //print das informações, puxando através dos objetos
    echo "Sua ordem de serviço é: ".$this->ordem_servico."\n";
    echo "Nome: ".$this->nome_confirmacao."\n";
    echo "Telefone: ".$this->telefone_confirmacao."\n";
    echo "Técnico responsável: ".$this->tecnico."\n";
    echo "Número de registro: ".$this->num_registro."\n";

    //menu para retornar ao menu inicial ou ao a inicio da função  
    echo "Agora o que vc deseja fazer?"."\n";
    echo "1 - voltar para o menu inicial"."\n";
    echo "2 - Voltar ao inicio desta função"."\n";
      
    $opcao = fgets(STDIN);
      
     if ($opcao == 1){       
      $menus = new menu_princ();
      $menus->getmenu();
       
     }
     elseif($opcao == 2){
       $suporte = new sup_tecnico();
       $suporte->inserirsup_tecnico();
     }
     else{
       echo "Acho que você errou";
     }
  }
  
}
