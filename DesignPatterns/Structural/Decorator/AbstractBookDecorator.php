<?php
/**
 * @package  DesignPatterns\Structural
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2020 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace DesignPatterns\Structural\Decorator;

/**
 * Class AbstractBookDecorator
 */
abstract class AbstractBookDecorator implements BookInterface
{
    /**
     * @var BookInterface
     */
    protected BookInterface $book;

    /**
     * AbstractBookDecorator constructor.
     *
     * @param BookInterface $book
     */
    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("%s written by %s as cheap as %s\n", $this->getTitle(), $this->getAuthor(), $this->getPrice());
    }
}
