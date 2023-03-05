<?php

namespace Commerce\App;

/**
 * Product class
 */
class Product
{
    /**
     * Product Name
     *
     * @var string
     */
    private string $name;

    /**
     * Product Price
     *
     * @var float
     */
    private float $price;


    /**
     * Constructor function
     */
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Invoke function
     *
     * @return void
     */
    public function __invoke()
    {
        echo "invoke is called" . PHP_EOL;
    }

    /**
     * Call Static function
     *
     * @return void
     */
    public function __call(string $name, array $arguments)
    {
        echo "call $name function is called" . PHP_EOL;
    }
    /**
     * Method return product name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Method return product price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}