<?php

require_once("modelo.php/Instrumento.php");

class Participacao extends Instrumento {
    public function getNotaFinal(): float {
        return min($this->nota, 10);
    }
}
