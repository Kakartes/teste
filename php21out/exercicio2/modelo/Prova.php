<?php

require_once("modelo.php/Instrumento.php");

class Prova extends Instrumento {
    public function getNotaFinal(): float {
        $notaFinal = $this->nota + ($this->nota * 0.30);
        return min($notaFinal, 10);
    }
}
