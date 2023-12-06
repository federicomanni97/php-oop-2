<?php
include __DIR__ . '/../Traits/DrawCard.php';
class Product
{
    use DrawCard;
    public float $price;
    public int $quantity;

    function __construct($price, $quantity)
    {
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function salesPrice($price)
    {
        if ($price > 70) {
            throw new Exception('Error');
        } else {
            $this-> price = $price;
        }
    }
    public function returnSale()
    {
        return $this->price;
    }
}