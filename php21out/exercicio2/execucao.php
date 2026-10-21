<?php

    require_once("modelo.php/Participacao.php");
    require_once("modelo.php/Prova.php");
    require_once("modelo.php/Trabalho.php");
    require_once("modelo.php/Instrumento.php");

        $istrumentos = [];

        $soma = 0;


        for ($i = 1; $i <= 3; $i++){
            echo "Instrumento {$i} \n";
            echo "Tipo (1-Prova, 2-Trabalho ou 3-Participacao): ";

            $instrumento = null;

            $tipo = readline("informe o tipo do instrumento");
            if($tipo == 1) {
                $instrumento = new Prova(readline("Informe a nota: "));
            } elseif ($tipo == 2) {
                $instrumento = new Trabalho(readline("Informe a nota: "));
                } elseif ($tipo == 3) {
                $instrumento = new Participacao(readline("Informe a nota: "));}
        
                array_push($istrumentos, $instrumento);
} 

        //soma
            $instrumentos[] = $instrumento;{
            $soma += $this->getNotaFinal();

            echo "Nota final do instrumento $soma: " . $instrumento->getNotaFinal() . "\n";
        }

$media = count($instrumentos) > 0 ? $soma / count($instrumentos) : 0;
echo "Média final do aluno: " . $media . "\n";