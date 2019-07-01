<?php?>
<html>
  <head>
  <meta charset="utf-8">
   <meta name="keywords" content="loteria,megasena,mega sena, lotofacil" />
	<meta name="description" content="gerador de numero da loteria" />
    <title>QUINA - CONTROL 4 SISTEMAS</title>
  </head>

  <body bgcolor="#00008B" text="#ffffff" link="yellow" alink="yellow" vlink="orange">

    <center>
      <table border='0' cellspacing='2' cellpadding='10' width="90%" align="center">
        <tbody>
          <tr>
            <td colspan='6' align='center'>
              <font face='verdana, helvetica, arial'><b>QUINA<br>Os números sorteados foram:</b></font>
            </td>
          </tr>

          <tr>

          <?php

          /*
            Utiliza um gerador de n�meros aleat�rios com um LOOP para gerar os 
            n�meros X e a cada LOOP voc� envia o n�mero para um array, s� que 
            dentro do LOOP coloque uma condi��o if testando se o n�mero X j� 
            existe no array, caso exista gere um novo.
          */
          $numero_de_X = 5;  // quantidade de n�meros sorteados do concurso da Mega Sena
          $index       = 0;
          $matriz      = array();

          while($index < $numero_de_X)  // ENQUANTO $index FOR MENOR QUE $numero_de_X FACA
             {
                $rand        = mt_rand(0, 80);  // sorteia um n�mero entre 0 at� 60
                $qual_numero = $index + 1;

                if(!in_array($rand, $matriz))  // SE os 6 n�meros da mega sena N�O FOREM IGUAIS ENT�O
                   {
                      $matriz[$index] = $rand;
                      $index++;
                   }
             }

          /*
            Ordena os n�meros sorteados
          */
          sort($matriz);

          while(list($chave, $valor) = each($matriz))
             {
                echo "<td>
                        <center>
                          <font size='6' face='verdana, helvetica, arial' color='white'><b>";
                           	if($valor < 10){ 
                           		echo "0" . $valor;
                           	}else{
	                           	echo $valor;
                           	}
                           	
                           	  
                       echo "</b></font></center></td>";
                      
                     
             }

          ?>

          </tr>
        </tbody>
      </table>
    </center>

  </body>

</html>
