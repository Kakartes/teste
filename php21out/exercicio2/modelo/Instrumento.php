<?php

class Instrumento {
    protected float $nota;

    public function __construct(float $nota = 0) {
        $this->nota = $nota;
    }

    public function getNota(): float {
        return $this->nota;
    }

    public function setNota(float $nota): self {
        $this->nota = $nota;
        return $this;
    }

    public function getNotaFinal(): float {
        return min($this->nota, 10);
    }
}

