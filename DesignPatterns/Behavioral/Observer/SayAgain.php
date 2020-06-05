<?php
/**
 * @package  DesignPatterns\Behavioral
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2020 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace DesignPatterns\Behavioral\Observer;

use SplObserver;

/**
 * Class EventManager
 */
final class SayAgain implements \SplSubject
{
    /**
     * @var string
     */
    public string $lastWords;

    /**
     * @var \SplObjectStorage
     */
    private \SplObjectStorage $listeners;

    /**
     * SayAgain constructor.
     */
    public function __construct()
    {
        $this->listeners = new \SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     *
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->listeners->attach($observer);
    }

    /**
     * @param SplObserver $observer
     *
     * @return void
     */
    public function detach(SplObserver $observer): void
    {
        $this->listeners->detach($observer);
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        /** @var SplObserver $listener */
        foreach ($this->listeners as $listener) {
            $listener->update($this);
        }
    }

    /**
     * @param string $text
     * @param int $times
     *
     * @return void
     */
    public function repeat(string $text, int $times = 1): void
    {
        $this->lastWords = $text;

        while ($times--) {
            echo $text . "\n";
        }

        $this->notify();
    }
}
