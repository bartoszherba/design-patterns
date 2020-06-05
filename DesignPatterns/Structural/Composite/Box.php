<?php
namespace DesignPatterns\Structural\Composite;

/**
 * Class Box
 */
class Box implements PackageInterface
{
    /**
     * @var PackageInterface[]
     */
    private $elements = [];

    /**
     * @var float
     */
    private $value;

    /**
     * Box constructor.
     *
     * @param float $value
     */
    public function __construct(float $value = 0.0)
    {
        $this->value = $value;
    }

    /**
     * @param PackageInterface $package
     *
     * @return $this
     */
    public function add(PackageInterface $package): Box
    {
        $this->elements[] = $package;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        $price = $this->value;
        foreach ($this->elements as $element) {
            $price += $element->getPrice();
        }

        return $price;
    }
}
