<?php
/**
 * @package  DesignPatterns\Behavioral
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2020 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace DesignPatterns\Behavioral\Observer;

use SplSubject;

/**
 * Class Logger
 */
class Logger implements \SplObserver
{
    /**
     * @var string
     */
    private string $name;

    /**
     * Logger constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        echo "#########Logger {$this->name}: {$subject->lastWords}##########\n";
    }
}
