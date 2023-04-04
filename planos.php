<?php

class plano extends menu_princ {
  public $quant_mb = array (1 => "1. 100mb", 2 => "2. 200mb + Jornal online", 3 => "3. 300mb + Netflix + Jornal online", 4 => "4. 400mb + Netflix + Jornal online + Spotify", 5 => "5. 500mb + Netflix + Jornal online + Spotify");
  public $valor = array (1 => "R$59,90", 2 => "R$69,90", 3 => "R$79,90", 4 => "R$89,90", 5 => "R$99,90");
  public function inserirPlanos(){
echo "Selecione um plano: \n";
for($i=1; $i <= count($this->quant_mb); $i++){
    echo $this->quant_mb[$i]."\n";
}
$qtd = fgets(STDIN);
    if ($qtd == 1){
      echo "Seu novo plano é de: " .$this->quant_mb[1]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[1];
    }
    elseif ($qtd == 2){
      echo "Seu novo plano é de: " .$this->quant_mb[2]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[2];
    }
    elseif ($qtd == 3){
      echo "Seu novo plano é de: " .$this->quant_mb[3]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[3];
    }
    elseif ($qtd == 4){
      echo "Seu novo plano é de: " .$this->quant_mb[4]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[4];
    }
    elseif ($qtd == 5){
      echo "Seu novo plano é de: " .$this->quant_mb[5]. "\n";
      echo "O valor do seu plano é de: " .$this->valor[5];
    }
    else {
      echo "Esse plano não existe";
    }
  }
}

?>