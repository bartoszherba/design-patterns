<?php
/**
 * @package  DesignPatterns\Structural
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2020 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace DesignPatterns\Structural\Decorator;

/**
 * Class HighlightedBookDecorator
 */
class HighlightedBookDecorator extends AbstractBookDecorator
{
    /**
     * @var float
     */
    private float $additionalPrice = 12.99;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return sprintf("!!!!!%s!!!!!", $this->book->getTitle());
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return (float) $this->book->getPrice() + $this->additionalPrice;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return sprintf("Amazing %s", $this->book->getAuthor());
    }
}
