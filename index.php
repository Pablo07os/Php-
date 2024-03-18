<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css"> 


  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">  
    <title>IMC</title>
</head>
<body>

<?php 
    $imagem1= 'images/Captura_de_tela_2024-03-09_170839-removebg-preview.png';
    $imagem2='images/Captura_de_tela_2024-03-09_170839-removebg-preview.png';
?>
<img class="logo1" src="<?php echo $imagem1; ?>">
<img class="logo2" src="<?php echo $imagem2; ?>">


<?php

   echo "<h1 class = ' titulo ' > Calcule seu IMC   </h1> ";
   echo "<p class = ' texto '  > O Índice de Massa Corporal (IMC) é uma medida amplamente utilizada para avaliar se uma pessoa está com o peso adequado em relação à sua altura. Trata-se de uma ferramenta simples, porém eficaz, que permite uma rápida avaliação do estado nutricional de um indivíduo.
   O cálculo do IMC é bastante direto e baseia-se na relação entre a altura e o peso da pessoa. A fórmula matemática para calcular o IMC é a seguinte: </p>"; 
   echo "<p class = ' texto1' > Um dos principais indicadores para saber se uma pessoa está dentro do seu peso ideal é o IMC (Índice de Massa Corporal). Tanto estar acima quanto abaixo dos valores considerados “Normais” por esse índice podem comprometer a saúde, aumentando os riscos de doenças.

 

   Para te ajudar a calcular de forma precisa se o seu peso está adequado ou não, trouxemos a fórmula do IMC e uma série de outras informações que evidenciam a importância desse protocolo para a realização de uma avaliação física eficiente.</p>";
   

   
   
   $pessoa = 'images/istockphoto-1312214654-612x612 (1).jpg';
   $form ='images/form imc.jpeg';

?>


<img class="pessoa" src="<?php echo $pessoa; ?>">

 <div class='botoes'>
        <button type='button' class='btn btn-um'>Saiba Mais</button>
        <button type='button' class='btn btn-dois'>Fale Conosco</button>
      </div>";


 <img class="form" src="<?php echo $form; ?>">
 <?php 
     $seta ='images/setapreta.png';
  ?>
  
  
  
  
  

 
 <img class="seta" src="<?php echo $seta; ?>">

<?php
    echo"<h2 class='classificacao' > Classificação do IMC </h2>";
    echo "<li class= 'linhas' > Índice abaixo de 18,5: Abaixo do peso </li> ";
    echo "<li class= 'linhas' > Índice entre 18,5 e 24,9: Peso normal </li> ";
    echo "<li class= 'linhas' > Índice entre 25 e 29,9: Sobrepeso </li> ";
    echo "<li class= 'linhas' > Índice entre 30 e 34,9: Obesidade grau I </li> ";
    echo "<li class= 'linhas' > Índice entre 35 e 39,9: Obesidade grau II (severa) </li> ";
    echo "<li class= 'linhas' > Índice igual ou superior a 40: Obesidade grau III (mórbida) </li> ";
?>
 <?php
  $h = 1.70;
  $peso = 50;
  $imc = $peso/($h*$h);

  echo "<h2 class = ' imc ' > Seu IMC ↓ </h2> ";
  echo "<h3 class = ' num ' >  $imc </h3> ";
  echo "<h4 class = ' peso ' > Seu peso é $peso kg </h4> ";
  echo "<h4 class = ' h ' >  Sua altura é $h cm </h4> ";

  if ($imc<=18.5){
    echo " <p class = ' resu ' > <br> Abaixo do peso  </p> ";
  }else if ($imc<=24.9){
    echo " <p class = ' resu ' > <br> Peso normal <br> </p>"  ;
  }else if ($imc<=29.9){
    echo "  <p class = ' resu ' > <br> Soprepeso  </p>";
  }else if ($imc<=34.9){
    echo "  <p class = ' resu ' > <br> Obesidade grau I  </p> ";
  }else if ($imc<=39.9){
    echo "  <p class = ' resu ' > <br> Obesidade grau II (Severa)  </p> ";
  }else {
    echo "  <p class = ' resu ' > <br> Obesidade grau III (Mórbida)  </p>";
  }

  echo "<div class= ' div ' > </div>";

?>
<!-- cards aq dpb-->
<div class="cards-container">
     <div class="card">
    <img src="images/forte.avif">
    <div>
      <h1>Exercicios</h1>
      <h2>Crescimento Muscular</h2>
      <span>R$ 10,00</span>
      <button>Saiba mais</button>
    </div>
  </div>

  <div class="card">
    <img src="images/dieta2.png">
    <div>
      <h1>Dieta</h1>
      <h2>Seja Saudavel</h2>
      <span>R$ 6,90</span>
      <button>Saiba mais</button>
    </div>
  </div>

  <div class="card">
    <img src="images/acima2.jpg">
    <div>
      <h1>Emagrecimento</h1>
      <h2>Perda de gordura corporal</h2>
      <span>R$ 22,80</span>
      <button>Saiba mais</button>
    </div>
  </div>
  </div> 
<!-- rodapé aq dpb-->

<footer class="rodape">
  <div class="rodape-secao">
    <h3 class="mp">Menu Perfeito</h3>
    <p class="topicos">Topicos Principais</p>
  </div>
  <div class="rodape-secao1">
    <h3 class="links">Links Importantes</h3>
    <p class="links-item1">Pagamento de cursos</p>
    <p class="links-item2">Preciso de ajuda</p>
    <p class="links-item">Historias da web</p>
  </div>
  <div class="rodape-secao">
    <h3 class="siga">Nos siga</h3>
    <p class="arroba1">pablinn_souza07</p>
    <p class="arroba">pires.png</p>
  </div>
  <div class="rodape-texto-final">
    <p>© 2024 Etec de Guaianazes</p>
  </div>
</footer>


</body>



       


  
</body>
</html>