<?php

require_once ("modelo.php/Instrumento.php");

class Trabalho extends Instrumento {
    public function getNotaFinal(): float {
        $notaFinal = $this->nota + ($this->nota * 0.20);
        return min($notaFinal, 10);
    }
}
//meu deus
