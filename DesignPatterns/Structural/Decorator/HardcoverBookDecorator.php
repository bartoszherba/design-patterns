<?php
/**
 * @package  DesignPatterns\Structural
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2020 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace DesignPatterns\Structural\Decorator;

/**
 * Class HardcoverBookDecorator
 */
class HardcoverBookDecorator extends AbstractBookDecorator
{
    /**
     * @var float|int
     */
    private float $extraPrice = 30.00;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->book->getTitle();
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return (float) $this->book->getPrice() + $this->extraPrice;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->book->getAuthor();
    }
}
