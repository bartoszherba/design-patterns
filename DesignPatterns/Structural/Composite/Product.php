<?php
namespace DesignPatterns\Structural\Composite;

/**
 * Class Product
 */
class Product implements PackageInterface
{
    /**
     * @var float
     */
    private $value;

    /**
     * Product constructor.
     *
     * @param float $value
     */
    public function __construct(float $value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->value;
    }
}
