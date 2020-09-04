<?php
    require_once('vendor/autoload.php');

    //local climate
    $climate = new League\CLImate\CLImate;

    $climate->out('Trabalho Composer e GIT');

    //menu
    $climate->out('[1] Raiz quadrada');
    $climate->out('[2] Fatorial');
    $climate->out('[3] Numero ao Quadrado');

    $input = $climate->input('Escolha umas das opções para soma:');
    $input->accept(['1','2','3']);
    $menu = $input->prompt();  

    switch ($menu){
        case '1':

        break;
        case '2';

        break;
        case '3';


        break;
        default:

        break;
    }