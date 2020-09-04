<?php
    require_once('vendor/autoload.php');

    //local climate
    $climate = new League\CLImate\CLImate;

    $climate->out('Trabalho Composer e GIT - Macoto Tecnologias Emergentes');

    //menu
    $climate->out('[1] Raiz quadrada');
    $climate->out('[2] Fatorial');
    $climate->out('[3] Numero ao Quadrado');

    $input = $climate->input('Escolha umas das opções para soma:');
    $input->accept(['1','2','3']);
    $menu = $input->prompt();  

    switch ($menu){
        case '1':
            $numero1Input = $climate->input('Insira o numero que deseja: ');
            $numero1 = $numero1Input->prompt();
            echo sprintf("Resultado é: %s", sqrt($numero1));
        break;
        case '2':
            $numero1Input = $climate->input('Insira o numero que deseja:');
            $numero1 = $numero1Input->prompt();   
            
            class Fatorial 
            {    
                public function calcular($fator)
                {    
                    $resultado = 1;
                    for($i = $fator; $i > 1; $i--)
                    {
                        $resultado *= $fator;
                        $fator--;                 
                    }
                    return $resultado;
                }
            }
            $result = "";
            if (isset($numero1) && is_numeric($numero1))
            {
                # Instancia a classe Fatorial()
                $n1 = new Fatorial();
        
                # Executa a função
                $result = $n1->calcular((int)$numero1);
            }
                

            echo sprintf ("Resultado: %s", $result);
        break;
        case '3':
            $numero1Input = $climate->input('Insira o numero base desejado:');
            $numero1 = $numero1Input->prompt();

            $expoInput = $climate->input('Insira o numero expoente desejado:');
            $expo = $expoInput->prompt();

            echo sprintf ("O resultado é: %s", pow($numero1, $expo));
        break;
        default:

        break;
    }