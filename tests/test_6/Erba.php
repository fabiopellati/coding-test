<?php
declare(strict_types=1);

class Erba
{
    /**
     * @var \Colore
     */
    private $colore;

    /**
     * @param \Colore $colore
     */
    public function setColore(\Colore $colore): void
    {
        $this->colore = $colore;
    }

    /**
     * @return \Colore
     */
    public function getColore(): \Colore
    {
        return $this->colore;
    }

}
