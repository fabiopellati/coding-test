<?php
declare(strict_types=1);

class Sole
{
    /**
     * @var \Colore
     */
    private $colore;

    /**
     * Sole constructor.
     *
     * @param \Colore $colore
     */
    public function __construct(\Colore $colore)
    {
        $this->colore = $colore;
    }

}
