<?php
declare(strict_types=1);

class Colore
{

    public $nome;

    public $rgb;

    /**
     * Colore constructor.
     *
     * @param $nome
     * @param $rgb
     */
    public function __construct($nome, $rgb)
    {
        $this->nome = $nome;
        $this->rgb = $rgb;
    }

}
