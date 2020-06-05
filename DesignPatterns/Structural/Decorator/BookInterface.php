<?php
/**
 * @package  DesignPatterns\Structural
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2020 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace DesignPatterns\Structural\Decorator;

/**
 * Interface BookInterface
 */
interface BookInterface
{
    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @return string
     */
    public function getAuthor(): string;
}
