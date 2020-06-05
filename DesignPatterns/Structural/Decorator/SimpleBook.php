<?php
/**
 * @package  DesignPatterns\Structural
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2020 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace DesignPatterns\Structural\Decorator;

/**
 * Class SimpleBook
 */
class SimpleBook implements BookInterface
{
    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $author;

    /**
     * @var float
     */
    private float $price;

    /**
     * SimpleBook constructor.
     *
     * @param string $title
     * @param string $author
     * @param float $price
     */
    public function __construct(string $title, string $author, float $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return (float) $this->price;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("%s written by %s as cheap as %s\n", $this->getTitle(), $this->getAuthor(), $this->getPrice());
    }
}
