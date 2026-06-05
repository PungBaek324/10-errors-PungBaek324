<?php 
class Basket
{
    public function total(int $price, int $quantity)
    {
        return $price * $quantity;
    }
}

$basket = new Basket(); ?>
<h1>Basket</h1>
<?= $basket->total(3, 5) ?>